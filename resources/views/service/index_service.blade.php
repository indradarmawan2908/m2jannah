@extends('admin.beranda')

@section('Admincontent')
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Service
    </div>
    <br>
    <a class="btn btn-primary" href="{{ route('create_service') }}" role="button">Add Service</a>

    <div class="card-body">
        <table  class="table" id="datatablesSimple">
            <thead class="table-light">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Short_description</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Number Of Seats</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($services as $service)
                <tr>
                    <td>

                    @if($service->kategori == "haji")
                    <img src="{{ url('storage/haji/' . $service->image) }}" alt="Service-Image" height="100px">
                    @elseif($service->kategori == "umroh")
                    <img src="{{ url('storage/umroh/' . $service->image) }}" alt="Service-Image" height="100px">
                    @else
                    <img src="{{ url('storage/private_umroh/' . $service->image) }}" alt="Service-Image" height="100px">
                    @endif
                    </td>
                    <td>{{$service->name}}</td>
                    <td>{{$service->short_description}}</td>
                    <td>{{$service->description}}</td>
                    <td>{{$service->price}}</td>
                    <td>{{$service->stock}}</td>
                    <td>{{$service->kategori}}</td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('delete_service', $service->id) }}" method="POST">
                            <a href="{{ route('edit_service', $service) }}" class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
