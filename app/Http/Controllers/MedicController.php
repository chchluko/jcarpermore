<?php

namespace App\Http\Controllers;

use App\Medic;
use App\User;
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
        $products = Medic::latest()->paginate(5);

        return view('medic.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        //where('iduser',$id)->get();
       // dd($medic);
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
    public function edit(Medic $medic, $id)
    {
        $medic = Medic::find($id);
        return view('medic.edit',compact('medic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medic  $medic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medic $medic, $id)
    {
        $medic = Medic::find($id);
        $medic->update($request->all());
        return redirect()->route('medicos.index')
                        ->with('success','Actualziación completa');
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

    public function sync()
    {
        $Medicos = Medic::where('iduser','!=',NULL )->where('sync',0)->get();
 //       dd($Medicos);
        foreach($Medicos as $item) {

        $user = new User();
        $user->name = $item->nombre;
        $user->username = $item->iduser;
        $user->email = $item->email;
        $user->password = bcrypt($item->iduser);
        $user->save();

        $item->sync = 1;
        $item->save();
        }
      ///  return redirect()->route('usuarios.index');
    }
}
