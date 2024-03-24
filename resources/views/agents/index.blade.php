@extends('layouts.app')
@section('content')
<div class="pr-5">
<a href="{{route('agents.create')}}" class="btn btn-primary pr-5">Ajouter</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th >Id</th>
            <th >Matricule</th>
            <th >Nom</th>
            <th >Prenom</th>
            <th >Date Naissance</th>
            <th >Date Recrutement</th>
            <th >Poste</th>
            <th >Grade</th>
            <th >Etablissement</th>
            <th >Ville</th>
            <th >Region</th>
            <th >Action</th>
        </tr>
    </thead>
@foreach ($agents as $agent)
    <tbody>
        <tr>
            <td>{{$agent->id}}</td>
            <td>{{$agent->matricule}}</td>
            <td>{{$agent->nom}}</td>
            <td>{{$agent->prenom}}</td>
            <td>{{$agent->date_naissance}}</td>
            <td>{{$agent->date_recrutement}}</td>
            <td>{{$agent->poste->poste}}</td>
            <td>{{$agent->grade->grade}}</td>
            <td>{{$agent->etablissement->nom}}</td>
            <td>{{$agent->etablissement->ville->ville}}</td>
            <td>{{$agent->etablissement->ville->region->region}}</td>

            <td>
                <form action="{{route('agents.destroy', $agent->id)}}" method="post">
                <a href="{{route('agents.edit', $agent->id)}}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
    </tbody>
@endforeach
</table>
{{$agents->links()}}

@endsection
