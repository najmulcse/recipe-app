@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <form action="{{route('search.item')}}" method="GET" role="form">
            <legend>Recipe Search</legend>
            {{ csrf_field() }}
            <div class="form-group">
                
                <input type="text" class="form-control" id="" name="searchItem" placeholder="Type item ex. egg, chicken">
            </div>

            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        </div>
    </div>
</div>
@endsection
