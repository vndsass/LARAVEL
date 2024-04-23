    


<div class="topnav" id="myTopnav">
    <a href="{{route('site.home')}}" class="active">Homepage</a>
    <a href="{{route('site.servico')}}">Serviços</a>
    <a href="{{route('site.contacto')}}">Contactos</a>
    <a href="{{route('site.galeria')}}">Galeria</a>
    <a href="{{route('home')}}">Inicio</a>
    
    <div class="dropdown">
      <button class="dropbtn">Utilizadores
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="{{route('home')}}">Login</a>
        <a href="{{route('user.index')}}">Utilizadores</a>
        <a href="{{route('socio.create')}}">Sócios</a>
        <a href="{{route('editora.create')}}">Editoras</a>
      </div>
    </div>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>

