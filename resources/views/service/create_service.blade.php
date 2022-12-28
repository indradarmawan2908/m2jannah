@extends('admin.beranda')

@section('Admincontent')
<section class="register">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    @endif
<div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Service</h3></div>
    <div class="card-body">
    <form class="form" action="{{route('store_service')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <label for="name" class="form-label">Service Name</label>
    <input id="name" type="text" class="form-control" name="name" placeholder="Service Name"><br>

    <label for="short_description" class="form-label">Short Description</label>
    <input id="short_description" type="text" class="form-control" name="short_description"  placeholder="Short Description"><br>

    <label for="description" class="form-label">Description</label>
    <textarea id="description" type="text" class="form-control" name="description"  placeholder="Service Description"></textarea><br>

    <label for="price" class="form-label">Price</label>
    <input id="price" type="number" class="form-control" name="price" placeholder="Service Price"><br>

    <label for="stock" class="form-label">Number of Seat</label>
    <input id="stock" type="number" class="form-control" name="stock" placeholder="jumlah seat"><br>

    <label for="image" class="form-label">Image</label>
    <input id="image" type="file" class="form-control" name="image" placeholder="image"><br>

    <label for="image" class="form-label">Select a Category</label>
        <select  name="kategori" placeholder="kategori" id="kategori" class="form-control">
            <option value="umroh">Umroh</option>
            <option value="haji">Haji</option>
            <option value="private_umroh">Private Umroh</option>
        </select>
        <label for="durasi" class="form-label">Durasi</label>
        <input id="durasi" type="text" class="form-control" name="durasi"  placeholder="Durasi"><br>

        <label for="penerbangan" class="form-label">Penerbangan</label>
        <input id="penerbangan" type="text" class="form-control" name="penerbangan"  placeholder="Penerbangan"><br>

        <label for="maskapai" class="form-label">Maskapai</label>
        <input id="maskapai" type="text" class="form-control" name="maskapai"  placeholder="Maskapai"><br>

        <label for="termasuk" class="form-label">Termasuk</label>
        <input id="termasuk" type="text" class="form-control" name="termasuk"  placeholder="termasuk"><br>

        <label for="tidak_termasuk" class="form-label">Tidak Termasuk</label>
        <input id="tidak_termasuk" type="text" class="form-control" name="tidak_termasuk"  placeholder="Tidak Termasuk"><br>
</div>
    <button type="submit" class="btn btn-primary" name="create_service" id="create_service">Create Service</button><br>
</form>
</div>
</div>
</section>
@endsection
