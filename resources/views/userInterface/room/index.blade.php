
@extends("layouts.appUser")

@section('content')

<section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                   
                        <h2 class="mb-4">{{$mainRoom[0]}}</h2>
                        @if ($mainRoom[3] == 0)
                        <p style="color: red">All rooms resvered</p>
                        @endif
                    <div class="single-slider owl-carousel">
                        <div class="item">
                            <div class="room-img" style="background-image: url({{URL::asset('assets/room-1.jpg')}});"></div>
                        </div>
                        <div class="item">
                            <div class="room-img" style="background-image: url({{URL::asset('assets/room-2.jpg')}});"></div>
                        </div>
                        <div class="item">
                            <div class="room-img" style="background-image: url({{URL::asset('assets/room-3.jpg')}});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
                          <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                </div>
             
                
                <div class="col-md-12 room-single ftco-animate mb-5 mt-5">
                    <h4 class="mb-4">Available Room</h4>
                    <div class="row">
                        <div class="col-sm col-md-6 ftco-animate">
                                  <div class="room">
                                      <a href="{{route('main.room' , $otherRooms[0][2] )}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{URL::asset('assets/room-1.jpg')}});">
                                          <div class="icon d-flex justify-content-center align-items-center">
                                              <span class="icon-search2"></span>
                                          </div>
                                      </a>
                                      <div class="text p-3 text-center">
                                          <h3 class="mb-3"><a href="{{route('main.room' , $otherRooms[0][2] )}}">{{$otherRooms[0][0]}}</a></h3>
                                          <p><span class="price mr-2">{{$otherRooms[0][1]}}</span> <span class="per">per night</span></p>
                                          <hr>
                                          <p class="pt-1"><a href="{{route('main.room' , $otherRooms[0][2] )}}" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm col-md-6 ftco-animate">
                                  <div class="room">
                                      <a href="{{route('main.room' , $otherRooms[1][2] )}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{URL::asset('assets/room-2.jpg')}});">
                                          <div class="icon d-flex justify-content-center align-items-center">
                                              <span class="icon-search2"></span>
                                          </div>
                                      </a>
                                      <div class="text p-3 text-center">
                                          <h3 class="mb-3"><a href="{{route('main.room' , $otherRooms[1][2] )}}">{{$otherRooms[1][0]}}</a></h3>
                                          <p><span class="price mr-2">{{$otherRooms[1][1]}}</span> <span class="per">per night</span></p>
                                          <hr>
                                          <p class="pt-1"><a href="{{route('main.room' , $otherRooms[1][2] )}}" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                                      </div>
                                  </div>
                              </div>
                    </div>
                </div>

            </div>
        </div> 
        <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate fadeInUp ftco-animated">
            <div class="sidebar-box">
              <form action="{{route('main.room.resrve')}}" method="post" style="text-align: center" class="reserve" >
                    @csrf
                    <input type="hidden" name="roomtype" value="{{$mainRoom[2]}}">
                    @auth
                        <input type="hidden" name="owner" value="{{Auth::user()->id}}">
                    @endauth
                    @if ($mainRoom[3])
                    <button class="btn btn-info">Reserve Room</button>                        
                    @else
                    <button type="button" class="btn btn-info disabled">Reserve Room</button>
                    @endif
              </form>
          </div>
          
        </div>
      </div>
    </div>
  </section> <!-- .section -->

                
@endsection