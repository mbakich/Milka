@extends('layouts.app')

{{-- Customize layout sections --}}
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)

@section('subtitle', 'Products')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Products')

@section('content_body')

    @php
        $heads = [
            'ID',
            'sku Code',
            'sku Name',
            'Category',
            'Points Value',
            'Country',
            'Actions'
        ];

        $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                        <i class="fa fa-lg fa-fw fa-pen"></i>
                    </button>';
        $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                          <i class="fa fa-lg fa-fw fa-trash"></i>
                      </button>';
        $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                           <i class="fa fa-lg fa-fw fa-eye"></i>
                       </button>';

        $config = [
            'pagging' => true,
            'data' => $products,
            'order' => [[1, 'asc']],
        //    'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    <div class="card mt-5">
        <h2 class="card-header">Products</h2>
        <div class="card-body">
            @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{ route('products.create') }}"> <i class="fa fa-plus"></i> Create New Product</a>
            </div>
            <br>

            <x-adminlte-datatable id="table1" :heads="$heads">

                @forelse ($products as $product)
                    <tr>
{{--                        <td>{{ ++$i }}</td>--}}
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->skuCode }}</td>
                        <td>{{ $product->skuName }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->pointsValue }}</td>
                        <td>{{ $product->country }}</td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                <a class="btn btn-xs btn-default text-teal mx-1 shadow" href="{{ route('products.show',$product->id) }}"><i class="fa fa-lg fa-fw fa-eye"></i></a>

                                <a class="btn btn-xs btn-default text-primary mx-1 shadow" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-lg fa-fw fa-pen"></i></a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow"><i class="fa fa-lg fa-fw fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">There are no data.</td>
                    </tr>
                @endforelse
            </x-adminlte-datatable>
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
