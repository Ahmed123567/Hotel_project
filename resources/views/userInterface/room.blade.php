
@extends("layouts.appUser")

@section('content')

<section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <h2 class="mb-4">Family Room</h2>
                    <div class="single-slider owl-carousel">
                        <div class="item">
                            <div class="room-img" style="background-image: url(assets/room-1.jpg);"></div>
                        </div>
                        <div class="item">
                            <div class="room-img" style="background-image: url(assets/room-2.jpg);"></div>
                        </div>
                        <div class="item">
                            <div class="room-img" style="background-image: url(assets/room-3.jpg);"></div>
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
                                      <a href="rooms.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/room-1.jpg);">
                                          <div class="icon d-flex justify-content-center align-items-center">
                                              <span class="icon-search2"></span>
                                          </div>
                                      </a>
                                      <div class="text p-3 text-center">
                                          <h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
                                          <p><span class="price mr-2">$120.00</span> <span class="per">per night</span></p>
                                          <hr>
                                          <p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm col-md-6 ftco-animate">
                                  <div class="room">
                                      <a href="rooms.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/room-2.jpg);">
                                          <div class="icon d-flex justify-content-center align-items-center">
                                              <span class="icon-search2"></span>
                                          </div>
                                      </a>
                                      <div class="text p-3 text-center">
                                          <h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
                                          <p><span class="price mr-2">$20.00</span> <span class="per">per night</span></p>
                                          <hr>
                                          <p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                                      </div>
                                  </div>
                              </div>
                    </div>
                </div>

            </div>
        </div> <!-- .col-md-8 -->
        
          
        </div>
      </div>
    </div>
  </section> <!-- .section -->

                
@endsection