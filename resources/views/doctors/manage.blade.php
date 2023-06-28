@extends('layouts.main')

@section('container')
    <!-- resources/views/moods/index.blade.php -->
    <!DOCTYPE html>
    <html>
    <head>
        <!-- Add your head content here -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    </head>
    <body>

    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-md-12">
                    <h1 class="text-center">Manage Psychiatrists</h1>
                    <div class="container">
                        <a class="btn btn-info" href="javascript:void(0)" id="createNewPost">Add New Psychiatrist</a>
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Hospital</th>
                                <th>Address</th>
                                <th>Province</th>
                                <th>City</th>
                                <th>Phone Number</th>
                                <th width="280px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="modal fade" id="addEditPsychiatristModal" tabindex="-1" aria-labelledby="addEditPsychiatristModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEditPsychiatristModalLabel">Add/Edit Psychiatrist</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addEditPsychiatristForm">
                    @csrf
                    <div class="modal-body">
                        <!-- Form inputs for psychiatrist's information -->
                        <input type="hidden" id="psychiatristId" name="psychiatristId">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="hospital">Hospital</label>
                            <input type="text" class="form-control" id="hospital" name="hospital">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number">
                        </div>
                        <div class="form-group">
                            <label for="province_id">Province</label>
                            <select class="form-control" name="province_id" id="province_id" onchange="getCityDropdown()" required>
                                <option disabled selected value="0">Select Province</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_id">City</label>
                            <select name="city_id" id="city_id" class="form-control" required>
                            </select>
                        </div>
                        <!-- Add more form inputs as needed -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="savePsychiatristBtn">Save</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        var table = $('.data-table').DataTable({
            searching: true, // Enable searching
            processing: true,
            serverSide: true,
            ajax: "{{ route('getDoctors') }}",
            columns: [
                { data: 'id', name: 'No' },
                { data: 'name', name: 'Name' },
                { data: 'hospital', name: 'Hospital' },
                { data: 'address', name: 'Address' },
                { data: 'prv', name: 'Province' },
                { data: 'ct', name: 'City' },
                { data: 'phone_number', name: 'Phone Number' },
                // Add more columns as needed
                {
                    data: null,
                    name: 'Action',
                    render: function(data, type, row) {
                        return '<meta name="csrf-token" content="{{ csrf_token() }}">' +
                            '<button class="btn btn-sm btn-success editBtn" data-id="' + data.id + '">Edit</button>' +
                            '<button class="btn btn-sm btn-danger delBtn" data-id="' + data.id + '">Delete</button>';
                    },
                    orderable: false
                }
            ]
        });

        function getCityDropdown() {
            var provinceId = $("#province_id").val();
            $.ajax({
                type: 'GET',
                url: '/getCity/' + provinceId,
                success: function(data) {
                    var dropdownCity = '';
                    for (var i = 0; i < data.length; i++) {
                        dropdownCity += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                    }
                    $("#city_id").html(dropdownCity);
                },
                error: function() {
                    console.log("Failed to load cities.");
                }
            });
        }

        $('#createNewPost').click(function() {
            $('#addEditPsychiatristModalLabel').text('Add Psychiatrist');
            $('#psychiatristId').val('');
            $('#name').val('');
            $('#hospital').val('');
            $('#address').val('');
            $('#phone_number').val('');
            $('#province_id').val(0);
            $('#city_id').html('');
            $('#addEditPsychiatristModal').modal('show');
        });

        $(document).on('click', '.editBtn', function() {
            var psychiatristId = $(this).data('id');
            $.ajax({
                url: '/getDoctorById/' + psychiatristId,
                type: 'GET',
                success: function(response) {
                    // console.log(response[0].id);
                    $('#addEditPsychiatristModalLabel').text('Edit Psychiatrist');
                    $('#psychiatristId').val(response[0].id);
                    $('#name').val(response[0].name);
                    $('#hospital').val(response[0].hospital);
                    $('#address').val(response[0].address);
                    $('#phone_number').val(response[0].phone_number);
                    $('#province_id').val(response[0].province_id);
                    getCityDropdown();
                    $('#city_id').val(response[0].city_id);
                    $('#addEditPsychiatristModal').modal('show');
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });

        $('#savePsychiatristBtn').click(function() {
            var psychiatristId = $('#psychiatristId').val();
            var name = $('#name').val();
            var hospital = $('#hospital').val();
            var address = $('#address').val();
            var phone_number = $('#phone_number').val();
            var province_id = $('#province_id').val();
            var city_id = $('#city_id').val();
            var url = psychiatristId ? "{{ route('updateDoctor') }}" : "{{ route('storeDoctor') }}";

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: psychiatristId,
                    name: name,
                    hospital: hospital,
                    address: address,
                    phone_number: phone_number,
                    province_id: province_id,
                    city_id: city_id
                },
                success: function(response) {
                    $('#addEditPsychiatristModal').modal('hide');
                    table.ajax.reload();
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });

        $(document).on('click', '.delBtn', function() {
            var psychiatristId = $(this).data('id');
            $.ajax({
                url: '/deleteDoctor',
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: psychiatristId
                },
                success: function(response) {
                    table.ajax.reload();
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });

        $(document).ready(function() {
            $('#province_id').change(function() {
                getCityDropdown();
            });
        });
    </script>

</body>
</html>
@endsection
