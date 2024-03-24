@extends('layouts.app')
@section( 'content' )
<form action="{{route('agents.update',$agent->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        

                        <div class="row g-3">
                            <div class="col">
                                <label for="name">matricule</label>
                                <input type="text" class="form-control" id="matricule" name="matricule" placeholder="matricule" value="{{$agent->matricule}}">
                                <label for="name">cin</label>
                                <input type="text" class="form-control" id="cin" name="cin" placeholder="cin"value="{{$agent->cin}}">
                                <label for="name">nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="nom"value="{{$agent->nom}}">
                                <label for="name">prenom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom"value="{{$agent->prenom}}">
                                <label for="name">tel</label>
                                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone"value="{{$agent->telephone}}">
                                <label for="name">sexe</label>
                                <input type="text" class="form-control" id="sexe" name="sexe" placeholder="sexe"value="{{$agent->sexe}}">
                                <label for="name">email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$agent->email}}">
                                <label for="name">password</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="password"value="{{$agent->password}}">
                                <label for="name">observation</label>
                                <input type="text" class="form-control" id="observation" name="observation" placeholder="observation"value="{{$agent->observation}}">                        </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="etablissement_id">Etablissement</label>
                                    <select name="etablissement_id" id="etablissement_id" class="form-select">
                                        @foreach (\App\Models\Etablissement::all() as $etablissement)
                                        @if ($etablissement->id==$agent->etablissement_id)
                                        <option value="{{$etablissement->id}}" selected>{{$etablissement->nom}}</option>
                                            @else
                                            <option value="{{$etablissement->id}}">{{$etablissement->nom}}</option>
                                            @endif
                                        @endforeach
                                    </select>
            
                                    <label for="poste_id">Poste</label>
                                    <select name="poste_id" id="poste_id" class="form-select">
                                        @foreach (\App\Models\Poste::all() as $poste)
                                        @if ($poste->id==$agent->poste_id)
                                        <option value="{{$poste->id}}" selected>{{$poste->poste}}</option>
                                        @else
                                        <option value="{{$poste->id}}">{{$poste->poste}}</option>
                                        @endif
                                        @endforeach
                                    </select>
            
                                    <label for="grade_id">Grade</label>
                                    <select name="grade_id" id="grade_id" class="form-select">
                                        @foreach (\App\Models\Grade::all() as $grade)
                                        @if ($grade->id==$agent->grade_id)
                                        <option value="{{$grade->id}}" selected>{{$grade->grade}}</option>
                                        @else
                                        <option value="{{$grade->id}}">{{$grade->grade}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                            </div>
                          </div>
    
                        </div>
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