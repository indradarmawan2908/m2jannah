@extends('layouts.app')

@section('content')
 <!-- ==================== Page-Title (Start) ==================== -->
 <div class="page-title">

    <div class="title">
        <h2>Order</h2>
    </div>

    <div class="link">
        <a href="../../index.html" class="fas fa-home"></a>
        <i class="fas fa-angle-double-right"></i>
        <span class="page">Order</span>
    </div>

</div>
<!-- ==================== Page-Title (End) ==================== -->



<!-- ==================== Cart Area (Start) ==================== -->
<section class="cart">
    @foreach($orders as $order)
    <!-- ========== Shopping-Cart Area (Start) ========== -->
    <div class="shopping-cart">

        <div class='container'>

            <div class="shoplist-title">
                <h3 class="product-heading">Layanan</h3>
                <h3>Harga</h3>
                <h3>Jumlah Jamaah</h3>
                <h3>Uang Muka</h3>
                <h3>Total Pembayaran</h3>
                <h3>Status</h3>
                <h3>Action</h3>
            </div>


            <div class="box-container">

                <div class="cart-item">
                    <div class="box product">
                        @if($order->service->kategori == "haji")
                        <img src="{{ url('storage/haji/' . $order->service->image) }}" alt="Service-Image" height="100px">
                        @elseif($order->service->kategori == "umroh")
                        <img src="{{ url('storage/umroh/' . $order->service->image) }}" alt="Service-Image" height="100px">
                        @else
                        <img src="{{ url('storage/private_umroh/' . $order->service->image) }}" alt="Service-Image" height="100px">
                        @endif
                        <div class="name">{{ $order->service->name }}</div>
                    </div>
                    <div class="box">Rp.{{ $order->service->price }}</div>
                    <div class="box">{{ $order->amount }} orang</div>

                    <div class="box">
                        @if($order->dp_receipt == null)
                            <a href="{{ route('dp_receipt', $order) }}" class="btn">Upload</a>
                        @else
                        <div class="box">Lunas</div>
                        @endif
                    </div>
                    <div class="box">Rp.{{ $order->amount * $order->service->price}}</div>
                    <div class="box">
                        @if($order->is_paid)
                        Lunas
                        @else
                        Belum Lunas
                        @endif
                    </div>
                    <div class="box">
                        {{-- <a href="{{ route('create_jamaah', $order) }}" class="btn">Data Jamaah</a> --}}
                        <a href="{{ route('order.detail.order', $order) }}" class="btn">Detail</a>
                    </div>
                
                    </div>
            </div>

            </div>

        </div>

    </div>
    <!-- ========== Shopping-Cart Area (End) ========== -->

  
    <!-- ========== Cart-Summary Area (End) ========== -->

    @endforeach

</section>
<!-- ==================== Cart Area (End) ==================== -->
@endsection
