@extends('main')

@section('title', 'Dashboard')


{{-- Isi Breadcrumbs --}}
@section('breadcrumbs')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- Isi Konten --}}

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            {{-- Isi Konten --}}
            <h1>Isi Konten</h1>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
