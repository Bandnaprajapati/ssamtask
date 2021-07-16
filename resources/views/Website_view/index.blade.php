 
@extends('layout.website.app')

@section('internal_css')
   <style type="text/css">
   .event-thum{
    height: 250px;
    width: 50px ;
   }
   .image{
    height:250px;
   }
   .btn{
    display: inline-block;
    background: red;
    color: white;
    padding: 10px 20px;
    cursor: pointer;
    border: 0;
    border-radius: 5px;
   }
</style> 
  
@endsection

@section('content')
 <!--====== SLIDER PART START ======-->
    
   <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover pt-150" style="background-image: url(style/images/slider/s-1.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Event</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s"></p>
                           
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        
        <div class="single-slider bg_cover pt-150" style="background-image: url(style/images/slider/s-2.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Event</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s"></p>
                            
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        
        <div class="single-slider bg_cover pt-150" style="background-image: url(style/images/slider/s-3.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Event</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s"></p>
                            
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- slider feature -->
        </div> <!-- container -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->

    <!--====== EVENTS PART START ======-->
    
    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our Events</h5>
                        <h2>Upcoming Events</h2>
                    </div> <!-- section title -->
                </div>
            
           <div class="row">
            @foreach($result as $key=>$value)
               <div class="col-lg-12">
                   <div class="singel-event-list mt-30">
                       <div class="event-thum">
                           <img src="{{ asset('/images/Event/'.$value->image)}}" alt="Event" class="image">
                       </div>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i> {{ dateFormat($value->date)  }}</span>
                            <a href="{{url('event_deatiles/'.$value->id)}}"><h4>{{ $value->name  }}</h4></a>
                            <span><i class="fa fa-clock-o"></i>{{timeFormat( $value->start_time) .' - '. timeFormat($value->finish_time )}}</span>
                            <span><i class="fa fa-map-marker"></i> {{ $value->place  }}</span>
                            <p>{{ $value->heading }}</p>
                            <div class="price-button pt-10 col-lg-3">
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