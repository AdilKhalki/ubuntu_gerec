@extends('layouts.app')
@section( 'content' )
<form action="{{route('villes.update',$ville->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="region_id">Region</label>
                        <select name="region_id" id="region_id" class="form-select">
                            @foreach (\App\Models\Region::all() as $region)
                                @if ($region->id==$ville->region_id)
                                    <option value="{{$region->id}}" selected>{{$region->region}}</option>
                                @else
                                    <option value="{{$region->id}}">{{$region->region}}</option>
                                @endif
                            @endforeach
                        </select>
                        <label for="name">Ville</label>
                        <input type="text" class="form-control" id="ville" name="ville" value="{{$ville->ville}}" required/>
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