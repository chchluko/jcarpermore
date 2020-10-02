<?php

namespace App\Http\Controllers;

use App\Medic;
use Illuminate\Http\Request;


class MedicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Medic::create($request->all());
        return view('medic.gracias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medic  $medic
     * @return \Illuminate\Http\Response
     */
    public function show(Medic $medic, $id)
    {
        $medic = Medic::find($id);
        $date = date('Y-m-d');
//return view('pdf.diploma',compact('date', 'medic'));

        $view =  \View::make('pdf.diploma', compact('date', 'medic'))->render();
        // $pdf = PDF::loadView('pdf.invoice', $data);

        $pdf = \App::make('dompdf.wrapper');

        // $pdf->loadHTML('<h1>Test</h1>');
        $pdf->loadHTML($view);

        $pdf->setPaper('letter', 'landscape');
         return $pdf->download('Diploma.pdf');
       // return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medic  $medic
     * @return \Illuminate\Http\Response
     */
    public function edit(Medic $medic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medic  $medic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medic $medic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medic  $medic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medic $medic)
    {
        //
    }
}
