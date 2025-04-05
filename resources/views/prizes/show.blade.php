@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Prizes')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Prizes')

@section('content_body')

    <div class="card mt-5">
        <h2 class="card-header">Show Prize</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('prizes.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong> <br/>
                        {{ $prize->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Description:</strong> <br/>
                        {{ $prize->description }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Points Cost:</strong> <br/>
                        {{ $prize->pointsCost }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Total Stock:</strong> <br/>
                        {{ $prize->totalStock }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Remaining Stock:</strong> <br/>
                        {{ $prize->remainingStock }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Max Per User:</strong> <br/>
                        {{ $prize->maxPerUser }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Country:</strong> <br/>
                        {{ $prize->country_code }}
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
