@extends('welcome')

@section('OurService')
<div class="box-container">
    @foreach($services as $service)
    <div class="service-item">
        <div class="image">
            <img src="{{ url('storage/' . $service->image) }}" alt="Service-Image" height="100px">
        </div>
        <div class="content">
          <a href="pages/Services/Service-Details.html"><h3>{{$service->name}}</h3></a>
          <p>IDR.{{$service->price}} | Available Seat: {{$service->stock}}</p>
          <p>{{$service->short_description}}</p>
        </div>
      </div>
    @endforeach

      {{-- <div class="service-item">
        <div class="image">
          <img src="assets/images/Service/Services/Service-2.jpg" alt="Service-Image">
        </div>
        <div class="content">
          <a href="pages/Services/Service-Details.html"><h3>Haji dan Umroh</h3></a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur possimus assumenda dolores odit.</p>
        </div>
      </div>

      <div class="swiper-slide service-item">
        <div class="image">
          <img src="assets/images/Service/Services/Service-1.jpg" alt="Service-Image">
        </div>
        <div class="content">
          <a href="pages/Services/Service-Details.html"><h3>Haji Khusus 2023</h3></a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur possimus assumenda dolores odit.</p>
        </div>
      </div>

      <div class="swiper-slide service-item">
        <div class="image">
          <img src="assets/images/Service/Services/Service-1.jpg" alt="Service-Image">
        </div>
        <div class="content">
          <a href="pages/Services/Service-Details.html"><h3>Umroh Hemat</h3></a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur possimus assumenda dolores odit.</p>
        </div>
      </div>

      <div class="swiper-slide service-item">
        <div class="image">
          <img src="assets/images/Service/Services/Service-2.jpg" alt="Service-Image">
        </div>
        <div class="content">
          <a href="pages/Services/Service-Details.html"><h3>Haji dan Umroh 2023</h3></a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur possimus assumenda dolores odit.</p>
        </div>
      </div>

      <div class="swiper-slide service-item">
        <div class="image">
          <img src="assets/images/Service/Services/Service-1.jpg" alt="Service-Image">
        </div>
        <div class="content">
          <a href="pages/Services/Service-Details.html"><h3>Umroh Ekslusif 15 Februari</h3></a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur possimus assumenda dolores odit.</p>
        </div>
      </div> --}}

    </div>
@endsection
