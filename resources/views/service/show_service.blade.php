@extends('layouts.app')

@section('content')

  <!-- ==================== Page-Title (Start) ==================== -->
  <div class="page-title">

    <div class="title">
      <h2>Service Detail</h2>
    </div>

    <div class="link">
      <a href="{{route('welcome')}}" class="fas fa-home"></a>
      <i class="fas fa-angle-double-right"></i>
      <span class="page">Service Details</span>
    </div>

  </div>
  <!-- ==================== Page-Title (End) ==================== -->



  <!-- ==================== Product-Details Area (Start) ==================== -->
  <section class="product-details">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    @endif
    <!-- ========== Product-Description Area (Start) ========== -->
    <div class="product-des">

      <div class="image">
          <div class="main">
            {{-- <img src="{{ url('storage/' . $service->image) }}" alt=""> --}}
            @if($service->kategori == "haji")
                    <img src="{{ url('storage/haji/' . $service->image) }}" alt="Service-Image" height="100px">
            @elseif($service->kategori == "umroh")
                    <img src="{{ url('storage/umroh/' . $service->image) }}" alt="Service-Image" height="100px">
            @else
                    <img src="{{ url('storage/private_umroh/' . $service->image) }}" alt="Service-Image" height="100px">
            @endif
          </div>
      </div>

      <div class="content">
        <div class="text">

          <h3>{{$service->name}}</h3>

          <div class="price" >IDR.{{$service->price}} </div>


          <p>{{$service->description}}</p>

        <form action="{{ route('store_order', $service) }}" method="post">
            @csrf
          <div class='qty'>
            <h2>Jumlah Jamaah:</h2>
            <div class="quantity buttons_added" class="form-control">
              <input type="button" value="-" class="minus">
              <input type="number" step=1 min=1 max=100  class="input-text qty " class="form-control" name="amount" value=1>
              <input type="button" value="+" class="plus">
            </div>
            </div>
          <button class="btn" type="submit">Booking</button>
        
          {{-- <a href="https://api.whatsapp.com/send?phone=081293339990&text=assalamualaikum warahmatullahi wabarakatuh" class="btn">Tanya CS </a> --}}

        </form>

            {{-- <div>
                <a href="{{route('edit_service', $service)}}" class="btn">Update</a>

                <a class="btn" href="{{route('delete_service', $service) }}"
                onclick="event.preventDefault();
                                document.getElementById('delete-form').submit();">
                    Delete
                </a>

                <form id="delete-form" action="{{ route('delete_service', $service) }}" method="POST" class="d-none">
                    @method('delete')
                    @csrf
                </form>
            </div> --}}

          {{-- @endif --}}


          <div class='Layanan'>
            {{-- <h4>Categories:</h4>
            <span>{{$service->kategori}}</span> --}}

            <h2>Layanan Termasuk : </h2>
              <p>{{ $service->termasuk }}</p>
            <h2>Layanan Tidak Termasuk : </h2>
              <p>{{ $service->tidak_termasuk }}</p>
          </div>

        </div>
      </div>
    </div>
    <!-- ========== Product-Description Area (End) ========== -->



    <!-- ========== Related Products Area (Start) ========== -->
    <div class="related-items">

      <div class="sidebar-heading">
        <h2>Related Service</h2>
      </div>

      <div class="box-container">
    @foreach($layanans as $serviceAll)
        @if($serviceAll->name != $service->name && $serviceAll->kategori == $service->kategori)
        <div class="product-item">
            <div class="image">
              <div class="options">
                <a href="{{route('show_service', $serviceAll)}}"><i class="far fa-eye"></i></a>
              </div>
              {{-- <img src="{{ url('storage/' . $serviceAll->image) }}" alt=""> --}}
                @if($service->kategori == "haji")
                        <img src="{{ url('storage/haji/' . $serviceAll->image) }}" alt="Service-Image" height="100px">
                @elseif($service->kategori == "umroh")
                        <img src="{{ url('storage/umroh/' . $serviceAll->image) }}" alt="Service-Image" height="100px">
                @else
                        <img src="{{ url('storage/private_umroh/' . $serviceAll->image) }}" alt="Service-Image" height="100px">
                @endif
            </div>
            <div class="content">
              <a href="{{route('show_service', $service)}}"><h3>{{ $serviceAll->name}}</h3></a>
              <div class="price">
                <p>IDR.{{ $serviceAll->price}}</p>
              </div>
            </div>
          </div>
        @endif
        @endforeach
      </div>
    </div>

    <!-- ========== Related Products Area (End) ========== -->
@endsection
