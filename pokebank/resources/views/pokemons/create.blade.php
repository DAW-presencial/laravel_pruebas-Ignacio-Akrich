@extends('pokemons.layout')
@section('content')
    <form action="/pokemons" enctype="multipart/form-data" method="POST">
        @csrf
        <label>@lang('Name')</label>
        <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" required>
        <label>@lang('Level')</label>
        <input type="number" name="level" placeholder="10" value="{{ old('level') }}" required>
        <label>@lang('Capture date')</label>
        <input type="date" name="capture_date" required>
        <label>@lang('Types')</label>
        <input type="checkbox" name="types[]" value="Planta" {{ (is_array(old('types')) and in_array('Planta', old('types'))) ? 'checked' : '' }}>@lang('Plant')
        <input type="checkbox" name="types[]" value="Agua" {{ (is_array(old('types')) and in_array('Agua', old('types'))) ? 'checked' : '' }}>@lang('Water')
        <input type="checkbox" name="types[]" value="Fuego" {{ (is_array(old('types')) and in_array('Fuego', old('types'))) ? 'checked' : '' }}>@lang('Fire')
        <input type="checkbox" name="types[]" value="Electrico" {{ (is_array(old('types')) and in_array('Electrico', old('types'))) ? 'checked' : '' }}>@lang('Electric')
        <label>@lang('Genedre')</label>
        <input type="radio" name="gendre" value="male" {{ old('male') ? 'checked' : '' }}>@lang('Male')
        <input type="radio" name="gendre" value="female" {{ old('female') ? 'checked' : '' }}>@lang('Female')
        <label>@lang('Description')</label>
        <textarea name="description" rows="10" cols="30" value="{{old('description')}}"></textarea>
        <label>Shiny</label>
        <select name="shiny" id="shiny" required>
            <option value="True" value="{{ old('shiny') }}">True</option>
            <option value="False" value="{{ old('shiny') }}">False</option>
        </select>
        <label for="formFile">@lang('Image')</label>
        <input type='file' name='image' id="formFile">

            

        <input type="submit" value="Enviar">
    
@endsection