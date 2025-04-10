@extends('layouts.app')

{{-- Customize layout sections --}}
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)

@section('subtitle', 'Products')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Products')

@section('content_body')

    <div class="card mt-5">
        <h2 class="card-header">Products list</h2>
        <div class="card-body">

            @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{ route('products.create') }}"> <i class="fa fa-plus"></i> Create New Product</a>
            </div>

            <table class="table table-bordered table-striped mt-4">
                <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>sku Code</th>
                    <th>sku Name</th>
                    <th>Category</th>
                    <th>Points Value</th>
                    <th>Country</th>
                    <th width="250px">Action</th>
                </tr>
                </thead>

                <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->skuCode }}</td>
                        <td>{{ $product->skuName }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->pointsValue }}</td>
                        <td>{{ $product->country }}</td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                <a class="btn btn-info btn-sm" href="{{ route('products.show',$product->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                                <a class="btn btn-primary btn-sm" href="{{ route('products.edit',$product->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">There are no data.</td>
                    </tr>
                @endforelse
                </tbody>

            </table>

            {!! $products->links() !!}

        </div>
    </div>


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
 //   dd($users);
    @endphp

    <div class="card mt-5">
        <h2 class="card-header">Products Datatable</h2>
        <div class="card-body">
             Minimal example / fill data using the component slot
            <x-adminlte-datatable id="table1" :heads="$heads">
                                @foreach($config['data'] as $row)
                                    <tr>
                                        @foreach($row as $cell)
                                            <td>{!! $cell !!}</td>
                                        @endforeach
                                        <td></td>
                                    </tr>
                                @endforeach

                @forelse ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->skuCode }}</td>
                        <td>{{ $product->skuName }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->pointsValue }}</td>
                        <td>{{ $product->country }}</td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                <a class="btn btn-info btn-sm" href="{{ route('products.show',$product->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                                <a class="btn btn-primary btn-sm" href="{{ route('products.edit',$product->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
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
