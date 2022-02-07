@extends('pokemons.layout')
@section('content')
<body class="bg-primary bg-gradient">
<h1 class="h1">Create a Pokemon</h1>
@if($errors->any())
        <div>
            <ul class="list-group">
                @foreach($errors->all() as $e)
                        <li class="list-group-item list-group-item-danger m-1">{{ $e }}</>
                @endforeach
            </ul>
        </div>
@endif
    <form action="{{route('pokemons.store')}}" class="card card-body bg-secondary" enctype="multipart/form-data" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
        <label class="form-label">@lang('Name')</label>
        <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
        <label class="form-label">@lang('Level')</label>
        <input type="number" class="form-control" name="level" placeholder="10" value="{{ old('level') }}" required>
        </div>
        <div class="mb-3">
        <label class="form-label">@lang('Capture date')</label>
        <input type="date" class="form-control" name="capture_date" value="{{old('capture_date')}}" required>
        </div>
        <div class="mb-3">
        <label class="form-label">@lang('Types')</label>
        <div class="mb-3">
        <input class="form-check-input" type="checkbox" name="types[]" value="Planta" {{ (is_array(old('types')) and in_array('Planta', old('types'))) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Plant')</label>
        <input class="form-check-input" type="checkbox" name="types[]" value="Agua" {{ (is_array(old('types')) and in_array('Agua', old('types'))) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Water')</label>
        <input class="form-check-input" type="checkbox" name="types[]" value="Fuego" {{ (is_array(old('types')) and in_array('Fuego', old('types'))) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Fire')</label>
        <input class="form-check-input" type="checkbox" name="types[]" value="Electrico" {{ (is_array(old('types')) and in_array('Electrico', old('types'))) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Electric')</label>
        </div>
        </div>
        <div class="mb-3">
        <label class="form-label">@lang('Genedre')</label>
        <div class="mb-3">
        <input class="form-check-input" type="radio" name="gendre" value="male" {{ old('male') ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Male')</label>
        <input class="form-check-input" type="radio" name="gendre" value="female" {{ old('female') ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Female')</label>
        </div>
        </div>
        <div class="mb-3">
        <label class="form-label">@lang('Description')</label>
        <div class="mb-3">
        <textarea class="form-control" name="description" rows="4" value="{{old('description')}}"></textarea>
        </div>
        </div>
        <div class="mb-3">
        <label class="form-label">Shiny</label>
        <select class="form-select" name="shiny" id="shiny" required>
            <option value="True" value="{{ old('shiny') }}">True</option>
            <option value="False" value="{{ old('shiny') }}">False</option>
        </select>
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">@lang('Image')</label>
        <input class="form-control" type='file' name='image' id="formFile">
        </div>

            

        <input type="submit" class="btn btn-primary" value="Enviar">
  </body>  
@endsection