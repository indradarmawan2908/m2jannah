@extends('layouts.app')

@section('content')

<!-- ==================== Page-Title (Start) ==================== -->
<div class="page-title">


    <div class="link">
      {{-- <a href="../../index.html" class="fas fa-home"></a>
      <i class="fas fa-angle-double-right"></i> --}}
      <span class="page">Upload Bukti Pembayaran</span>
    </div>

  </div>
  <!-- ==================== Page-Title (End) ==================== -->



  <!-- ==================== Register Area (Start) ==================== -->
  <section class="register">

    <form class="form" action="{{route('submit_dp_receipt', $order)}}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
      <h3>Bukti Pembayaran</h3>
      <p>Uang Muka yang harus dibayar : Rp.{{ $order->service->price * $order->amount * 0.25 }}</p>
      <input id="dp_receipt" type="file" class="box" name="dp_receipt" required >

      <button type="submit" class="btn" name="submit" id="submit">submit</button>
    </form>

  </section>
  <!-- ==================== Register Area (End) ==================== -->


@endsection
