@extends('layouts.app')
@section( 'content' )
<form action="{{route('etablissements.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="ville_id">Ville</label>
                        <select name="ville_id" id="ville_id" class="form-select">
                            @foreach (\App\Models\Ville::all() as $ville)
                            <option value="{{$ville->id}}">{{$ville->ville}}</option>
                            @endforeach
                        </select>
                        <label for="name">Code</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="code">
                        <label for="name">nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
                        <label for="name">adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse">
                        <label for="name">tel</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone">
                        <label for="name">fax</label>
                        <input type="text" class="form-control" id="fax" name="fax" placeholder="fax">
                        <label for="name">email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                        <label for="name">directeur</label>
                        <input type="text" class="form-control" id="directeur" name="directeur" placeholder="directeur">
                        <label for="name">x</label>
                        <input type="text" class="form-control" id="x" name="x" placeholder="x">
                        <label for="name">y</label>
                        <input type="text" class="form-control" id="y" name="y" placeholder="y">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection