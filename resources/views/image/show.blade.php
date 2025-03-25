@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Image')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Image')

@section('content_body')

    @foreach ($lists as $list)
        <tr>
            <td>
                <img src="{{$list->getFirstMediaUrl('default')}}" width="120px"><br/>
                {{$list->getFirstMediaUrl('default')}}
            </td>
        </tr>
    @endforeach

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
