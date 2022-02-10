@extends('alumnos.layout')
@section('content')
<body>
<h1>Edit Alumn</h1>
@if($errors->any)
        <div>
            <ul class="list-group">
                @foreach($errors->all() as $e)
                        <li class="list-group-item list-group-item-danger m-1">{{ $e }}</>
                @endforeach
            </ul>
        </div>
@endif
<form action="{{route('alumnos.store')}}" class="card card-body bg-secondary" enctype="multipart/form-data" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
        <label class="form-label">@lang('Name')</label>
        <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
        <label class="form-label">@lang('Surname')</label>
        <input type="text" class="form-control" name="surname" placeholder="Apellido" value="{{ old('surname') }}" required>
        </div>
        <div class="mb-3">
        <label class="form-label">@lang('Subjects')</label>
        <div class="mb-3">
        <input class="form-check-input" type="checkbox" name="subjects[]" value="Math" {{ (is_array(old('subjects')) and in_array('Math', old('subjects'))) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Math')</label>
        <input class="form-check-input" type="checkbox" name="subjects[]" value="Physics" {{ (is_array(old('subjects')) and in_array('Physics', old('subjects'))) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Physics')</label>
        <input class="form-check-input" type="checkbox" name="subjects[]" value="English" {{ (is_array(old('subjects')) and in_array('English', old('subjects'))) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('English')</label>
        <input class="form-check-input" type="checkbox" name="subjects[]" value="Spanish" {{ (is_array(old('subjects')) and in_array('Spanish', old('subjects'))) ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Spanish')</label>
        </div>
        </div>
        <div class="mb-3">
        <label class="form-label">@lang('Genedrer')</label>
        <div class="mb-3">
        <input class="form-check-input" type="radio" name="gender" value="male" {{ old('male') ? 'checked' : '' }}>
        <label class="form-check-label">@lang('Male')</label>
        <input class="form-check-input" type="radio" name="gender" value="female" {{ old('female') ? 'checked' : '' }}>
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
        <label class="form-label">@lang('Repeater')</label>
        <select class="form-select" name="repeater" id="repeater" required>
            <option value="True" value="{{ old('repeater') }}">True</option>
            <option value="False" value="{{ old('repeater') }}">False</option>
        </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Enviar">
  </body>  
@endsection