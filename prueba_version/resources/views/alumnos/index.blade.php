@extends('alumnos.layout')
@section('content')
<h1>Alumn list</h1>
{{--  crear un boton para crear un alumno nuevo  --}}
<a href="{{route('alumnos.create')}}" class="btn btn-success">Crear Alumno</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>@lang('Name')</th>
            <th>@lang('Surname')</th>
            <th>@lang('Age')</th>
            <th>@lang('Subjects')</th>
            <th>@lang('Actions')</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($alumnos as $alumno)
    <tr>
        <td>{{$alumno->id}}</td>
        <td>{{$alumno->name}}</td>
        <td>{{$alumno->surname}}</td>
        <td>{{$alumno->birthdate}}</td>
        <td>{{$alumno->subjects}}</td>
        <td>
            <form action="{{route('alumnos.destroy', $alumno->id)}}" method="POST">
                {{--  @can('isAdmin')  --}}
                @csrf
                @method('DELETE')
                <a href="{{route('alumnos.show', $alumno->id)}}" class="btn btn-primary">@lang('Show')</a>
                <a href="{{route('alumnos.edit', $alumno->id)}}" class="btn btn-warning">@lang('Edit')</a>
                <button type="submit" class="btn btn-danger">@lang('Delete')</button>
               {{--   @else
                <a href="{{route('login')}}" class="btn btn-primary">@lang('Login')</a>  --}}
                {{--  @endcan  --}}
            </form>
        </td>
            
    </tr>
        
    @endforeach
    
    </tbody>

</table>
@endsection