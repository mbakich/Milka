@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Receipts')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Receipts')

@section('content_body')

    <div class="card mt-5">
        <h2 class="card-header">Show receipt</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('receipts.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <div class="row">
                <div class="col-sm-8">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>User:</strong> <br/>
                            {{
                                \App\Models\User::find($receipt->userId)->name
                            }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong>OCR:</strong> <br/>
                            {{ $receipt->rawOcrData }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong>Status:</strong> <br/>
                            {{ $receipt->status }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong>Points Awarded:</strong> <br/>
                            {{ $receipt->pointsAwarded }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong>Submission Date:</strong> <br/>
                            {{ fromISODateTime($receipt->submissionDate) }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                        <div class="form-group">
                            <strong>Processing Date:</strong> <br/>
                            {{ fromISODateTime($receipt->processingDate) }}
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
