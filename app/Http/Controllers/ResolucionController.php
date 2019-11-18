<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resolucion;
use Illuminate\Support\Facades\Hash;
use DB;
use PDF;



class ResolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('resolucion')
        ->get();
                  
       return view('resolucion.index',['resolucion'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resolucion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
        {
            $this->validate($request,[
                'codigo' => 'required|',
                'estudiante' => 'required|',
                'presidente' => 'required|',
                'secretario' => 'required|',
                'vocal' => 'required|',
                'lugar' => 'required|',
                'hora' => 'required|',
                'fecha' => 'required|',
               
               
            ]);
      $data = $request->all();
      $Resolucion = Resolucion::create($data);
      return redirect()->route('resolucion.index')->with('status', 'Resolucion agregada satisfactoriamente!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function generatePDF()
{
    $data = DB::table('resolucion')
                
                ->get();
      $pdf = PDF::loadView('resolucion.pdf',['resolucion'=>$data])->setPaper('a4','portrait');
      return $pdf->stream('INFORMEDOCUMENTARIO.pdf');
    
}

public function descargarPDF()
{
    $data = DB::table('resolucion')
                
                ->get();
      $pdf = PDF::loadView('resolucion.pdf',['resolucion'=>$data])->setPaper('a4','portrait');
     
    
    return $pdf->download('INFORME .pdf');

    
}
    }
