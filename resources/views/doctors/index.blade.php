@extends('layouts.main')

@section('container')

<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="mb-5">
        </div>

        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <h1>Doctors</h1>
                <div class="text-end mb-3">
                    <form action="{{ route('doctors.index') }}" method="get">
                        <div class="input-group">
                            <select class="form-select" name="province_id" id="provinceFilter">
                                <option value="">All Provinces</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}" {{ request()->input('province_id') == $province->id ? 'selected' : '' }}>
                                        {{ $province->name }}
                                    </option>
                                @endforeach
                            </select>
                            <button class="btn btn-success" type="submit">Filter</button>
                        </div>
                    </form>
                </div>
                <!-- Project Card 1-->
                @foreach ($doctors as $dr)
                    @csrf
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5 clickable" onclick="cardClicked()">
                        <div class="card-body p-0">
                            <div class="row align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">{{ $dr->name }}</h2>
                                    <h5 class="fw">{{ $dr->hospital }}</h5>
                                    <h6>{{ $dr->address }}, {{ $dr->province->name }} {{ $dr->city->name }}</h6>
                                 
                                    <div class="d-flex">
                                        <form action="{{ route('article.edit') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="idarc" id="idarc" value="{{ $dr->id }}" readonly>
                                            <button class="btn btn-sm btn-success" type="submit">Detail</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection