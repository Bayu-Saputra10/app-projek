<div>

    <form action="{{ url('form') }}" method="post">
        @csrf
        
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Pengaju Izin</label>
          <input wire:model="nama" wire:mouseleave="detailPegawai" type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
          @error('nama')
              <small class="invalid-feedback">{{ $message }}</small>
          @enderror  
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">NIP Pengaju Izin</label>
          <input type="number" class="form-control @error('nip') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan NIP" name="nip" value="{{ $detailPegawai->nip ?? null }}" value="{{ old('nip') }}" readonly>
          @error('nip')
              <small class="invalid-feedback">{{ $message }}</small>
          @enderror
        </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Pejabat Pemberi Izin</label>
              <select class="form-select @error('pejabat') is-invalid @enderror" aria-label="Default select example" name="pejabat">
                <option selected disabled>Pilih Nama Pejabat</option>

                <option value="Dr. MOH EKA KARTIKA EM, S.H., M.Hum." {{ old('pejabat') == 'Dr. MOH EKA KARTIKA EM, S.H., M.Hum.' ? 'selected' : '' }}>Dr. MOH EKA KARTIKA EM, S.H., M.Hum.</option>

                <option value="SUMARLINA, S.H., M.H." {{ old('pejabat') == 'SUMARLINA, S.H., M.H.' ? 'selected' : '' }}>SUMARLINA, S.H., M.H.</option>

                <option value="Hendri Kustian, S.H., M.H." {{ old('pejabat') == 'Hendri Kustian, S.H., M.H.' ? 'selected' : '' }}>Hendri Kustian, S.H., M.H.</option>

                <option value="Jumardi, S.H., M.H." {{ old('pejabat') == 'Dr. MOH EKA KARTIKA EM, S.H., M.Hum.' ? 'selected' : '' }}>Jumardi, S.H., M.H.</option>
                <option value="Dra Rosanah" {{ old('pejabat') == 'Dra Rosanah' ? 'selected' : '' }}>Dra Rosanah</option>

                <option value="Asbi, S.H" {{ old('pejabat') == 'Asbi, S.H' ? 'selected' : '' }}>Asbi, S.H</option>

                <option value="VIVI YULIANITA, S.E., S.H., M.M" {{ old('pejabat') == 'VIVI YULIANITA, S.E., S.H., M.M' ? 'selected' : '' }}>VIVI YULIANITA, S.E., S.H., M.M</option>

                <option value="ISHAK RIZAL, S.T." {{ old('pejabat') == 'ISHAK RIZAL, S.T.' ? 'selected' : '' }}>ISHAK RIZAL, S.T.</option>

                <option value="NAIN MEITULU, S.H." {{ old('pejabat') == 'NAIN MEITULU, S.H.' ? 'selected' : '' }}>NAIN MEITULU, S.H.</option>

                <option value="Junaidi, S.Psi., M.Si." {{ old('pejabat') == 'Junaidi, S.Psi., M.Si.' ? 'selected' : '' }}>Junaidi, S.Psi., M.Si.</option>

                <option value="EKA SRI REJEKI, S.H., M.H." {{ old('pejabat') == 'EKA SRI REJEKI, S.H., M.H.' ? 'selected' : '' }}>EKA SRI REJEKI, S.H., M.H.</option>

                <option value="MADYA PRASETYA MULYA, S.H." {{ old('pejabat') == 'MADYA PRASETYA MULYA, S.H.' ? 'selected' : '' }}>MADYA PRASETYA MULYA, S.H.</option>

                <option value="YUNI ARTIKA SARI, S.E. Ak., S.H., M.H." {{ old('pejabat') == 'YUNI ARTIKA SARI, S.E. Ak., S.H., M.H.' ? 'selected' : '' }}
                >YUNI ARTIKA SARI, S.E. Ak., S.H., M.H.</option>

                @error('pejabat')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
              </select>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jabatan Pejabat Pemberi Izin</label>
              <select class="form-select @error('jabatan') is-invalid @enderror" aria-label="Default select example" name="jabatan">
                <option selected disabled>Pilih Jabatan Pejabat</option>
                
                <option value="Ketua" {{ old('jabatan') == 'Ketua' ? 'selected' : '' }}>Ketua</option>

                <option value="Panitera" {{ old('jabatan') == 'Panitera' ? 'selected' : '' }}>Panitera</option>

                <option value="Panitera Muda Pidana" {{ old('jabatan') == 'Panitera Muda Pidana' ? 'selected' : '' }}>Panitera Muda Pidana</option>

                <option value="Panitera Muda Perdata" {{ old('jabatan') == 'Panitera Muda Perdata' ? 'selected' : '' }}>Panitera Muda Perdata</option>

                <option value="Panitera Muda Hukum" {{ old('jabatan') == 'Panitera Muda Hukum' ? 'selected' : '' }}>Panitera Muda Hukum</option>

                <option value="Panitera Muda Tipikor" {{ old('jabatan') == 'Panitera Muda Tipikor' ? 'selected' : '' }}>Panitera Muda Tipikor</option>

                <option value="Sekretaris" {{ old('jabatan') == 'Sekretaris' ? 'selected' : '' }}>Sekretaris</option>

                <option value="Kepala Bagian Perencanaan Dan Kepegawaian" {{ old('jabatan') == 'Kepala Bagian Perencanaan Dan Kepegawaian' ? 'selected' : '' }}>Kepala Bagian Perencanaan Dan Kepegawaian</option>

                <option value="Kepala Bagian Umum Dan Keuangan" {{ old('jabatan') == 'Kepala Bagian Umum Dan Keuangan' ? 'selected' : '' }}>Kepala Bagian Umum Dan Keuangan</option>

                <option value="Kepala Sub Bagian Kepegawaian dan Teknologi Informasi" {{ old('jabatan') == 'Kepala Sub Bagian Kepegawaian dan Teknologi Informasi' ? 'selected' : '' }}>Kepala Sub Bagian Kepegawaian dan Teknologi Informasi</option>

                <option value="Kepala Sub Bagian Rencana Program dan Anggaran" {{ old('jabatan') == 'Kepala Sub Bagian Rencana Program dan Anggaran' ? 'selected' : '' }}>Kepala Sub Bagian Rencana Program dan Anggaran</option>

                <option value="Kepala Sub Bagian Tata Usaha dan Rumah Tangga" {{ old('jabatan') == 'Kepala Sub Bagian Tata Usaha dan Rumah Tangga' ? 'selected' : '' }}>Kepala Sub Bagian Tata Usaha dan Rumah Tangga</option>

                <option value="Kepala Sub Bagian Keuangan dan Pelaporan" {{ old('jabatan') == 'Kepala Sub Bagian Keuangan dan Pelaporan' ? 'selected' : '' }}>Kepala Sub Bagian Keuangan dan Pelaporan</option>

                  @error('jabatan')
                      <small class="invalid-feedback">{{ $message }}</small>
                  @enderror
                </select>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
              <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="exampleFormControlInput1" name="tanggal" style="width: 25%" value="{{ old('tanggal') }}">
              @error('tanggal')
                  <small class="invalid-feedback">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Waktu Mulai Izin</label>
              <input type="time" class="form-control @error('waktuMulai') is-invalid @enderror" id="exampleFormControlInput1" name="waktuMulai" style="width: 25%;" value="{{ old('waktuMulai') }}">
              @error('waktuMulai')
                  <small class="invalid-feedback">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Waktu Akhir Izin</label>
              <input type="time" class="form-control @error('waktuAkhir') is-invalid @enderror" id="exampleFormControlInput1" name="waktuAkhir" style="width: 25%;" value="{{ old('waktuAkhir') }}">
              @error('waktuAkhir')
                  <small class="invalid-feedback">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Keperluan</label>
              <input type="name" class="form-control @error('keperluan') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan Keperluan" name="keperluan" value="{{ old('keperluan') }}">
              @error('keperluan')
                  <small class="invalid-feedback">{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary float-end">Submit</button>
            </div>
      </form>
      

    </div>
