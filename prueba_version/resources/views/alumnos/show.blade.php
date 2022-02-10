@extends('alumnos.layout')
  
@section('content')
 <h1>Show alumn</h1>
 <table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>@lang('Name')</th>
            <th>@lang('Surname')</th>
            <th>@lang('Age')</th>
            <th>@lang('Subjects')</th>
            <th>@lang('Actions')</th>
@endsection