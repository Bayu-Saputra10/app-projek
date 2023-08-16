@extends('layouts.sidebar')
@section('content')
    
  <div class="col-lg-10 mx-auto">
    <div class="card shadow-sm">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title">Daftar Pegawai</h5>

        <a href="{{url('create')}}" class="btn btn-primary end">Tambah Pegawai</a>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover " id="example">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th class="noPrint">Edit</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($pegawai as $key => $list)
              <tr class="{{$list->status == 'Nonaktif' ? 'text-danger table-danger' : ''}} ">

                <td>{{$loop->iteration}}</td>
                <td>{{$list->nama}}</td>
                <td>{{$list->nip}}</td>
                <td>{{$list->jabatan}}</td>
                <td>{{$list->status }}</td>

                {{-- Modal --}}
                <td>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$key}}">
                      <i class="bi bi-pencil-square"></i>
                  </button>
                  <div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pegawai</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="{{url('update', $list->nip)}}" method="post">
                          @csrf
                          @method('put')
                        <div class="modal-body">
                            <div class="mb-3">
                              <label class="form-label">Nama</label>
                              <input type="text" class="form-control" value="{{$list->nama}}" name="nama">
                            </div>
                            <div class="mb-3">
                              <label class="col-form-label">NIP</label>
                              <input type="nip" class="form-control" value="{{$list->nip}}" name="nip">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                              <select class="form-select" aria-label="Default select example" name="jabatan">

                                <option value="Ketua" 
                                @if ($list->jabatan == "Ketua")
                                    selected
                                @endif>Ketua</option>

                                <option value="Wakil Ketua" 
                                @if ($list->jabatan == " Wakil Ketua")
                                    selected
                                @endif>Wakil Ketua</option>

                                <option value="Hakim Tinggi"
                                @if ($list->jabatan == "Hakim Tinggi")
                                    selected
                                @endif>Hakim Tinggi</option>

                                <option value="Hakim Ad Hoc Tipikor"
                                @if ($list->jabatan == "Hakim Ad Hoc Tipikor")
                                    selected
                                @endif>Hakim Ad Hoc Tipikor</option>

                                <option value="Panitera"
                                @if ($list->jabatan == "Panitera")
                                    selected
                                @endif>Panitera</option>

                                <option value="Panitera Muda Pidana"
                                @if ($list->jabatan == "Panitera Muda Pidana")
                                    selected
                                @endif>Panitera Muda Pidana</option>

                                <option value="Panitera Muda Perdata"
                                @if ($list->jabatan == "Panitera Muda Perdata")
                                    selected
                                @endif>Panitera Muda Perdata</option>

                                <option value="Panitera Muda Hukum"
                                @if ($list->jabatan == "Panitera Muda Hukum")
                                    selected
                                @endif>Panitera Muda Hukum</option>
                                
                                <option value="Panitera Muda Tipikor"
                                @if ($list->jabatan == "Panitera Muda Tipikor")
                                    selected
                                @endif>Panitera Muda Tipikor</option>

                                <option value="Panitera Pengganti"
                                @if ($list->jabatan == "Panitera Pengganti")
                                    selected
                                @endif>Panitera Pengganti</option>

                                <option value="Sekretaris"
                                @if ($list->jabatan == "Sekretaris")
                                    selected
                                @endif>Sekretaris</option>

                                <option value="Kepala Bagian Perencanaan Dan Kepegawaian"
                                @if ($list->jabatan == "Kepala Bagian Perencanaan Dan Kepegawaian")
                                    selected
                                @endif>Kepala Bagian Perencanaan Dan Kepegawaian</option>

                                <option value="Kepala Bagian Umum Dan Keuangan"
                                @if ($list->jabatan == "Kepala Bagian Umum Dan Keuangan")
                                    selected
                                @endif>Kepala Bagian Umum Dan Keuangan</option>

                                <option value="Kepala Sub Bagian Kepegawaian Dan Teknologi Informasi"
                                @if ($list->jabatan == "Kepala Sub Bagian Kepegawaian Dan Teknologi Informasi")
                                    selected
                                @endif>Kepala Sub Bagian Kepegawaian Dan Teknologi Informasi</option>

                                <option value="Kepala Sub Bagian Rencana Program Dan Anggaran"
                                @if ($list->jabatan == "Kepala Sub Bagian Rencana Program Dan Anggaran")
                                    selected
                                @endif>Kepala Sub Bagian Rencana Program Dan Anggaran</option>

                                <option value="Kepala Sub Bagian Tata Usaha Dan Rumah Tangga"
                                @if ($list->jabatan == "Kepala Bagian Tata Usaha Dan Rumah Tangga")
                                    selected
                                @endif>Kepala Sub Bagian Tata Usaha Dan Rumah Tangga</option>

                                <option value="Kepala Sub Bagian Keuangan Dan Pelaporan"
                                @if ($list->jabatan == "Kepala Sub Bagian Keuangan Dan Pelaporan")
                                    selected
                                @endif>Kepala Sub Bagian Keuangan Dan Pelaporan</option>

                                <option value="Staff Sub Bagian Kepegawaian Dan Teknologi Informasi"
                                @if ($list->jabatan == "Staff Sub Bagian Kepegawaian Dan Teknologi Informasi")
                                    selected
                                @endif>Staff Sub Bagian Kepegawaian Dan Teknologi Informasi</option>

                                <option value="Staff Sub Bagian Rencana Program Dan Anggaran"
                                @if ($list->jabatan == "Staff Sub Bagian Rencana Program Dan Anggaran")
                                    selected
                                @endif>Staff Sub Bagian Rencana Program Dan Anggaran</option>
                                
                                <option value="Staff Sub Bagian Tata Usaha Dan Rumah Tangga"
                                @if ($list->jabatan == "Staff Sub Bagian Tata Usaha Dan Rumah Tangga")
                                    selected
                                @endif>Staff Sub Bagian Tata Usaha Dan Rumah Tangga</option>

                                <option value="Staff Sub Bagian Keuangan Dan Pelaporan"
                                @if ($list->jabatan == "Staff Sub Bagian Keuangan Dan Pelaporan")
                                    selected
                                @endif>Staff Sub Bagian Keuangan Dan Pelaporan</option>

                                <option value="Driver"
                                @if ($list->jabatan == "Driver")
                                    selected
                                @endif>Driver</option>

                                <option value="Security"
                                @if ($list->jabatan == "Security")
                                    selected
                                @endif>Security</option>

                                <option value="Pramubakti"
                                @if ($list->jabatan == "Pramubakti")
                                    selected
                                @endif>Pramubakti</option>

                              </select>
                            </div>
                            <div class="mb-3">
                              <label class="col-form-label">Status</label>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="Aktif"
                                @if ($list->status == "Aktif")
                                    checked
                                @endif>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Aktif
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="Nonaktif"
                                @if ($list->status == "Nonaktif")
                                    checked
                                @endif>
                                <label class="form-check-label" for="flexRadioDefault2">
                                  Nonaktif
                                </label>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<script>
  // Modal 
  const exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', event => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-bs-* attributes
  const recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  const modalTitle = exampleModal.querySelector('.modal-title')
  const modalBodyInput = exampleModal.querySelector('.modal-body input')

  // modalTitle.textContent = `New message to ${$list->nama}`
  // modalBodyInput.value = recipient
})
</script>
    
@endsection