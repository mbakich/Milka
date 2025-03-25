@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Receipts')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Receipts')

@section('content_body')

    <div class="card mt-5">
        <h2 class="card-header">Add New receipt</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('receipts.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <form action="{{ route('receipts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>User:</strong></label>
                    <input
                        type="text"
                        name="user_id"
                        class="form-control @error('user_id') is-invalid @enderror"
                        id="inputUserId"
                        placeholder="User id">
                    @error('user_id')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputEmail" class="form-label"><strong>Racun:</strong></label>
                    <input
                        type="text"
                        name="racun"
                        class="form-control @error('racun') is-invalid @enderror"
                        id="inputRacun"
                        placeholder="Racun">
                    @error('racun')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputEmail" class="form-label"><strong>Points:</strong></label>
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

                <div class="mb-3">
                    <label for="inputEmail" class="form-label"><strong>Image:</strong></label>
                    <input
                        type="text"
                        name="image"
                        class="form-control @error('image') is-invalid @enderror"
                        id="inputImage"
                        placeholder="Image">
                    @error('image')
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
