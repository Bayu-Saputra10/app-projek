<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use App\Models\Form;
use App\Http\Requests\StoreOperatorRequest;
use App\Http\Requests\UpdateOperatorRequest;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form::where('status', '=', 'Pengajuan')->latest()->get();
        return view('operator.index', compact('form'));
        // dd($form);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOperatorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOperatorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function show(Operator $operator)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function edit(Operator $operator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOperatorRequest  $request
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOperatorRequest $request, Operator $operator)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operator $operator)
    {
        //
    }

    // Update Status
    public function statusDisetujui(Request $request)
    {
        Form::where('id', $request->id)->update(['status' => $request->status]);
        return redirect()->back();
    }

    public function statusDitolak(Request $request)
    {
        Form::where('id', $request->id)->update(['status' => $request->status]);
        return redirect()->back();
    }
    
    // Welcome
    public function welcome()
    {
        $form = Form::latest()->get();
        return view('welcome', compact('form'));
    }

    // Laporan
    public function laporan()
    {
        $form = Form::latest()->get();
        return view('laporan', compact('form'));
    }

    // Setuju
    public function setuju()
    {
        if (request('awalBulan') && request('akhirBulan')) {
                $bulanAwal = explode('-', request('awalBulan'));
                $bulanAkhir = explode('-', request('akhirBulan'));
                $bulan = [$bulanAwal[1], $bulanAkhir[1]];
            } else {
                $bulan = [01,12];
            }
        // dd($bulan);
        $form = Form::where('status','disetujui')->bulan($bulan)->get();
        // dd($form);
        return view('setuju', compact('form'));
    }

    // Tolak
    public function tolak()
    {
        if (request('awalBulan') && request('akhirBulan')) {
            $bulanAwal = explode('-', request('awalBulan'));
            $bulanAkhir = explode('-', request('akhirBulan'));
            $bulan = [$bulanAwal[1], $bulanAkhir[1]];
        } else {
            $bulan = [01,12];
        }
    // dd($bulan);
        $form = Form::where('status','ditolak')->bulan($bulan)->get();
        return view('tolak', compact('form'));
    }
}