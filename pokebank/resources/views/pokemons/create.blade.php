@extends('pokemons.layout')
@section('content')
    <form action="/pokemons" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" placeholder="Nombre" value="{{ old('name',$pokemon->name) }}" >
        <label>Level</label>
        <input type="number" name="level" placeholder="10" value="{{old('level',$pokemon->level)}}">
        <label>Capture date</label>
        <input type="date" name="capture_date">
        <label>Types</label>
        <input type="checkbox" name="types[]" value="Planta" {{ in_array('Planta',json_decode($pokemon->types)) ? 'checked' : '' }}>Planta
        <input type="checkbox" name="types[]" value="Agua" {{ in_array('Agua',json_decode($pokemon->types)) ? 'checked' : '' }}>Agua
        <input type="checkbox" name="types[]" value="Fuego" {{ in_array('Fuego',json_decode($pokemon->types)) ? 'checked' : '' }}>Fuego
        <input type="checkbox" name="types[]" value="Electrico" {{ in_array('Electrico',json_decode($pokemon->types)) ? 'checked' : '' }}>Electrico
        <label>Genedre</label>
        <input type="radio" name="gendre" value="male" {{ $pokemon->gendre === 'male' ? 'checked' : '' }}>Male
        <input type="radio" name="gendre" value="female" {{ $pokemon->gendre === 'female' ? 'checked' : '' }}>Female
        <label>Descripción</label>
        <textarea name="description" rows="10" cols="30" value="{{old('description',$pokemon->description)}}"></textarea>
        <label>Shiny</label>
        <select name="shiny" id="shiny">
                    <option value="True" value="{{ old('shiny',$pokemon->shiny) }}">True</option>
                    <option value="False" value="{{ old('shiny',$pokemon->shiny) }}">False</option>
                </select>

        <input type="submit" value="Enviar">
    
@endsection