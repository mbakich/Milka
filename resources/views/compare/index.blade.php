@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Compares')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Compares')

@section('content_body')
    <div class="card mt-5">
        <h2 class="card-header">Edit user</h2>
        <div class="card-body">

            <form action="{{ route('compare.calculate') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>String 1:</strong></label>
                    <input
                        type="text"
                        name="string1"
                        class="form-control @error('string1') is-invalid @enderror"
                        id="inputUserId"
                        placeholder="String1">
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>String 2:</strong></label>
                    <input
                        type="text"
                        name="string2"
                        class="form-control @error('string2') is-invalid @enderror"
                        id="inputWhat"
                        placeholder="String2">
                </div>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </form>

        </div>
    </div>
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
