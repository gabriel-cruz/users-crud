@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   

                    {{ __('Seja bem-vindo') }}
                    <a href="{{ url('users')}}">Lista de Usuários</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
