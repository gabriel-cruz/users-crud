@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('users/create') }}">Novo Usuário</a></div>
                
                <div class="card-body">
                    <h1>Dados do Usuário</h1>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach ($user->getAttributes() as $u)
                        <tr>
                            <td>{{ $u->name }}</td>
                            <td>{{$u->cpf}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->dt_birth}}</td>
                            <td>{{$u->tel}}</td>
                            <td>{{$u->address}}</td>
                            <td>{{$u->city}}</td>
                            <td>{{$u->state}}</td>
                        </tr>        
                    @endforeach
                    </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>