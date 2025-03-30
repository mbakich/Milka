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
                <div class="row">
                    <div class="col-sm-8">
                        <div class="col mb-3">
{{--                                <label for="inputName" class="form-label"><strong>User:</strong></label>--}}
{{--                                <input--}}
{{--                                    type="text"--}}
{{--                                    name="userId"--}}
{{--                                    value="{{ $receipt->userId }}"--}}
{{--                                    class="form-control @error('userId') is-invalid @enderror"--}}
{{--                                    id="inputUseerId"--}}
{{--                                    placeholder="Useer Id">--}}
{{--                                @error('userId')--}}
{{--                                <div class="form-text text-danger">{{ $message }}</div>--}}
{{--                                @enderror--}}
                            <div class="form-group">
                                <strong>User:</strong> <br/>
                                {{
                                    \App\Models\User::find($receipt->userId)->name
                                }}
                            </div>
                        </div>

                        <div class="col mb-3">
{{--                            <label for="inputEmail" class="form-label"><strong>OCR:</strong></label>--}}
{{--                            <input--}}
{{--                                type="text"--}}
{{--                                name="rawOcrData"--}}
{{--                                value="{{ $receipt->rawOcrData }}"--}}
{{--                                class="form-control @error('rawOcrData') is-invalid @enderror"--}}
{{--                                id="inputRawOcrData"--}}
{{--                                placeholder="RawOcrData">--}}
{{--                            @error('rawOcrData')--}}
{{--                            <div class="form-text text-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <strong>OCR:</strong> <br/>
                                {{ $receipt->rawOcrData }}
                            </div>
                        </div>

                        <div class="col mb-3">
                            <div class="form-group">
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
                        </div>

                        <div class="col mb-3">
                            <div class="form-group">
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
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <img src="{{$receipt->getFirstMediaUrl('default')}}" width="320px"><br/>
                            {{--                        {{$receipt->getFirstMediaUrl('default')}}--}}
                        </div>
                    </div>
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
