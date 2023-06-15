@extends('template.layout')

@section('titulo', 'Catalogo de T-Shirts')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('tshirt_images.catalogo') }}" method="GET" class="search-bar mb-3 d-flex">
                    <select id="status-select" class="form-control" style="width:20%" name="category">
                        <option value="">Todas as Categorias</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                    </select>
                    <input type="text" id="search-input" placeholder="Procura por Nome" class="form-control" name="search">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </form>
                <div class="row">
                    @foreach($tshirtImages as $tshirtImage)
                        <div class="col-md-4 items-center">
                            <div class="card mb-4 text-center align-items-center">
                                <img src="{{ asset('storage/tshirt_images/' . $tshirtImage->image_url) }}" class="card-img-top" alt="T-Shirt Image" style="width: 150px; height: 150px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $tshirtImage->name }}</h5>
                                    <select class="form-control">
                                        <option value="">Select Color</option>
                                        @foreach($colors as $color)
                                            <option value="{{ $color->code }}">{{ $color->name }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control">
                                        <option value="">Select Size</option>
                                        
                                    </select>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            {{ $tshirtImages->links() }}
            </div>
        </div>
    </div>
@endsection