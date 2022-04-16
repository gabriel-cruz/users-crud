@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('users/create') }}">Novo Usuário</a></div>
                
                <div class="card-body">
                    <h1>Lista de usuários</h1>
                    @foreach ($users as $user)
                    <p>{{ $user->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>