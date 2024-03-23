@extends('layouts.app')
@section( 'content' )
<form action="{{route('villes.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="region_id">Region</label>
                        <select name="region_id" id="region_id" class="form-select">
                            @foreach (\App\Models\Region::all() as $region)
                            <option value="{{$region->id}}">{{$region->region}}</option>
                            @endforeach
                        </select>
                        <label for="name">Ville</label>
                        <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">
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