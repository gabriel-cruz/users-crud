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

                    <form action="{{ url('usuarios/add') }}" method post>
                    @csrf
                    @livewireStyles
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nome</label>
                                <input type="text" name="name" class="form-control" id="inputName" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCPF">CPF</label>
                                <input type="text" name ="cpf" class="form-control" id="inputCPF" placeholder="CPF">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="form-group col-md-6">
                                <label for="inputBirth">Data de Nascimento</label>
                                <input type="text" name="dt_bith" class="form-control" id="inputBirth" placeholder="Ex: DD/MM/YYYY">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputTel">Telefone</label>
                                <input type="text" name="tel" class="form-control" id="inputTel" placeholder="Ex: (XX)XXXXXXXXX">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="inputState">Estado</label>
                            <select wire:model="state" id="inputState" name="state" class="form-control">
                                <option value="" selected>{{__('Selecione um Estado...')}}</option>
                                @foreach($states as $state)
                                    <option value="{{$state->sigla}}">{{$state->nome}}</option>
                                @endforeach
                            </select>   
                            </div>

                            <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <select id="inputCity" name="city" class="form-control">
                            <option value="" selected>{{__('Selecione uma Cidade...')}}</option>
                                @if($this->state)
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->nome}}</option>
                                @endforeach
                                @endif

                            </select>
                            </div>
                        </div>
                        @livewireScripts
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection