@extends('layouts.app')

{{-- Customize layout sections --}}
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)

@section('subtitle', 'Prizes')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Prizes')

@section('content_body')

    @php
        $heads = [
            'ID',
            'Name',
            'Description',
            'Points Cost',
            'Total Stock',
            'Remaining Stock',
            'Max. per User',
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
            'data' => $prizes,
            'order' => [[1, 'asc']],
        //    'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    <div class="card mt-5">
        <h2 class="card-header">Prizes</h2>
        <div class="card-body">
            @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{ route('prizes.create') }}"> <i class="fa fa-plus"></i> Create New Prize</a>
            </div>
            <br>

            <x-adminlte-datatable id="table1" :heads="$heads">

                @forelse ($prizes as $prize)
                    <tr>
{{--                        <td>{{ ++$i }}</td>--}}
                        <td>{{ $prize->id }}</td>
                        <td>{{ $prize->name }}</td>
                        <td>{{ $prize->description }}</td>
                        <td>{{ $prize->pointsCost }}</td>
                        <td>{{ $prize->totalStock }}</td>
                        <td>{{ $prize->remainingStock }}</td>
                        <td>{{ $prize->maxPerUser }}</td>
                        <td>{{ $prize->country }}</td>
                        <td>
                            <form action="{{ route('prizes.destroy',$prize->id) }}" method="POST">

                                <a class="btn btn-xs btn-default text-teal mx-1 shadow" href="{{ route('prizes.show',$prize->id) }}"><i class="fa fa-lg fa-fw fa-eye"></i></a>

                                <a class="btn btn-xs btn-default text-primary mx-1 shadow" href="{{ route('prizes.edit',$prize->id) }}"><i class="fa fa-lg fa-fw fa-pen"></i></a>

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
