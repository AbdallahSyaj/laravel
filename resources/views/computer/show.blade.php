@extends('layout')
@section('title', 'Computer-show')

@section ('content')
<h1>computer show page</h1>


    <p>{{ $computer['name'] ." " . $computer['model'] . " " . $computer['price'] }}</p>
   
@endsection