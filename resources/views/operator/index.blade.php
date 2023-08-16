@extends('layouts.sidebar')
@section('content')

<div class="col-lg-10 mx-auto">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-center align-items-center">
            <h5 class="card-title">List Izin Keluar Kantor</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Tanggal</th>
                    <th>Pukul</th>
                    <th>Keperluan</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody> 
                  @forelse ($form as $key => $data)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $data->nama}}</td>
                    <td>{{ $data->nip}}</td>
                    <td>{{ $data->tanggal}}-{{ $data->bulan }}-{{ $data->tahun }}</td>
                    <td>{{ $data->waktuMulai}} sd {{$data->waktuAkhir}}</td>
                    <td>{{ $data->keperluan}}</td>

                    {{-- MODAL --}}
                    <td class="d-flex justify-content-center align-items-center">
                      <button type="button" class="btn btn-info me-2" data-bs-toggle="modal" data-bs-target="#exampleModal{{$key}}"><i class="bi bi-search"></i></button>
                      <div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="{{url('operator')}}" method="post">
                                @csrf
                                <div class="mb-2">    
                                  <p>Nama : {{$data->nama}}</p>
                                  <p>NIP : {{$data->nip}}</p>
                                  <p>Nama Pejabat Pemberi Izin : {{$data->pejabat}}</p>
                                  <p>Jabatan Pejabat Pemberi Izin : {{$data->jabatan}}</p>
                                  <p>Tanggal : {{$data->tanggal}}-{{ $data->bulan }}-{{ $data->tahun }}</p>
                                  <p>Pukul : {{$data->waktuMulai}} sd {{ $data->waktuAkhir}}</p>
                                  <p>Keperluan : {{ $data->keperluan}}</p>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer d-flex justify-content-center align-items-center">

                              {{-- BUTTON SETUJU --}}
                              <form action="/setuju" method="post">
                                @csrf
                                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="status" value="disetujui">
                                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id" value="{{$data->id}}">                                
                              <button type="submit" class="btn btn-success" data-bs-dismiss="modal">
                                <i class="bi bi-check-lg"></i> Terima
                              </button>
                            </form>

                            {{-- BUTTON TOLAK --}}
                            <form action="/tolak" method="post">
                              @csrf
                              <input type="hidden" class="form-control" id="exampleFormControlInput1" name="status" value="ditolak">
                              <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id" value="{{$data->id}}">
                              <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">
                                <i class="bi bi-x-lg"></i> Tolak
                              </button>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    @empty
                      <td colspan="7" class="text-center"><i class="bi bi-search"></i> Tidak Ada Data</td>
                    @endforelse
                </tbody>
              </table>
            </div>
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
  //x        
  // Update the modal's content.
  const modalTitle = exampleModal.querySelector('.modal-title')
  const modalBodyInput = exampleModal.querySelector('.modal-body input')
})
</script>

@endsection