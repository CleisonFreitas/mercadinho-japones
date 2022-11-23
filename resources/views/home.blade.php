@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <section class="content_dashboard container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row form-group card-search">
                    <div class="col-12 col-sm-6 col-lg-6 my-1">
                        <h4>Lista de Clientes</h4>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-3">
                        <input type="text" name="pesquisar" id="" class="form-control" placeholder="Pesquise aqui...">
                    </div>
                </div>
            </div>
            <div class="card-body">

            </div>
            <div class="card-footer">

            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href={{ asset('css/home.css') }}>

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
