<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = Form::get();
        return view('form.index', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormRequest $request)
    {
        $valid = $request->validated();
        // dd($request->validated());
        
        // Explode tanggal
        $tgl = explode('-', $request->tanggal);
        $valid['tanggal'] = $tgl[2];
        $valid['bulan'] = $tgl[1];
        $valid['tahun'] = $tgl[0];
        Form::create($valid);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormRequest  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }

    public function bulan(Request $req)
    {
        $bulanAwal = explode('-',$req->awalBulan);
        $bulanAkhir = explode('-',$req->akhirBulan);
        $form = Form::whereBetween('bulan', [$bulanAwal[1], $bulanAkhir[1]])->latest()->get();
        return view('laporan', compact('form'));
    }

    public function bulan1(Request $req)
    {
        $bulanAwal = explode('-',$req->awalBulan);
        $bulanAkhir = explode('-',$req->akhirBulan);
        $form = Form::whereBetween('bulan1', [$bulanAwal[1], $bulanAkhir[1]])->get();
        // dd($all);
        return view('setuju', compact('form'));
    }

    public function bulan2(Request $req)
    {
        $bulanAwal = explode('-',$req->awalBulan);
        $bulanAkhir = explode('-',$req->akhirBulan);
        $form = Form::whereBetween('bulan2', [$bulanAwal[1], $bulanAkhir[1]])->where('status', 'ditolak')->get();
        return view('tolak', compact('form'));
    }
}
