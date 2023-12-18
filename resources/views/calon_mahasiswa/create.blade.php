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
        <label for="province">Province</label>
        <select id="province" name="province">
          @foreach ($provinsi as $province)
            <option value="{{ $province['nama'] }}">{{ $province['nama'] }}</option>
          @endforeach
        </select>
        <label for="regency">Regency</label>
        <select id="regency" name="regency">
          @foreach ($regencies as $regency)
            <option value="{{ $regency->name }}">{{ $regency->name }}</option>
          @endforeach

        </select>
        <label for="district">District</label>
        <select id="district" name="district">
          @foreach ($districts as $district)
            <option value="{{ $district->name }}">{{ $district->name }}</option>
          @endforeach
        </select>
        <label for="phone_number">Phone Number</label>
        <input type="number" id="phone_number" name="phone_number" placeholder="Phone Number">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email">
        <label for="nationality_status">Nationality Status</label>
        <select id="nationality_status" name="nationality_status">
            <option value="WNI">WNI</option>
            <option value="WNI Keturanan">WNI Keturunan</option>
            <option value="WNA">WNA</option>
        </select>
        <label for="foreign_nationality">Foreign Nationality</label>
        <input type="text" id="foreign_nationality" name="foreign_nationality" placeholder="Foreign Nationality">
        <label for="date_of_birth">Date Of Birth</label>
        <input type="date" id="birth_data" name="birth_date">
        <label for="birth_place">Birth Place</label>
        <input type="text" id="birth_place" name="birth_place" placeholder="Birth Place">
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        </select>
        <label for="marital_status">Marital Status</label>
        <select id="marital_status" name="marital_status">
          <option value="single">Single</option>
          <option value="married">Married</option>
          <option value="other">Other</option>
          </select>
        <label for="religion">Religion</label>
    <select id="religion" name="religion">
        <option value="Islam">Islam</option>
        <option value="Catholic">Catholic</option>
        <option value="Christian">Christian</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Other">Other</option>
    </select>
        <label for="inputGroupFile01">Document</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="document" style="height: 40px;">
        <button type="submit" class="btn btn-warning" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
  @if (session('success'))
  <script>
      alert("{{ session('success') }}");
  </script>
@endif
@endsection