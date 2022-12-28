@extends('admin.beranda')

@section('Admincontent')
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Order
    </div>
    <br>
    <div class="card-body">
        <table  class="table" id="datatablesSimple">
            <thead class="table-light">
                <tr>
                    <th>layanan</th>
                    <th>Data User</th>
                    <th>Price</th>
                    <th>Jumlah Jamaah</th>
                    <th>Uang Muka</th>
                    <th>Total Biaya</th>
                    <th>Bukti Pelunasan</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach($orders as $order)
                <tr>
                    {{-- <td>
                        @if($order->service->kategori == "haji")
                        <img src="{{ url('storage/haji/' . $order->service->image) }}" alt="Service-Image" height="100px">
                        @elseif($order->service->kategori == "umroh")
                        <img src="{{ url('storage/umroh/' . $order->service->image) }}" alt="Service-Image" height="100px">
                        @else
                        <img src="{{ url('storage/private_umroh/' . $order->service->image) }}" alt="Service-Image" height="100px">
                        @endif
                    </td> --}}
                    <td>{{ $order->service->name }}</td>
                    <td>
                        <a href="https://api.whatsapp.com/send?phone={{ $order->user->nohp }}&text=assalamualaikum warahmatullahi wabarakatuh">
                            <h5 class="card-title"> {{ $order->user->name }}</h5>
                        </a>

                    </td>
                    <td>Rp.{{$order->service->price}}</td>
                    <td>{{$order->amount}} Orang</td>
                    <td>
                        @if($order->dp_receipt == null)
                            Rp. 0
                        @else
                        <a href="{{ url('storage/dp_receipt/' . $order->dp_receipt) }} "
                            class="btn btn-sm btn-primary">Bukti Pembayaran</a>
                        @endif
                    </td>
                    <td>Rp.{{$order->service->price * $order->amount}}</td>
                    <td>
                    @if($order->payment_receipt == null)
                        Rp. 0
                    @else
                    <a href="{{ url('storage/payment_receipt/' . $order->payment_receipt) }} "
                        class="btn btn-sm btn-primary">Bukti Pelunasan</a>
                    @endif
                    </td>
                    <td>
                        @if(!$order->is_paid && $order->payment_receipt == null)
                           Belum Lunas
                        @elseif(!$order->is_paid && $order->payment_receipt != null)
                        <form action="{{ route('confirm_payment', $order) }}" method="post">
                            @method('patch')
                            @csrf
                            <button class="btn btn-success" type="submit">Confirm</button>
                        </form>
                        @else
                            LUNAS
                        @endif
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
