@extends('adminlte::page')
@if (Route::has('login'))
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop


@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop
@endif

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
