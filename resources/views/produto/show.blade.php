@extends('layouts.app')

@section('template_title')
    {{ $produto->name ?? 'Show Produto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Produto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Lista Id:</strong>
                            {{ $produto->lista_id }}
                        </div>
                        <div class="form-group">
                            <strong>Sku:</strong>
                            {{ $produto->sku }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $produto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $produto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precionormal:</strong>
                            {{ $produto->precionormal }}
                        </div>
                        <div class="form-group">
                            <strong>Categorias:</strong>
                            {{ $produto->categorias }}
                        </div>
                        <div class="form-group">
                            <strong>Imagenes:</strong>
                            {{ $produto->imagenes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
