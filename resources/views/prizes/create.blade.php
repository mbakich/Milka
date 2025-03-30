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
                @method('PUT')

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Name:</strong></label>
                    <input
                        type="text"
                        name="user_id"
                        class="form-control @error('name') is-invalid @enderror"
                        id="inputName"
                        placeholder="Name">
                    @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Description:</strong></label>
                    <input
                        type="text"
                        name="description"
                        class="form-control @error('description') is-invalid @enderror"
                        id="inputDescription"
                        placeholder="Description">
                    @error('description')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Points Cost:</strong></label>
                    <input
                        type="text"
                        name="pointsCost"
                        class="form-control @error('pointsCost') is-invalid @enderror"
                        id="inputPointsCost"
                        placeholder="Points Cost">
                    @error('pointsCost')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Total Stock:</strong></label>
                    <input
                        type="text"
                        name="totalStock"
                        class="form-control @error('totalStock') is-invalid @enderror"
                        id="inputTotal Stock"
                        placeholder="Total Stock">
                    @error('totalStock')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Remaining Stock:</strong></label>
                    <input
                        type="text"
                        name="remainingStock"
                        class="form-control @error('remainingStock') is-invalid @enderror"
                        id="inputRemainingStock"
                        placeholder="Remaining Stock">
                    @error('remainingStock')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Max Per User:</strong></label>
                    <input
                        type="text"
                        name="maxPerUser"
                        class="form-control @error('maxPerUser') is-invalid @enderror"
                        id="inputMaxPerUser"
                        placeholder="Max Per User">
                    @error('maxPerUser')
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
