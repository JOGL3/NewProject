<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tesis;
use Illuminate\Support\Facades\Hash;
use DB;
use PDF;
class TesisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('gestiontesis')
        ->get();
                  
       return view('tesis.index',['tesis'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tesis.create');
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
                'nombre' => 'required|',
                'carrera' => 'required|',
                'siglas' => 'required|',
               
               
            ]);
      $data = $request->all();
      $Tesis = Tesis::create($data);
      return redirect()->route('tesis.index')->with('status', 'Documento agregado satisfactoriamente!');
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
    $data = DB::table('gestiontesis')
                
                ->get();
      $pdf = PDF::loadView('tesis.pdf',['tesis'=>$data])->setPaper('a4','portrait');
      return $pdf->stream('INFORMEDOCUMENTARIO.pdf');
    
}

public function descargarPDF()
{
    $data = DB::table('gestiontesis')
                ->where('gestiontesis.id',"=","2")
                ->get();
      $pdf = PDF::loadView('tesis.pdf',['tesis'=>$data])->setPaper('a4','portrait');
     
    
    return $pdf->download('INFORME .pdf');

    
}
    }
