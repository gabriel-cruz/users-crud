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

                    <form id="form" method = "post" action="{{url('users/add')}}" method = "post">
                    @csrf
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
                                <input type="text" name="dt_birth" class="form-control" id="inputBirth" placeholder="Ex: DD/MM/YYYY">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputTel">Telefone</label>
                                <input type="text" name="tel" class="form-control" id="inputTel" placeholder="Ex: (XX)XXXXXXXXX">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" name="address" class="form-control" id="inputAddress">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="state_id">Estado</label>
                            <select id="state_id" name="state" class="form-control">
                                <option value="" selected>{{__('Selecione um Estado...')}}</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>  
                            </select>  
                            </div>

                            <div class="form-group col-md-6">
                            <label for="city_id">Cidade</label>
                            <select id="city_id" name="city" class="form-control">
                            <option value="" selected>{{__('Selecione uma Cidade...')}}</option>

                            </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
jQuery(document).ready(function(){
    jQuery('#state_id').change(function(){
        let stateId = jQuery(this).val();
        jQuery.ajax({
            url: '/load_cities',
            type: 'post',
            data: 'stateId='+stateId+'&_token={{csrf_token()}}',
            success: function(result){
                jQuery('#city_id').html(result) 
            }
        });
    });
});
</script>
@endsection