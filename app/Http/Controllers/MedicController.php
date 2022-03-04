<?php

namespace App\Http\Controllers;

use App\Lab;
use App\User;
use App\Medic;
use Illuminate\Http\Request;


class MedicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['edit', 'index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Medic::latest()->paginate(5);
        if (auth()->user()->username == 4279) {
            return view('medic.index', compact('products'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } else {
            return view('home');
        }
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
     return $pdf->download('Constancia - Webinar - Marcadores de Inmunohistoquimica.pdf');
        //    return $pdf->stream();
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
        if (auth()->user()->username == 4279) {
            return view('medic.edit', compact('medic'));
        } else {
            return view('home');
        }
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
            ->with('success', 'Actualziación completa');
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
        $Medicos = Lab::where('iduser', '!=', NULL)->where('sync', 0)/*->offset(0)->limit(10000)*/->get();
              // dd($Medicos);
        foreach ($Medicos as $item) {

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

    public function aviso()
    {
        return view('partials.privacidad');
    }
}
