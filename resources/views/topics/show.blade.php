@extends('layouts.main')

@section('container')


<!-- <h1>{{ $topic->title }}</h1>

<p>{{ $topic->content }}</p> -->






@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- @foreach($topic->replies as $reply) --}}
<a href="/forum" class="btn btn-primary mt-2"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
<br>
<br>
    <div class="card border-3 mb-3" style="background-color:#00FFFF;">
        <div class="card-header" style="background-color: #00cccc;">
            <h1 class="card-title"> <img class="small-img img-fluid" src="{{ asset($topic->image) }}" width="50" height="50" alt="..." /> {{ $topic->title }}</h1>
        </div>

        <div class="card-body">
            <div id="card-text-container"></div>
        </div>
    </div>
{{-- @endforeach --}}

<input type="hidden" name="idtop" id="idtop" value="{{ $id }}" readonly>

<form action="{{ route('replies.store', $id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="content">Comment</label>
        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Comment</button>
</form>

<style>
    .card-container {
  display: flex;
}

.avatar {
  flex-shrink: 0; /* Prevent the image from shrinking */
  margin-right: 10px; /* Add some spacing between the picture and the content */
}

.content-container {
  flex-grow: 1; /* Allow the content to take up remaining space */
}

.own-message {
    background-color: #3f51b5;
    color: #ffffff;
    padding: 10px;
    border-radius: 10px;
}

.other-message {
    background-color: #f1f0f0;
    color: #333333;
    padding: 10px;
    border-radius: 10px;

}
</style>


 



@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
//    document.addEventListener("DOMContentLoaded", function() {
        
$(document).ready(function() {
    var idValue = document.getElementById("idtop").value;

        // console.log(idValue);
    $.ajax({
        url: '{{ route('getReplies') }}',
        data: {
            id: idValue // Pass the desired ID
        },
        method: 'GET',
        success: function(response) {
            var count = response.recordsTotal;
            if(count != 0){
                for(var i = 0; i<count; i++){
                    // console.log(response.data[i]);
                    
                    var date = response.data[i].topic_date;
                    var time = response.data[i].topic_time;
                    var datetime = time + ' ' + date;
                    var pictureUrl = '{{ asset('') }}' + response.data[i].user.avatar;
                    console.log(pictureUrl);

                    var cardContainer = $('<div class="card-container"></div><br>');

                    var pictureElement = $('<img class="avatar mt-3" width="50" height="50">').attr('src', pictureUrl);

                    var contentContainer = $('<div class="content-container"></div>');
                    var timeElement = $('<h7 class="time text-secondary"></h7>').text(datetime);
                    var contentElement = $('<h5 class="card-text fw-bold"></h5>').text(response.data[i].content);

                    if (response.data[i].user.id == {{ auth()->user()->id }}) {
                        cardContainer.addClass('flex-row-reverse');
                        contentContainer.addClass('text-end');
                        contentElement.addClass('own-message');
                    } else{
                        contentElement.addClass('other-message');
                    }

                    contentContainer.append(timeElement, contentElement);

                    cardContainer.append(pictureElement, contentContainer);

                    $('#card-text-container').append(cardContainer);
                }
            }
    
        },
        error: function() {
            console.log('Failed to fetch live text.');
        }
    });
});
    // });
    
    // $(document).ready(function() {
    //     $.ajax({
    //         url: '/your-api-endpoint', // Replace with your API endpoint URL
    //         method: 'GET',
    //         success: function(response) {
    //             response.forEach(function(item) {
    //                 var cardText = $('<p class="card-text"></p>').text(item.text);
    //                 $('#card-text-container').append(cardText);
    //             });
    //         },
    //         error: function() {
    //             console.log('Failed to fetch live text.');
    //         }
    //     });
    // });
</script>

{{-- @push('js')
<script>
    var pass = document.getElementById('id').value;
    console.log(pass);
    // $(document).ready(function() {
    //     $.ajax({
    //         url: '{{ route('getApplied') }}', 
    //         data: function (d) {
    //                 d.id = pass; // Pass the desired ID
    //         }// Replace with your API endpoint URL
    //         method: 'GET',
    //         success: function(response) {
    //             response.forEach(function(item) {
    //                 var cardText = $('<p class="card-text"></p>').text(item.text);
    //                 $('#card-text-container').append(cardText);
    //             });
    //         },
    //         error: function() {
    //             console.log('Failed to fetch live text.');
    //         }
    //     });
    // });
</script>
@endpush --}}