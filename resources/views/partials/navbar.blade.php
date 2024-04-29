   
   <nav>

        <div class="topnav" id="myTopnav">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Menu</a></li>
                <li><a href="{{ route('site.servico') }}">Serviços</a></li>
                <li><a href="{{ route('site.contacto') }}">Contactos</a></li>
                <li><a href="{{ route('site.galeria') }}">Galeria</a></li>
                <li><a href="{{ route('socio.index') }}">Todos os socios </a></li>
                <li><a href="{{route('socio.user', Auth::user()->id)}}">Meus socios </a></li>
                <li><a href="{{route('socio.create')}}">Criar novo socio </a></li>
                <li><a href="{{ route('editora.index') }}">Listar editoras</a></li>
                <li><a href="{{ route('editora.create') }}">criar nova editoras</a></li>
                <li><a href="{{ route('user.index') }}">Lista utilizadores</a></li>
                <li style="float:right"><a href="{{ route('login') }}" class="active">Login</a></li>
                <li style="float:right"><a href="{{ route('register') }}" class="active">Register</a></li>
            </ul>
        </div>
    </nav>
