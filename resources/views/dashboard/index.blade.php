@extends('layouts.app')

{{-- Customize layout sections --}}
@section('plugins.chartJs', true)

@section('subtitle', 'Dashboard')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Dashboard')

@section('content_body')
    <section>
        <div class="row mt-3">
            <div class="col-sm-3">
{{--                <x-adminlte-info-box title="{{ count(\App\Models\User::all())-1 }}" text="Registered Users" icon="fas fa-lg fa-user-plus text-primary"--}}
{{--                                     theme="gradient-primary" icon-theme="white"/>--}}

                <x-adminlte-small-box title="{{ count(\App\Models\User::all())-1 }}" text="Registered Users" icon="fas fa-user-plus text-dark"
                                      theme="yellow" url="#" url-text="View details"/>
            </div>
            <div class="col-sm-3">
                {{-- Themes --}}
                <x-adminlte-small-box title="{{ \App\Models\User::all()->sum('currentPoints') }}" text="Collected Points" icon="fas fa-gift text-dark"
                                      theme="teal" url="#" url-text="View details"/>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <x-adminlte-info-box title="Reg. users per country: Srbija" text="{{ count(\App\Models\User::where('country','Srbija')->get()) }}" icon="fas fa-sm fa-user text-dark" theme="gradient-lightblue"/>
                        <x-adminlte-info-box title="Reg. users per country: Hrvatska" text="{{ count(\App\Models\User::where('country','Hrvatska')->get()) }}" icon="fas fa-sm fa-user text-dark" theme="gradient-lightblue"/>
                    </div>
                    <div class="col-sm-6">
                        <x-adminlte-info-box title="Reg. users per country: BiH" text="{{ count(\App\Models\User::where('country','Bosna i Hercegovina')->get()) }}" icon="fas fa-sm fa-user text-dark" theme="gradient-lightblue"/>
                        <x-adminlte-info-box title="Reg. users per country: Slovenija" text="{{ count(\App\Models\User::where('country','Slovenija')->get()) }}" icon="fas fa-sm fa-user text-dark" theme="gradient-lightblue"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                @php
                    echo (new App\Http\Controllers\Web\DashboardController)->showChart();
                @endphp
            </div>
        </div>
    </section>
    @push('js')
{{--        <script>--}}

{{--            $(document).ready(function() {--}}

{{--                let iBox = new _AdminLTE_InfoBox('ibUpdatable');--}}

{{--                let updateIBox = () =>--}}
{{--                {--}}
{{--                    // Update data.--}}
{{--                    let rep = Math.floor(1000 * Math.random());--}}
{{--                    let idx = rep < 100 ? 0 : (rep > 500 ? 2 : 1);--}}
{{--                    let progress = Math.round(rep * 100 / 1000);--}}
{{--                    let text = rep + '/1000';--}}
{{--                    let icon = 'fas fa-lg fa-medal ' + ['text-primary', 'text-light', 'text-warning'][idx];--}}
{{--                    let description = progress + '% reputation completed to reach next level';--}}

{{--                    let data = {text, icon, description, progress};--}}
{{--                    iBox.update(data);--}}
{{--                };--}}

{{--                setInterval(updateIBox, 5000);--}}
{{--            })--}}

{{--        </script>--}}
    @endpush
@endsection
