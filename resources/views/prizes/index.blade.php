@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Prizes')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Prizes')

@section('content_body')

    <div class="card mt-5">
        <h2 class="card-header">Prizes list</h2>
        <div class="card-body">

            @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
            @endsession

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{ route('prizes.create') }}"> <i class="fa fa-plus"></i> Create New Prize</a>
            </div>

            <table class="table table-bprizeed table-striped mt-4">
                <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Points Cost</th>
                    <th>Total Stock</th>
                    <th>Remaining Stock</th>
                    <th>Max. per User</th>
                    <th width="250px">Action</th>
                </tr>
                </thead>

                <tbody>
                @forelse ($prizes as $prize)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $prize->name }}</td>
                        <td>{{ $prize->description }}</td>
                        <td>{{ $prize->pointsCost }}</td>
                        <td>{{ $prize->totalStock }}</td>
                        <td>{{ $prize->remainingStock }}</td>
                        <td>{{ $prize->maxPerUser }}</td>
                        <td>
                            <form action="{{ route('prizes.destroy',$prize->id) }}" method="POST">

                                <a class="btn btn-info btn-sm" href="{{ route('prizes.show',$prize->id) }}"><i class="fa-solid fa-list"></i> Show</a>

                                <a class="btn btn-primary btn-sm" href="{{ route('prizes.edit',$prize->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

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

            {!! $prizes->links() !!}

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
