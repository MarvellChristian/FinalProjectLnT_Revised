@extends('layouts.app')

@section('judul', 'Dashboard | PT. Musang')

@section('content')
    <h1>Hello {{ Auth::user()->name }}</h1>
    <h2>You are a {{ Auth::user()->role }}</h2>
@endsection
