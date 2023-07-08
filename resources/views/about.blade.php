@extends('layouts.main')

@section('container')
    <h1>Halaman about</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{$image; }}" alt="{$nama; }}" width="200" class="img-thumbnail rounded-cirlc>
@endsection