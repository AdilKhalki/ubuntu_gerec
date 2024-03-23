<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
    <ul>
        <li class="active">
        <a href="index.html"><img src="{{asset("assets/img/icons/dashboard.svg")}}" alt="img"><span> Dashboard</span> </a>
        </li>
        <li class="submenu">
        <a href="javascript:void(0);"><img src="{{asset("assets/img/icons/product.svg")}}" alt="img"><span> Parametres</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="{{route('regions.index')}}">Regions</a></li>
        <li><a href="{{route('villes.index')}}">Villes</a></li>
        <li><a href="{{route('etablissements.index')}}">Etablissements</a></li>
        <li><a href="{{route('grades.index')}}">Grades</a></li>
        <li><a href="{{route('types_reclamations.index')}}">Types Reclamations</a></li>
        <li><a href="{{route('postes.index')}}">Postes</a></li>
        <li><a href="{{route('etats.index')}}">Etats</a></li>
        </ul>
        </li>
        <li class="submenu">
        <a href="javascript:void(0);"><img src="{{asset("assets/img/icons/sales1.svg")}}" alt="img"><span>Agents</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="{{route('agents.index')}}">Liste des Agents</a></li>
        <li><a href="{{route('reclamations.index')}}">Liste des Reclamations</a></li>
        </ul>
        </li>
    </ul>
    </div>
    </div>
</div>