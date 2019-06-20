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
  <font color="white" face="Comic Sans MS,arial">
    <div class="row">
    <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">big farm</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/big-farm.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">Crash bandicoot</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/crashj.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>    
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">mario bros</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/marioj.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">los simpsons</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/simpson.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">street figther</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/st.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">Sonics</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/sonicj.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">Pacman</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/pacmanj.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">Espejo</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/cerdo.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      

    </div>
  </font>
</div>
</body>

@endsection
