@extends('layouts.app')
@section('content')
<div class="pr-5">
<a href="{{route('villes.create')}}" class="btn btn-primary pr-5">Ajouter</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th class="col-2">id</th>
            <th >Region</th>
            <th class="col-6">Ville</th>
            <th class="col-6">Action</th>
        </tr>
    </thead>
@foreach ($villes as $ville)
    <tbody>
        <tr>
            <td scope="row">{{$ville->id}}</td>
            <td>{{$ville->region->region}}</td>
            <td>{{$ville->ville}}</td>
            <td>
                <form action="{{route('villes.destroy', $ville->id)}}" method="post">
                <a href="{{route('villes.edit', $ville->id)}}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
    </tbody>
@endforeach
</table>
{{$villes->links()}}

@endsection
