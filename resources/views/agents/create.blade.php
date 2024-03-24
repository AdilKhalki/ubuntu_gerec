@extends('layouts.app')
@section( 'content' )
<form action="{{route('agents.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">


                    <div class="row g-3">
                        <div class="col">
                            <label for="name">matricule</label>
                            <input type="text" class="form-control" id="matricule" name="matricule" placeholder="matricule">
                            <label for="name">cin</label>
                            <input type="text" class="form-control" id="cin" name="cin" placeholder="cin">
                            <label for="name">nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
                            <label for="name">prenom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom">
                            <label for="name">tel</label>
                            <input type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone">
                            <label for="name">sexe</label>
                            <input type="text" class="form-control" id="sexe" name="sexe" placeholder="sexe">
                            <label for="name">email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email">
                            <label for="name">password</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="password">
                            <label for="name">observation</label>
                            <input type="text" class="form-control" id="observation" name="observation" placeholder="observation">                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="etablissement_id">Etablissement</label>
                                <select name="etablissement_id" id="etablissement_id" class="form-select">
                                    @foreach (\App\Models\Etablissement::all() as $etablissement)
                                    <option value="{{$etablissement->id}}">{{$etablissement->nom}}</option>
                                    @endforeach
                                </select>
        
                                <label for="poste_id">Poste</label>
                                <select name="poste_id" id="poste_id" class="form-select">
                                    @foreach (\App\Models\Poste::all() as $poste)
                                    <option value="{{$poste->id}}">{{$poste->poste}}</option>
                                    @endforeach
                                </select>
        
                                <label for="grade_id">Grade</label>
                                <select name="grade_id" id="grade_id" class="form-select">
                                    @foreach (\App\Models\Grade::all() as $grade)
                                    <option value="{{$grade->id}}">{{$grade->grade}}</option>
                                    @endforeach
                                </select>
                        </div>
                      </div>

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