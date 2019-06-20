@extends('layouts.app')

@section('content')

<div style="width:100%;"> 
    <div class="card-header">
        <div style="text-align: center;"> 
            <img src="{{ asset('images/title.png') }}" alt="Aqui ira la imagen"  class="img-fluid">
        </div>
    </div>
</div>

<div class="container-fluid" style="background: url('/images/fondocrash.jpg')">
    <div class="container">
        <font color="white" face="Comic Sans MS,arial">
          <div class="row">
            <div class="col">
                <div style="text-align: center;">
                  <h1 class="card-header dark">Big - Farm</h1>
                  <content>
                      <h4 class="card-header">Goodgame Big Farm is a great farming freemium title that, if you dare, will suck you into playing for days. One of the most immersive farm simulators on the internet. Great graphics and charming art style. Fun farming simulation gameplay...</h4>
                      <a href="{{ route('game') }}" class="btn btn-dark">
                        <h2 >Play Game</h2>
                      </a>
                  </content>
                </div>
            </div>
            <div class="col">
                <TABLE WIDTH="100%" HEIGHT="100%">
                    <TR>
                        <TD VALIGN="MIDDLE" ALIGN="CENTER">
                        <div style="text-align: center;">
                            <a href="{{ route('game') }}">
                                <img src="{{ asset('images/big-farm.jpg') }}" width="300" height="300" alt="Aqui ira la imagen">
                            </a>
                        </div>
                        </TD>
                    </TR>
                </TABLE>                
            </div>
          </div>
        </font>
    </div>

</div>
@endsection

