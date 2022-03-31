@extends('layouts.master')

@section('content') 
<h1 class="text-white bg-dark">Autos</h1>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Make</th>
        <th>Model</th>
    </tr>
@foreach($autos as $item) 
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->make }}</td>
        <td>{{ $item->model }}</td>
    </tr>
@endforeach
<//table>
@endsection
