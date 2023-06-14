@extends('template.layout')

@section('titulo', 'Catalogo de T-Shirts')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach($tshirtImages as $tshirtImage)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="{{ asset('storage/tshirt_images/' . $tshirtImage->image_url) }}" class="card-img-top" alt="T-Shirt Image" style="width: 150px; height: 150px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $tshirtImage->name }}</h5>
                                    <p class="card-text">{{ $tshirtImage->description }}</p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection