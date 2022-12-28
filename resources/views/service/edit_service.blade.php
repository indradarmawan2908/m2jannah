@extends('admin.beranda')

@section('Admincontent')
<section class="register">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    @endif
<div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Service</h3></div>
    <div class="card-body">
    <form class="form" action="{{route('update_service', $service)}}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
    <label for="name" class="form-label">Service Name</label>
    <input id="name" type="text" class="form-control" name="name" placeholder="Service Name" value="{{ $service->name }}"><br>

    <label for="short_description" class="form-label">Short Description</label>
    <input id="short_description" type="text" class="form-control" name="short_description"  placeholder="Short Description" value="{{ $service->short_description }}"><br>

    <label for="description" class="form-label">Description</label>
    <input id="description" type="text" class="form-control input-lg" name="description"  placeholder="Service Description" value="{{ $service->description }}"><br>

    <label for="price" class="form-label">Price</label>
    <input id="price" type="number" class="form-control" name="price" placeholder="Service Price" value={{ $service->price }}><br>

    <label for="stock" class="form-label">Number of Seat</label>
    <input id="stock" type="number" class="form-control" name="stock" placeholder="jumlah seat" value={{ $service->stock }}><br>

    <label for="image" class="form-label">Image</label>
    <input id="image" type="file" class="form-control" name="image" placeholder="image"><br>

    <label for="image" class="form-label">Select a Category</label>
        <select  name="kategori" placeholder="kategori" id="kategori" class="form-control"  value={{ $service->kategori }}>
            <option value="haji">Haji</option>
            <option value="umroh">Umroh</option>
            <option value="private_umroh">Private Umroh</option>
        </select>
        <label for="durasi" class="form-label">Durasi</label>
        <input id="durasi" type="text" class="form-control" name="durasi"  placeholder="Durasi"  value={{ $service->durasi }}><br>

        <label for="penerbangan" class="form-label">Penerbangan</label>
        <input id="penerbangan" type="text" class="form-control" name="penerbangan"  placeholder="Penerbangan" value={{ $service->penerbangan }}><br>

        <label for="maskapai" class="form-label">Maskapai</label>
        <input id="maskapai" type="text" class="form-control" name="maskapai"  placeholder="Maskapai" value={{ $service->maskapai }}><br>

        <label for="termasuk" class="form-label">Termasuk</label>
        <input id="termasuk" type="text" class="form-control" name="termasuk"  placeholder="termasuk" value={{ $service->termasuk }}><br>

        <label for="tidak_termasuk" class="form-label">Tidak Termasuk</label>
        <input id="tidak_termasuk" type="text" class="form-control" name="tidak_termasuk"  placeholder="Tidak Termasuk" value={{ $service->tidak_termasuk }}><br>
    </div>
    <button type="submit" class="btn btn-primary" name="update_service" id="update_service">Update Service</button><br>
    </form>
</div>
</div>
</section>
@endsection
