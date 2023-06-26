@extends('layouts.main')

@section('container')

<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">List Job Posting</span></h1>
            <a href="{{ route('topics.create') }}" class="btn btn-primary">Create Forum</a>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                @foreach ($topics as $tp)
                    @csrf
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5 clickable" onclick="cardClicked()">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">{{ $tp->title }}</h2>
                                    <p>{{ $tp->content }}</p>
                                    <div class="d-flex">
                                        <form action="{{ route('topics.show') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="idtop" id="idtop"
                                            value="{{ $tp->id }}" readonly>
                                            <button class="btn btn-sm btn-success" type="submit"><i
                                                    class="fa-solid fa-right-to-bracket"></i>Detail</button>
                                        </form>
                                    </div>
                                    {{-- <a href=""><div class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></div></a> --}}
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/study.jpeg') }}" alt="..." />
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Project Card 2-->
                {{-- <div class="card overflow-hidden shadow rounded-4 border-0 clickable" onclick="cardClicked()">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">Nama Pekerjaan 2</h2>
                                <p>Deskripsi dari dari jobdesc tersebut, Deskripsi dari dari jobdesc tersebut, Deskripsi
                                    dari dari jobdesc tersebut, Deskripsi dari dari jobdesc tersebut, Deskripsi dari
                                    dari jobdesc tersebut</p>
                                    <a href="{{ url('companylistdetail') }}"><div class="btn btn-sm btn-success fw-bold text-white">Detail</div></a>
                                    <a href=""><div class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></div></a>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/tes.jpg') }}" alt="..." />
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
@endsection
