@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Prizes')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Prizes')

@section('content_body')

    <div class="card mt-5">
        <h2 class="card-header">Add New Prize</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('prizes.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <form action="{{ route('prizes.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>User:</strong></label>
                    <input
                        type="text"
                        name="user_id"
                        class="form-control @error('user_id') is-invalid @enderror"
                        id="inputUserId"
                        placeholder="User Id">
                    @error('user_id')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>What:</strong></label>
                    <input
                        type="text"
                        name="what"
                        class="form-control @error('what') is-invalid @enderror"
                        id="inputWhat"
                        placeholder="What">
                    @error('what')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Points:</strong></label>
                    <input
                        type="text"
                        name="points"
                        class="form-control @error('points') is-invalid @enderror"
                        id="inputPoints"
                        placeholder="Points">
                    @error('points')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
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
