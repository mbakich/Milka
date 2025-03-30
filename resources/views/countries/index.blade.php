@extends('layouts.app')

{{-- Customize layout sections --}}
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)

@section('subtitle', 'Countries')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Countries')

@section('content_body')

    @php
        $heads = [
            'ID',
            'Name',
            'Country Code',
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
            'data' => $countries,
            'order' => [[1, 'asc']],
        //    'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    <div class="card mt-5">
        <h2 class="card-header">Countries</h2>
        <div class="card-body">
            @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{ route('countries.create') }}"> <i class="fa fa-plus"></i> Create New Country</a>
            </div>
            <br>

            <x-adminlte-datatable id="table1" :heads="$heads">

                @forelse ($countries as $country)
                    <tr>
{{--                        <td>{{ ++$i }}</td>--}}
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->country_code }}</td>
                        <td>
                            <form action="{{ route('countries.destroy',$country->id) }}" method="POST">

                                <a class="btn btn-xs btn-default text-teal mx-1 shadow" href="{{ route('countries.show',$country->id) }}"><i class="fa fa-lg fa-fw fa-eye"></i></a>

                                <a class="btn btn-xs btn-default text-primary mx-1 shadow" href="{{ route('countries.edit',$country->id) }}"><i class="fa fa-lg fa-fw fa-pen"></i></a>

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

 Setup data for datatables


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
