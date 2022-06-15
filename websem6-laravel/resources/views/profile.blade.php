@extends('layout.main')

@section('container')

        <h1>Halaman MY PROFILE</h1>
        
        <h3>Nama : {{ auth()->user()->nama }}</h3>
        <h3>Username : {{ auth()->user()->username }}</h3>
        <h3>Email : {{ auth()->user()->email }}</h3>
        
@endsection
