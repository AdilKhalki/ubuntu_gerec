@extends('layouts.app')
@section( 'content' )
<form action="{{route('regions.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Region</label>
                        <input type="text" class="form-control" id="region" name="region" placeholder="Region">
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