@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Install Data')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Install Data')

@section('content_body')

    @php

        @endphp

    <section>
        <div class="row mt-3">
            <div class="col-sm-12">
{{--                <a class="btn btn-primary btn-sm" href="{{ route('installCategories') }}"> Install default data for tables</a>--}}
                <button class="btn btn-primary" id="id_install">Install default data for tables</button>
            </div>
        </div>
        <div class="row mt-3">
{{--            <div class="col-sm-12">--}}
{{--                <label>{{ isset($variable) ? $variable : '' }}</label>--}}
{{--            </div>--}}
            <div class="col-sm-12">
                <ul class="list-group">
                    <li class="list-group-item">tabela categories <span id="id_categories" class="d-none"><i class="fa fa-check" aria-hidden="true"></i></span></li>
                    <li class="list-group-item">tabela countries <span id="id_countries" class="d-none"><i class="fa fa-check" aria-hidden="true"></i></span></li>
                    <li class="list-group-item">tabela gramaza <span id="id_gramaza" class="d-none"><i class="fa fa-check" aria-hidden="true"></i></span></li>
                    <li class="list-group-item">tabela key_words <span id="id_key_words" class="d-none"><i class="fa fa-check" aria-hidden="true"></i></span></li>
                    <li class="list-group-item">tabela prizes <span id="id_prizes" class="d-none"><i class="fa fa-check" aria-hidden="true"></i></span></li>
                    <li class="list-group-item">tabela settings <span id="id_settings" class="d-none"><i class="fa fa-check" aria-hidden="true"></i></span></li>
                </ul>
            </div>
        </div>
    </section>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
            <script>

                $(document).on('click','#id_install', function(e){
                    e.preventDefault();
                    $.get("api/installCategories")
                        .done(function (data) {
                            console.log(data);
                            $("#id_categories").removeClass("d-none");
                            $.get("api/installCountries")
                                .done(function (data) {
                                    console.log(data);
                                    $("#id_countries").removeClass("d-none");
                                })
                                .fail(function (jqXhr, textStatus, errorThrown) {
                                    console.log(errorThrown);
                                });
                        })
                        .fail(function (jqXhr, textStatus, errorThrown) {
                            console.log(errorThrown);
                        });
                });

                $(document).ready(function() {
                })

            </script>
@endpush


