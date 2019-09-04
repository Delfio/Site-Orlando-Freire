<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">

        <li>
            <a href="{{ URL:: to('home-painel') }}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Home</span> </a>
        </li>

        <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Trabalhos</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ URL:: to('/inserir-trabalho')}}" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Inserir</a></li>

                <li><a href="{{ URL:: to('/listar-trabalho')}}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Listar</a></li>

           </ul>
        </li>
         <li>
            <a href="{{ URL:: to('contato-adm')}}" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Contato</span> </a>
        </li>

         <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Slides</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ URL:: to('/inserir-slide')}}" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Inserir</a></li>
                <li><a href="{{ URL:: to('/listar-slide')}}" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>Listar</a></li>
           </ul>
        </li>

        <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Imagens/Informações</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ URL:: to('/inserir-informacao')}}" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Inserir</a></li>
                <li><a href="{{ URL:: to('/listar-foto')}}" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Listar</a></li>
            </ul>
        </li>

        <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Horarios</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ URL:: to('/inserir-horario')}}" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Inserir</a></li>
                <li><a href="{{ URL:: to('/listar-horarios')}}" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Listar</a></li>
            </ul>
        </li>

        <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Programação</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ URL:: to('/inserir-programacao')}}" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Inserir</a></li>
                <li><a href="{{ URL:: to('/listar-programacao')}}" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Visualizar</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Disciplinas</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ URL:: to('/inserir-disciplina')}}" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Inserir</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Turma</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ URL:: to('/inserir-turma')}}" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Inserir</a></li>
            </ul>
        </li>
    </ul>
</div>
