@extends('template.layout')

@section('titulo', 'Catalogo de T-Shirts')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach($tshirt_images as $tshirt_image)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="{{ $tshirt_image->image_path }}" class="card-img-top" alt="T-Shirt Image">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $tshirt_image->name }}</h5>
                                    <p class="card-text">{{ $tshirt_image->description }}</p>
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