@extends('pokemons.layout')
@section('content')
<a href="../pokemons/create" class="btn btn-primary">Create</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>@lang('Name')</th>
                <th>@lang('Types')</th>
                <th>@lang('Image')</th>
                <th>Actions</th>
            </tr>

        </thead>
        <tbody>
        @foreach($pokemons as $pokemon)
            <tr>
                <td><a href="../pokemons/{{$pokemon->id}}/edit">{{ $pokemon->id}}</a></td>
                <td>{{ $pokemon->name}}</td>
                <td>{{ $pokemon->types }}</td>
                <td>{{--  <img src="{{ $pokemon->image }}" alt="{{ $pokemon->name }}" width="100" height="100">  --}}</td>
                <td> 
                <form action="../pokemons/{{$pokemon->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">@lang('Delete')</button>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

