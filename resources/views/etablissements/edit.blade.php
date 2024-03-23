@extends('layouts.app')
@section( 'content' )
<form action="{{route('etablissements.update',$etablissement->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="ville_id">Ville</label>
                        <select name="ville_id" id="ville_id" class="form-select">
                            @foreach (\App\Models\Ville::all() as $ville)
                                @if ($ville->id==$etablissement->ville_id)
                                    <option value="{{$ville->id}}" selected>{{$ville->ville}}</option>
                                @else
                                    <option value="{{$ville->id}}">{{$ville->ville}}</option>
                                @endif
                            @endforeach
                        </select><label for="name">Code</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="code" value="{{$etablissement->code}}">
                        <label for="name">nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" value="{{$etablissement->nom}}">
                        <label for="name">adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" value="{{$etablissement->adresse}}">
                        <label for="name">tel</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone" value="{{$etablissement->telephone}}">
                        <label for="name">fax</label>
                        <input type="text" class="form-control" id="fax" name="fax" placeholder="fax" value="{{$etablissement->fax}}">
                        <label for="name">email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$etablissement->email}}">
                        <label for="name">directeur</label>
                        <input type="text" class="form-control" id="directeur" name="directeur" placeholder="directeur" value="{{$etablissement->directeur}}">
                        <label for="name">x</label>
                        <input type="text" class="form-control" id="x" name="x" placeholder="x" value="{{$etablissement->x}}">
                        <label for="name">y</label>
                        <input type="text" class="form-control" id="y" name="y" placeholder="y" value="{{$etablissement->y}}">
                    </div>
                </div>
                <div class="card-footer bg-success">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection