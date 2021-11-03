@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Minha aplicação</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Seja bem vindo!</h2>
                    <a href="{{url('usuarios')}}">Lista de usuários</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
