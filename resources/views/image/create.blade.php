@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Image')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Image')

@section('content_body')
    <form method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <input class="" type="file" name="image">
        </div>

        <div>
            <input class="mt-4 py-2 px-4 rounded-md text-white bg-indigo-600" type="submit">
        </div>
    </form>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush
