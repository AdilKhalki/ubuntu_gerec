@extends('layouts.app')
@section('content')
<div class="pr-5">
<a href="{{route('etablissements.create')}}" class="btn btn-primary pr-5">Ajouter</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th >id</th>
            <th >Ville</th>
            <th >Code</th>
            <th >Nom</th>
            <th >Adresse</th>
            <th >Email</th>
            <th >Tel</th>
            <th >Fax</th>
            <th >Directeur</th>
            <th >x</th>
            <th >y</th>
            <th >Action</th>
        </tr>
    </thead>
@foreach ($etablissements as $etablissement)
    <tbody>
        <tr>
            <td>{{$etablissement->id}}</td>
            <td>{{$etablissement->ville->ville}}</td>
            <td>{{$etablissement->code}}</td>
            <td>{{$etablissement->nom}}</td>
            <td>{{$etablissement->adresse}}</td>
            <td>{{$etablissement->email}}</td>
            <td>{{$etablissement->tel}}</td>
            <td>{{$etablissement->fax}}</td>
            <td>{{$etablissement->directeur}}</td>
            <td>{{$etablissement->x}}</td>
            <td>{{$etablissement->y}}</td>

            <td>
                <form action="{{route('etablissements.destroy', $etablissement->id)}}" method="post">
                <a href="{{route('etablissements.edit', $etablissement->id)}}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
    </tbody>
@endforeach
</table>
{{$etablissements->links()}}

@endsection
