@extends('layouts.appUser')


@section('content')

    

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Rooms</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                    <div class="room">
                        <a href="{{route('main.room', ['room_type' => 2])}}" class="img d-flex justify-content-center align-items-center"
                            style="background-image: url(assets/room-1.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3 text-center">
                            <h3 class="mb-3"><a href="{{route('main.room' , ['room_type' => 2])}}">Tow Presons Room</a></h3>
                            <p><span class="price mr-2">{{$roomPrice2}}</span> <span class="per">per night</span>
                            </p>
                            <hr>
                            <p class="pt-1"><a href="{{route('main.room', ['room_type' => 2])}}" class="btn-custom">View Room
                                    Details <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                    <div class="room">
                        <a href="{{route('main.room', ['room_type' => 3])}}" class="img d-flex justify-content-center align-items-center"
                            style="background-image: url(assets/room-2.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3 text-center">
                            <h3 class="mb-3"><a href="{{route('main.room', ['room_type' => 3])}}">Three Presons Room</a></h3>
                            <p><span class="price mr-2">{{$roomPrice3}}</span> <span class="per">per night</span>
                            </p>
                            <hr>
                            <p class="pt-1"><a href="{{route('main.room', ['room_type' => 3])}}" class="btn-custom">View Room
                                    Details <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                    <div class="room">
                        <a href="{{route('main.room', ['room_type' => 5])}}" class="img d-flex justify-content-center align-items-center"
                            style="background-image: url(assets/room-3.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3 text-center">
                            <h3 class="mb-3"><a href="{{route('main.room', ['room_type' => 5])}}">Five Presons Room</a></h3>
                            <p><span class="price mr-2">{{$roomPrice5}}</span> <span class="per">per night</span>
                            </p>
                            <hr>
                            <p class="pt-1"><a href="{{route('main.room', ['room_type' => 5])}}" class="btn-custom">View Room
                                    Details <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>

            </div>

    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(assets/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="{{$numOfUsers}}">0</strong>
                                    <span>Happy Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="{{$numOfRooms}}">0</strong>
                                    <span>Rooms</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="{{$numOfUsers}}">0</strong>
                                    <span>Customers</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 ftco-animate">
                    <div class="row ftco-animate">
                        <div class="col-md-12">
                            <div class="carousel-testimony owl-carousel ftco-owl">
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4" style="background-image: url(assets/person_1.png)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">A small river named Duden flows by their place
                                                and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <p class="name">Ahmed Abdo</p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4" style="background-image: url(assets/person_2.jpeg)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">A small river named Duden flows by their place
                                                and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <p class="name">Ahmed Helmy</p>
                                                
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4" style="background-image: url(assets/person_3.png)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">A small river named Duden flows by their place
                                                and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <p class="name">Mohamed Ayman</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4" style="background-image: url(assets/person_4.jpeg)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">A small river named Duden flows by their place
                                                and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <p class="name">Mohamed Shibl</p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4" style="background-image: url(assets/person_5.png)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">A small river named Duden flows by their place
                                                and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <p class="name">Mohamed Zakria</p>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4" style="background-image: url(assets/person_5.png)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">A small river named Duden flows by their place
                                                and supplies it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into your mouth.</p>
                                            <p class="name">Mohamed Eid</p>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

