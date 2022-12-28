@extends('layouts.app')

@section('content')
<!-- ==================== Page-Title (Start) ==================== -->
<div class="page-title">

    <div class="title">
      <h2>Data Jamaah</h2>
    </div>

    <div class="link">
      <i class="fas fa-angle-double-right"></i>
      <span class="page">Lengkapi Data Profile</span>
    </div>

</div>

<!-- ==================== Page-Title (END) ==================== -->

<section class="register">
    {{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    @endif --}}

    <form class="form" action="{{route('Tambah_Jamaah')}}" method="POST" enctype="multipart/form-data">
        <ul id="fieldList"> 
          @csrf
          <h3>Data Jamaah</h3>
          
          <input id="full_name" type="text" class="box" name="full_name" autofocus placeholder="Nama Lengkap">
          <input id="nohp" type="number" class="box" name="nohp"  placeholder="Nomor handphone">
          {{-- <button type="submit" class="btn" name="simpan" id="simpan">Simpan</button> --}}
        </ul> 
        <button id="addMore" class="btn" >Add more fields</button>
     
      <button type="submit" class="btn" name="simpan" id="simpan">Simpan</button>
      <br>
    <br>
</form> 
       
       
  
  </section>
 
@endsection

<script>
    $(function() {
  $("#addMore").click(function(e) {
    e.preventDefault();
    $("#fieldList").append("<li>&nbsp;</li>");
    $("#fieldList").append("<li><input type='text' name='full_name' placeholder='Name' /></li>");
    $("#fieldList").append("<li><input type='number' name='nohp' placeholder='Phone' /></li>");
  });
});
</script>
