@extends('layouts.app')
@section( 'content' )
<form action="{{route('regions.update',$region->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Region</label>
                        <input type="text" class="form-control" id="region" name="region" value="{{$region->region}}" required/>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection