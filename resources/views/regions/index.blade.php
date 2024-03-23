@extends('layouts.app')
@section('content')
<div class="pr-5">
<a href="{{route('regions.create')}}" class="btn btn-primary pr-5">Ajouter</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th class="col-2">id</th>
            <th class="col-6">Region</th>
            <th class="col-6">Action</th>
        </tr>
    </thead>
@foreach ($regions as $region)
    <tbody>
        <tr>
            <td scope="row">{{$region->id}}</td>
            <td>{{$region->region}}</td>
            <td>
                <form action="{{route('regions.destroy', $region->id)}}" method="post">
                <a href="{{route('regions.edit', $region->id)}}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
    </tbody>
@endforeach
</table>
{{$regions->links()}}

@endsection
