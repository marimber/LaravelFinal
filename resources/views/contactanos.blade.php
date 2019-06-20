@extends('layouts.app')

@section('content')

<body background='../images/fondos.jpg'>
<div style="width:100%; color: blue;"> 
    <div class="card-header">
        <div style="text-align: center;"> 
            <img src="{{ asset('images/title.png') }}" alt="Aqui ira la imagen" class="img-fluid">
        </div>
    </div>
</div>
<div class="container">


    <body background='../images/fondos.jpg'>
        
        
        <div class="row justify-content-center">   
            <div style="float:left;">

                <font color="white" face="Comic Sans MS,arial">
                    <div class="col-md-10" style="line-height: 100px;text-align: center;">
                        <div class="card">
                            <h3 class="card-header">{{ __('Contactanos') }}</h3>
                                <h6 class="card-body">Bienvenido a juegos clásicos, envianos tu duda, sugerencia y/o consulta.</h6>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                        <div class="col-md-6">
                                            <input id="phone" type="tinyInteger" class="form-control @error('phone') is-invalid @enderror" phone="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="consulta" class="col-md-4 col-form-label text-md-right">{{ __('Tu consulta') }}</label>

                                        <textarea class="col-md-6" id="content" name="content" rows="1"></textarea>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Enviar') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </font>
             </div>    
            <div style="float:right;">
                <div class="col-md-4">      
                    <img src="{{ asset('images/mario.jpg') }}" width="440" height="600" alt="Aqui ira la imagen">
                </div>               
                
            </div>
        </div>
        
    </body>
</div>
@endsection
