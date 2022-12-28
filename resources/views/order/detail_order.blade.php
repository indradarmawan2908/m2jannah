
@foreach($orders as $order)
@php
$total_price = 0;
$dp = 0;

$total_price += $order->amount * $order->service->price;
$dp += $order->amount * $order->service->price * 0.25;
$sisa_pembayaran = $total_price - $dp;
@endphp

<!-- ========== Cart-Summary Area (Start) ========== -->

<div class="cart-summary">

    <div class="summary-list">

        <div class="summary-item">
            <div class="name box">Total Harga</div>
            <div class="value box">Rp.{{ $total_price}}</div>
        </div>

        <div class="summary-item">
            <div class="name box">Uang Muka(DP)</div>
            <div class="value box">
                @if($order->dp_receipt == null)
                     <div class="value box">Rp. 0</div>
                @else
                    <div class="value box">Rp.{{ $dp }}</div>
                @endif
            </div>
        </div>

        <div class="summary-item">
            <div class="name box">Sisa pembayaran</div>
            <div class="value box">
                @if($order->dp_receipt == null)
                     <div class="value box">Rp. {{ $total_price }}</div>
                @else
                    <div class="value box">Rp.{{ $sisa_pembayaran }}</div>
                @endif
            </div>
        </div>

        @if($order->dp_receipt == null)
        <form onsubmit="return confirm('Upload bukti pembayaran Uang Muka Terlebih dahulu!');" action="{{ route('dp_receipt', $order) }}" method="GET">
            {{-- <a href="{{ route('payment_receipt', $order) }}" class="btn">Pelunasan</a> --}}
            {{-- @method('patch') --}}
            @csrf
            <button type="submit" class="btn">Pelunasan</button>
        </form>
        @elseif($order->payment_receipt == null)
        <a href="{{ route('payment_receipt', $order) }}" class="btn">Pelunasan</a>
        @else
        <a href="{{ url('storage/payment_receipt/' . $order->payment_receipt) }} "
            class="btn">Tampilkan Bukti Pelunasan</a>
        @endif
    </div>
@endforeach
    <div class="coupon"></div>

</div>