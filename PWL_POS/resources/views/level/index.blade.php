@extends('layouts.app')

@section('subtitle','Kategori')
@section('content_header_title','Home')
@section('content_header_subtitle','Level')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Level User</div>
            <div class="card-body">
                <div class="table-responsive">
                    <!-- <a href="{{ route('kategori.create') }}" class="btn btn-primary"> Add Kategori</a> -->
                    {{ $dataTable->table(['class' => 'table-striped table-bordered table-hover']) }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush


