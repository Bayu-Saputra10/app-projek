@extends('layouts.app')
@section('content')
    
    <div class="col-lg-10 mx-auto">
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title">Daftar Arsip izin Keluar Kantor</h5>

                {{-- BUTTON FORM --}}
                <a href="form" class="btn btn-primary float-end">Ajukan izin</a>

            </div>
            <div class="card-body">
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
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach ($form as $key => $data)
                      <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $data->nama}}</td>
                        <td>{{ $data->nip}}</td>
                        <td>{{ $data->tanggal}}-{{$data->bulan}}-{{$data->tahun}}</td>
                        <td>{{ $data->waktuMulai}} s.d {{$data->waktuAkhir}}</td>
                        <td>{{ $data->keperluan}}</td>
                        <td>{{ $data->created_at}}</td>
                        <td>{{$data->status}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
            </div>
        </div>
    </div>    

@endsection
