@extends('pokemons.layout')
@section('content')
    <form action="{{route('pokemons.update',$pokemon->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <label>@lang('Name')</label>
        <input type="text" name="name" placeholder="Nombre" value="{{ old('name',$pokemon->name) }}" >
        <label>@lang('Level')</label>
        <input type="number" name="level" placeholder="10" value="{{old('level',$pokemon->level)}}">
        <label>@lang('Types')</label>
        <input type="checkbox" name="types[]" value="Planta" {{ in_array('Planta',json_decode($pokemon->types)) ? 'checked' : '' }}>@lang('Planta')
        <input type="checkbox" name="types[]" value="Agua" {{ in_array('Agua',json_decode($pokemon->types)) ? 'checked' : '' }}>@lang('Agua')
        <input type="checkbox" name="types[]" value="Fuego" {{ in_array('Fuego',json_decode($pokemon->types)) ? 'checked' : '' }}>@lang('Fuego')
        <input type="checkbox" name="types[]" value="Electrico" {{ in_array('Electrico',json_decode($pokemon->types)) ? 'checked' : '' }}>@lang('Electrico')
        <label>@lang('Genedre')</label>
        <input type="radio" name="gendre" value="male" {{ $pokemon->gendre === 'male' ? 'checked' : '' }}>@lang('Male')
        <input type="radio" name="gendre" value="female" {{ $pokemon->gendre === 'female' ? 'checked' : '' }}>@lang('Female')
        <label>@lang('Description')</label>
        <textarea name="description" rows="10" cols="30" value="{{old('description',$pokemon->description)}}"></textarea>
        <label>Shiny</label>
        <select name="shiny" id="shiny">
                    <option value="True" value="{{ old('shiny',$pokemon->shiny) }}">True</option>
                    <option value="False" value="{{ old('shiny',$pokemon->shiny) }}">False</option>
                </select>
        <label for="formFile">@lang('Image')</label>
        <input type='file' name='image' id="formFile">


        <input type="submit" value="Enviar">
    
@endsection