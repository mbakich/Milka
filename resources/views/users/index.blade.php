@extends('layouts.app')

{{-- Customize layout sections --}}
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugin', true)

@section('subtitle', 'Users')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Users')

@section('content_body')


    {{-- Setup data for datatables --}}
    @php
        $heads = [
            'ID',
            'Full Name',
            'Email',
            'City',
            'Address',
            'Phone',
            'Pasoš/ID',
            'Country',
            'Current Points',
            'Redeemed Points',
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
            'data' => $users,
            'order' => [[1, 'asc']],
        //    'columns' => [null, null, null, ['orderable' => false]],
        ];
 //   dd($users);
    @endphp

    <div class="card mt-5">
        <h2 class="card-header">Users</h2>
        <div class="card-body">
            <x-adminlte-datatable id="table1" :heads="$heads">
{{--                @foreach($config['data'] as $row)--}}
{{--                    <tr>--}}
{{--                        @foreach($row as $cell)--}}
{{--                            <td>{!! $cell !!}</td>--}}
{{--                        @endforeach--}}
{{--                        <td></td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}

                    @forelse ($users as $user)
                        <tr>
{{--                            <td>{{ ++$i }}</td>--}}
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->fullName }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->city }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phoneNumber }}</td>
                            <td>{{ $user->idNumber }}</td>
                            <td>{{ $user->country }}</td>
                            <td>{{ $user->currentPoints }}</td>
                            <td>{{ $user->redeemedPoints }}</td>
                            <td>
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                                    <a class="btn btn-xs btn-default text-teal mx-1 shadow" href="{{ route('users.show',$user->id) }}"><i class="fa fa-lg fa-fw fa-eye"></i></a>

                                    <a class="btn btn-xs btn-default text-primary mx-1 shadow" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-lg fa-fw fa-pen"></i></a>

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

