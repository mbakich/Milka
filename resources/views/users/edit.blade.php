@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Users')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Users')

@section('content_body')

    <div class="card mt-5">
        <h2 class="card-header">Edit user</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <form action="{{ route('users.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Name:</strong></label>
                    <input
                        type="text"
                        name="name"
                        value="{{ $user->name }}"
                        class="form-control @error('name') is-invalid @enderror"
                        id="inputName"
                        placeholder="Name">
                    @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Email:</strong></label>
                    <input
                        type="text"
                        name="email"
                        value="{{ $user->email }}"
                        class="form-control @error('email') is-invalid @enderror"
                        id="inputEmail"
                        placeholder="Email">
                    @error('email')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Role:</strong></label>
                    <input
                        type="text"
                        name="name"
                        value="{{ $user->role_id }}"
                        class="form-control @error('role_id') is-invalid @enderror"
                        id="inputRoleId"
                        placeholder="Role Id">
                    @error('role_id')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>City:</strong></label>
                    <input
                        type="text"
                        name="city"
                        value="{{ $user->city }}"
                        class="form-control @error('city') is-invalid @enderror"
                        id="inputCity"
                        placeholder="City">
                    @error('city')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Address:</strong></label>
                    <input
                        type="text"
                        name="address"
                        value="{{ $user->address }}"
                        class="form-control @error('address') is-invalid @enderror"
                        id="inputAddress"
                        placeholder="Address">
                    @error('address')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Pasoš/ID:</strong></label>
                    <input
                        type="text"
                        name="idNumber"
                        value="{{ $user->idNumber }}"
                        class="form-control @error('idNumber') is-invalid @enderror"
                        id="inputIdNumber"
                        placeholder="ID Number">
                    @error('idNumber')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Phone:</strong></label>
                    <input
                        type="text"
                        name="phoneNumber"
                        value="{{ $user->phoneNumber }}"
                        class="form-control @error('phoneNumber') is-invalid @enderror"
                        id="inputPhoneNumber"
                        placeholder="PhoneNumber">
                    @error('phoneNumber')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Country:</strong></label>
                    <input
                        type="text"
                        name="country"
                        value="{{ $user->country }}"
                        class="form-control @error('country') is-invalid @enderror"
                        id="inputCountry"
                        placeholder="Country">
                    @error('country')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Current Points:</strong></label>
                    <input
                        type="text"
                        name="currentPoints"
                        value="{{ $user->currentPoints }}"
                        class="form-control @error('currentPoints') is-invalid @enderror"
                        id="inputCurrentPoints"
                        placeholder="Current Points">
                    @error('currentPoints')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Redeemed Points:</strong></label>
                    <input
                        type="text"
                        name="redeemedPoints"
                        value="{{ $user->redeemedPoints }}"
                        class="form-control @error('redeemedPoints') is-invalid @enderror"
                        id="inputRedeemedPoints"
                        placeholder="Redeemed Points">
                    @error('redeemedPoints')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
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
