@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('users/create') }}">Novo Usuário</a></div>
                
                <div class="card-body">
                    <h1>Lista de usuários</h1>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach ($users as $user)
                            <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>
                               <a href="{{ url('users/profile') }}">{{$user->name}}</a>
                            </td>
                            <td>{{$user->email}}</td>
                            <td>
                                <button class="btn btn-info">Editar</button>
                            </td>
                            <td>
                                <button class="btn btn-danger">Deletar</button>
                            </td>
                            </tr>
                            
                    @endforeach
                    </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>