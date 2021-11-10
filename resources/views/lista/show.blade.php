@extends('layouts.app')

@section('template_title')
    {{ $lista->name ?? 'Show Lista' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lista</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('listas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $lista->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $lista->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
