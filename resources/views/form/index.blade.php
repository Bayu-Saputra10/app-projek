@extends('layouts.app')
@section('content')
    
    <div class="col-lg-6 mx-auto">
        <div class="card shadow-sm">
          <div class="card-header d-flex justify-content-center align-items-center">
            <h5 class="card-title">Formulir Izin Keluar Kantor</h5>
          </div>
            <div class="card-body">
                <livewire:pegawai-live/>
            </div>
        </div>
    </div>

@endsection