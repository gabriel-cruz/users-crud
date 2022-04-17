@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('users') }}">Voltar</a>
                </div>

                <div class="card-body">

                    <form id="form" method = "post" action="{{ url('users/update') }}/{{ $user->id }}" method = "post">
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nome</label>
                                <input type="text" name="name" class="form-control" value={{$user->name}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCPF">CPF</label>
                                <input type="text" name ="cpf" class="form-control" value={{$user->cpf}}>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" name="email" class="form-control" value={{$user->email}}>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="form-group col-md-6">
                                <label for="inputBirth">Data de Nascimento</label>
                                <input type="text" name="dt_birth" class="form-control" value={{$user->dt_birth}}>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputTel">Telefone</label>
                                <input type="text" name="tel" class="form-control" value={{$user->tel}}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" name="address" class="form-control" value={{$user->address}}>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection