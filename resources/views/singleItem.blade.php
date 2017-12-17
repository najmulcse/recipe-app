@extends('layouts.app')

@section('content')
<div class="container">
    <section id="work" class="section-modifiy work-modifiy">
      <br> <div> <h2 style="text-align:center;">Details of  </h2></div><br>
        <div class="container">
           
           <div class="row">
           <?php $i=0; ?>
           @foreach($response_results->hits as $response)

              @if($th==$i)
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
               <div class="col-sm-9">
                  <ul class="list-group">
                    <li class="list-group-item">source:{{$response->recipe->source}} <span class="badge"></span></li>
                    <li class="list-group-item">calories:{{$response->recipe->calories}} <span class="badge"></span></li>
                   
                  </ul>
                </div>
                @endif
                
                <?php $i++ ; ?>
             @endforeach
           </div>
           
        </div>
        
    </section>


</div>
@endsection
