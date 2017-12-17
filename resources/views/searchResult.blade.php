@extends('layouts.app')

@section('content')
<div class="container">
    <section id="work" class="section-modifiy work-modifiy">
      <br> <div> <h2 style="text-align:center;">All Recipe Items </h2></div><br>
        <div class="container">
           
           <div class="row">
           @foreach($response_results->hits as $response)
                <div class="col-sm-3">
                   <a href="#">
                       <div class="work-image">
                           <img class="img-responsive" src="{{$response->recipe->image}}">
                       </div>
                       <div>
                           <h4>{{$response->recipe->label}}</h4>
                       </div>
                   </a>
                    
                </div>
             @endforeach
           </div>
           
        </div>
        
    </section>


</div>
@endsection
