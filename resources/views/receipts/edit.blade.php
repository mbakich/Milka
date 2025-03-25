@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Receipts')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Receipts')

@section('content_body')

    <div class="card mt-5">
        <h2 class="card-header">Edit receipt</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('receipts.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <form action="{{ route('receipts.update',$receipt->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>User:</strong></label>
                    <input
                        type="text"
                        name="userId"
                        value="{{ $receipt->userId }}"
                        class="form-control @error('userId') is-invalid @enderror"
                        id="inputUseerId"
                        placeholder="Useer Id">
                    @error('userId')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputEmail" class="form-label"><strong>OCR:</strong></label>
                    <input
                        type="text"
                        name="rawOcrData"
                        value="{{ $receipt->rawOcrData }}"
                        class="form-control @error('rawOcrData') is-invalid @enderror"
                        id="inputRawOcrData"
                        placeholder="RawOcrData">
                    @error('rawOcrData')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputEmail" class="form-label"><strong>Status:</strong></label>
                    <input
                        type="text"
                        name="status"
                        value="{{ $receipt->status }}"
                        class="form-control @error('status') is-invalid @enderror"
                        id="inputStatus"
                        placeholder="Status">
                    @error('status')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputEmail" class="form-label"><strong>Points:</strong></label>
                    <input
                        type="text"
                        name="pointsAwarded"
                        value="{{ $receipt->pointsAwarded }}"
                        class="form-control @error('pointsAwarded') is-invalid @enderror"
                        id="inputPointsAwarded"
                        placeholder="Points Awarded">
                    @error('pointsAwarded')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
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
