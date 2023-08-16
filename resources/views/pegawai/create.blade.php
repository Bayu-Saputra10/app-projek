@extends('layouts.sidebar')
@section('content')
    
  <div class="col-lg-10 mx-auto">
    <div class="card shadow-sm">
      <div class="card-header d-flex justify-content-center align-items-center">
        <h5 class="card-title ">Tambah Pegawai</h5>
      </div>
      <div class="card-body">

        <form action="{{url('store')}}" method="post" class="d-grid">
          @csrf
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pegawai</label>
            <input type="name" class="form-control @error('nama') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIP</label>
            <input type="number" class="form-control @error('nip') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan NIP" name="nip" value="{{ old('nip') }}">
            @error('nip')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
              <select class="form-select @error('jabatan') is-invalid @enderror" aria-label="Default select example" name="jabatan">
                  <option selected disabled>Pilih Jabatan</option>

                  <option value="Ketua" {{ old('jabatan') == 'Ketua' ? 'selected' : '' }}>Ketua</option>

                  <option value="Wakil Ketua" {{ old('jabatan') == 'Wakil Ketua' ? 'selected' : '' }}>Wakil Ketua</option>

                  <option value="Hakim Tinggi" {{ old('jabatan') == 'Hakim Tinggi' ? 'selected' : '' }}>Hakim Tinggi</option>

                  <option value="Hakim Ad Hoc Tipikor" {{ old('jabatan') == 'Hakim Tinggi' ? 'selected' : '' }}>Hakim Ad Hoc Tipikor</option>

                  <option value="Panitera" {{ old('jabatan') == 'Panitera' ? 'selected' : '' }}>Panitera</option>

                  <option value="Panitera Muda Pidana" {{ old('jabatan') == 'Panitera Muda Pidana' ? 'selected' : '' }}>Panitera Muda Pidana</option>

                  <option value="Panitera Muda Perdata"{{ old('jabatan') == 'Panitera Muda Perdata' ? 'selected' : '' }}>Panitera Muda Perdata</option>

                  <option value="Panitera Muda Hukum" {{ old('jabatan') == 'Panitera Muda Hukum' ? 'selected' : '' }}>Panitera Muda Hukum</option>

                  <option value="Panitera Muda Tipikor" {{ old('jabatan') == 'Panitera Muda Tipikor' ? 'selected' : '' }}>Panitera Muda Tipikor</option>

                  <option value="Panitera Pengganti" {{ old('jabatan') == 'Panitera Pengganti' ? 'selected' : '' }}>Panitera Pengganti</option>

                  <option value="Sekretaris" {{ old('jabatan') == 'Sekretaris' ? 'selected' : '' }}>Sekretaris</option>

                  <option value="Kepala Bagian Perencanaan Dan Kepegawaian" {{ old('jabatan') == 'Kepala Bagian Perencanaan Dan Kepegawaian' ? 'selected' : '' }}>Kepala Bagian Perencanaan Dan Kepegawaian</option>

                  <option value="Kepala Bagian Umum Dan Keuangan" {{ old('jabatan') == 'Kepala Bagian Umum Dan Keuangan' ? 'selected' : '' }}>Kepala Bagian Umum Dan Keuangan</option>

                  <option value="Kepala Sub Bagian Kepegawaian Dan Teknologi Informasi" {{ old('jabatan') == 'Kepala Sub Bagian Kepegawaian Dan Teknologi Informasi' ? 'selected' : '' }}>Kepala Sub Bagian Kepegawaian Dan Teknologi Informasi</option>

                  <option value="Kepala Sub Bagian Rencana Program Dan Anggaran" {{ old('jabatan') == 'Kepala Sub Bagian Rencana Program Dan Anggaran' ? 'selected' : '' }}>Kepala Sub Bagian Rencana Program Dan Anggaran</option>

                  <option value="Kepala Sub Bagian Tata Usaha Dan Rumah Tangga" {{ old('jabatan') == 'Kepala Sub Bagian Tata Usaha Dan Rumah Tangga' ? 'selected' : '' }}>Kepala Sub Bagian Tata Usaha Dan Rumah Tangga</option>

                  <option value="Kepala Sub Bagian Keuangan Dan Pelaporan" {{ old('jabatan') == 'Kepala Sub Bagian Keuangan Dan Pelaporan' ? 'selected' : '' }}>Kepala Sub Bagian Keuangan Dan Pelaporan</option>

                  <option value="Staff Sub Bagian Kepegawaian Dan Teknologi Informasi" {{ old('jabatan') == 'Staff Sub Bagian Kepegawaian Dan Teknologi Informasi' ? 'selected' : '' }}>Staff Sub Bagian Kepegawaian Dan Teknologi Informasi</option>

                  <option value="Staff Sub Bagian Rencana Program Dan Anggaran" {{ old('jabatan') == 'Staff Sub Bagian Rencana Program Dan Anggaran' ? 'selected' : '' }}>Staff Sub Bagian Rencana Program Dan Anggaran</option>

                  <option value="Staff Sub Bagian Tata Usaha Dan Rumah Tangga" {{ old('jabatan') == 'Staff Sub Bagian Tata Usaha Dan Rumah Tangga' ? 'selected' : '' }}>Staff Sub Bagian Tata Usaha Dan Rumah Tangga</option>

                  <option value="Staff Sub Bagian Keuangan Dan Pelaporan" {{ old('jabatan') == 'Staff Sub Bagian Keuangan Dan Pelaporan' ? 'selected' : '' }}>Staff Sub Bagian Keuangan Dan Pelaporan</option>

                  <option value="Driver" {{ old('jabatan') == 'Driver' ? 'selected' : '' }}>Driver</option>

                  <option value="Security" {{ old('jabatan') == 'Security' ? 'selected' : '' }}>Security</option>

                  <option value="Pramubakti" {{ old('jabatan') == 'Pramubakti' ? 'selected' : '' }}>Pramubakti</option>

                  @error('jabatan')
                      <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
                </select>
              </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan Email" name="email" value="{{ old('email') }}">
                @error('email')
                  <small class="invalid-feedback">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan Password" name="password" value="{{ old('password') }}">
                @error('password')
                  <small class="invalid-feedback">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Role</label>
                  <select class="form-select @error('role') is-invalid @enderror" aria-label="Default select example" name="role">
                      <option selected disabled>Pilih Role</option>
                      <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                      <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                  @error('role')
                      <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
                </select>
              </div>
            
              <div class="mb-3 float-end">
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="button" class="btn btn-secondary" value="Close" onclick="history.back(-2)"/>
              </div>
        </form>

      </div>
    </div>
  </div>
    
@endsection