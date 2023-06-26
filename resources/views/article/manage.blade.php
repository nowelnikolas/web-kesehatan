@extends('layouts.main')

@section('container')

<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="mb-5">


        </div>


        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <h1>Manage Article</h1>
                <div class="text-end mb-3">
                    <a href="{{ route('topics.create') }}" class="btn btn-success">Create Article</a>
                </div>
                <!-- Project Card 1-->
                @foreach ($article as $arc)
                @csrf
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5 clickable" onclick="cardClicked()">
                    <div class="card-body p-0">
                        <div class="row align-items-center">
                            <div class="p-5 col-7">
                                <h2 class="fw-bolder">{{ $arc->title }}</h2>
                                {{-- <p>{{ $arc->content }}</p> --}}
                                <div class="d-flex">
                                    <form action="{{ route('article.edit') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="idarc" id="idarc" value="{{ $arc->id }}" readonly>
                                        <button class="btn btn-sm btn-success" type="submit">Edit</button>
                                    </form>
                                    <form action="{{ route('deleteArc', ['id' => $arc->id]) }}" method="POST"
                                        class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-end col-5">
                            <img class="img-fluid" src="{{ asset('assets/study.jpeg') }}" alt="..." />
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