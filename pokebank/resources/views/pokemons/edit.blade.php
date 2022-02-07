@extends('pokemons.layout')
@section('content')
<body class="bg-success bg-gradient">
<h1 class="h1">Edit Pokemon</h1>
@if($errors->any())
        <div>
            <ul class="list-group">
                @foreach($errors->all() as $e)
                        <li class="list-group-item list-group-item-danger m-1">{{ $e }}</>
                @endforeach
            </ul>
        </div>
@endif
    <form action="{{route('pokemons.update',$pokemon->id)}}" class="card card-body bg-secondary" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <label>@lang('Name')</label>
        <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name',$pokemon->name) }}" >
        </div>
        <div class="mb-3">
        <label>@lang('Level')</label>
        <input type="number" class="form-control" name="level" placeholder="10" value="{{old('level',$pokemon->level)}}">
        </div>
        <div class="mb-3">
        <label>@lang('Types')</label>
        <div class="mb-3">
        <input class="form-check-input" type="checkbox" name="types[]" value="Planta" {{ in_array('Planta',json_decode($pokemon->types)) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Plant')</label>
        <input class="form-check-input" type="checkbox" name="types[]" value="Agua" {{ in_array('Agua',json_decode($pokemon->types)) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Water')</label>
        <input class="form-check-input" type="checkbox" name="types[]" value="Fuego" {{ in_array('Fuego',json_decode($pokemon->types)) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Fire')</label>
        <input class="form-check-input" type="checkbox" name="types[]" value="Electrico" {{ in_array('Electrico',json_decode($pokemon->types)) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Electric')</label>
        </div>
        </div>
        <div class="mb-3">
        <label class="form-label">@lang('Genedre')</label>
        <div class="mb-3">
        <input type="radio" name="gendre" value="male" {{ $pokemon->gendre === 'male' ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Male')</label>
        <input type="radio" name="gendre" value="female" {{ $pokemon->gendre === 'female' ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Female')</label>
        </div>
        </div>
        <div class="mb-3">
        <label class="form-label">@lang('Description')</label>
        <textarea class="form-control" name="description" rows="4" value="{{old('description',$pokemon->description)}}"></textarea>
        </div>
        <div class="mb-3">
        <label class="form-label">Shiny</label>
        <select class="form-select" name="shiny" id="shiny">
                    <option value="True" value="{{ old('shiny',$pokemon->shiny) }}">True</option>
                    <option value="False" value="{{ old('shiny',$pokemon->shiny) }}">False</option>
                </select>
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">@lang('Image')</label>
        <input class="form-control" type='file' name='image' id="formFile">
        </div>

        <input type="submit" value="Enviar">
    </body>
@endsection