 
@extends('layout.website.app')

@section('internal_css')
    <style type="text/css">
   .btn{
    background: red;
    color: white;
    
   }
</style> 
  
@endsection

@section('content')
 
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ asset('style/images/page-banner-3.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== EVENTS PART START ======-->
    
    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
            @foreach($result as $key=>$value)
               <div class="col-lg-6">
                   <div class="singel-event-list mt-30">
                       <div class="event-thum">
                           <img src="{{ asset('/images/Event/'.$value->image)}}" alt="Event">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i> {{ dateFormat($value->date)  }}</span>
                            <h4>{{ $value->name  }}</h4>
                            <span><i class="fa fa-clock-o"></i>{{timeFormat( $value->start_time) .' - '. timeFormat($value->finish_time )}}</span>
                            <span><i class="fa fa-map-marker"></i> {{ $value->place  }}</span>
                            <p>{{ $value->heading }}</p>
                            <div class="price-button pt-10 col-lg-6">
                            <a class="btn" href="{{url('event_deatiles/'.$value->id)}}" >
                            Details
                            </a>
                       </div>
                       </div>

                   </div>
               </div>
               @endforeach
           </div>
       </div>
   </section>

    
    <!--====== EVENTS PART ENDS ======-->
    
    
    
   @endsection