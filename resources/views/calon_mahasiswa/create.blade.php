@extends('layouts.layout')

@section('content')
<section id='form'>
    <div class="container">
      <h1 class="tambahh1">Selamat Datang Calon Mahasiswa</h1>
      <p class="tambahp">Silahkan isi data kalian di form bawah ini</p>
      <form action="{{ route('calon_mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name" placeholder="Full Name">
        <label for="id_card_address">Id Card Address</label>
        <input type="text" id="id_card_address" name="id_card_address" placeholder="Id Card Address">
        <label for="current_address">Current Address</label>
        <input type="text" id="current_address" name="current_address" placeholder="Current Address">
        <label for="district">District</label>
        <input type="text" id="district" name="district" placeholder="District">
        <label for="regency">Regency</label>
        <input type="text" id="regency" name="regency" placeholder="Regency">
        <label for="province">Province</label>
        <input type="text" id="province" name="province" placeholder="Province">
        <label for="phone_number">Phone Number</label>
        <input type="number" id="phone_number" name="phone_number" placeholder="Phone Number">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email">
        <label for="nationality_status">Nationality Status</label>
        <input type="text" id="nationality_status" name="nationality_status" placeholder="Nationality Status">
        <label for="foreign_nationality">Foreign Nationality</label>
        <input type="text" id="foreign_nationality" name="foreign_nationality" placeholder="Foreign Nationality">
        <label for="date_of_birth">Date Of Birth</label>
        <input type="date" id="birth_data" name="birth_date">
        <label for="birth_place">Birth Place</label>
        <input type="text" id="birth_place" name="birth_place" placeholder="Birth Place">
        <label for="gender">Gender</label>
        <input type="text" id="gender" name="gender" placeholder="Gender">
        <label for="marital_status">Marital Status</label>
        <input type="text" id="marital_status" name="marital_status" placeholder="Marital Status">
        <label for="religion">Religion</label>
        <input type="text" id="religion" name="religion" placeholder="Religion">
        <label for="inputGroupFile01">Document</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="document" style="height: 40px;">
        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
@endsection