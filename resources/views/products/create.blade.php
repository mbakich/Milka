@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Products')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Products')

@section('content_body')

    <div class="card mt-5">
        <h2 class="card-header">Add New Product</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>SKU Code:</strong></label>
                    <input
                        type="text"
                        name="skuCode"
                        class="form-control @error('skuCode') is-invalid @enderror"
                        id="inputSkuCode"
                        placeholder="SKU Code">
                    @error('skuCode')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>SKU Name:</strong></label>
                    <input
                        type="text"
                        name="skuName"
                        class="form-control @error('skuName') is-invalid @enderror"
                        id="inputSkuName"
                        placeholder="SkuName">
                    @error('skuName')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Category:</strong></label>
                    <input
                        type="text"
                        name="category"
                        class="form-control @error('category') is-invalid @enderror"
                        id="inputCategory"
                        placeholder="Category">
                    @error('category')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Points:</strong></label>
                    <input
                        type="text"
                        name="pointsValue"
                        class="form-control @error('pointsValue') is-invalid @enderror"
                        id="inputPointsValue"
                        placeholder="PointsValue">
                    @error('pointsValue')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Country:</strong></label>
                    <input
                        type="text"
                        name="country"
                        class="form-control @error('country') is-invalid @enderror"
                        id="inputCountry"
                        placeholder="Country">
                    @error('country')
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
