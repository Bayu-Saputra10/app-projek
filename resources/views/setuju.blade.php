@extends('layouts.sidebar')
@section('content')
    
<div class="col-lg-10 mx-auto">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-center align-items-center">
            <h5 class="card-title">List Disetujui izin Keluar Kantor</h5>
        </div>
        <div class="card-body">

          <form action="{{ url('setuju') }}" method="get" class="d-flex justify-content-center align-items-center mb-3">
            @csrf
            <div class="row g-2">
              <h5 class="text-center mb-0">Sortir Periode</h5>
              <div class="col-md">
                <div class="form-floating">
                  <input type="month" class="form-control" id="floatingInputGrid" name="awalBulan">
                  <label for="floatingInputGrid">Periode Awal</label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-floating">
                  <input type="month" class="form-control" id="floatingInputGrid" name="akhirBulan">
                  <label for="floatingInputGrid">Periode Akhir</label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Tanggal</th>
                    <th>Pukul</th>
                    <th>Keperluan</th>
                    <th>Jam Submit</th>
                    <th>Status</th>
                    <th>Pemberi Izin</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($form as $key => $data)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $data->nama}}</td>
                    <td>{{ $data->nip}}</td>
                    <td>{{ $data->tanggal}}-{{$data->bulan}}-{{$data->tahun}}</td>
                    <td>{{ $data->waktuMulai}} sd {{ $data->waktuAkhir}}</td>
                    <td>{{ $data->keperluan}}</td>
                    <td>{{ $data->created_at}}</td>
                    <td>{{$data->status}}</td>

                    {{-- MODAL --}}
                    <td>
                      <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal{{$key}}"><i class="bi bi-search"></i></button>
                      <div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-2">
                                  <p>Nama Pejabat Pemberi Izin : {{$data->pejabat}}</p>
                                  <p>Jabatan Pejabat Pemberi Izin : {{$data->jabatan}}</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                      </div>
                    </td>
                    @endforeach
                </tbody>
              </table>
          </div>
        </div>
    </div>
</div>

<script>
  // MODAL.SCRIPT
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
})
</script>

@endsection