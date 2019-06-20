@extends('layouts.app')

@section('content')
<div style="width:100%; color: blue;"> 
    <div class="card-header">
        <div style="text-align: center;"> 
            <img src="{{ asset('images/head.jpg') }}" alt="Aqui ira la imagen">
        </div>
    </div>
</div>
<div class="container">


    <body background='../images/fondos.jpg'>
        
        
        <div class="row justify-content-center">   
            
                <font color="black" face="Comic Sans MS,arial">
                    <div class="col-md-100" style="line-height: 100px;text-align: center;">
                        
                            
                                <div class="card col">
                                	<div class="row justify-content-center">
                                    

                                    <div class="card-header col">
                                    <h3 class="card-header">{{ __('Perfil') }}</h3>                                        
                                    <img src="{{ asset('images/perfil.jpg') }}" alt="Aqui ira la imagen" width="80" height="80">
                                    <a class="btn btn-dark" href="{{ route('edita') }}">editar perfil</a>
                                    </div>
                                    
                                    <div class="card-body">

                                        <div class="col" >

                                            <div class="card-body form-group row col-md">
                                                <label for="name" class="col-md-12 col-form-label text-md-center">{{ __('Nombre: ') }}</label>

                                                <div class="col-md-12 col-form-label text-md-center">
                                                	<label>
                                                    <h4> {{ Auth::user()->name }} </h4>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="card-body form-group row col-md">
                                                <label for="e-mail" class="col-md-12 col-form-label text-md-center">{{ __('e-mail: ') }}</label>

                                                <div class="col-md-12 col-form-label text-md-center">
                                                	<label>
                                                    <h4>{{ Auth::user()->email }}</h4>
                                                    </label>
                                                </div>
                                            </div>

                                        
                                            <div class="card-body form-group row col-md">
                                                <label for="name" class="col-md-12 col-form-label text-md-center">{{ __('Puntos: ') }}</label>

                                                <div class="col-md-12 col-form-label text-md-center">
                                                	<label>
                                                    <h4>-------------------------</h4>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                                                                    
                                    </div>

                                    </div>
                                </div>
                            
                        </div>
                    
                </font>
             
        </div> 
    </body>
</div>
@endsection
