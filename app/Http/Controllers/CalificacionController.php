<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $alumno = Alumno::find($id);
        return view('calificaciones.index', compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('calificaciones.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calificacion = Calificacion::where([['materia', $request->materia],['alumno_id', $request->alumno_id]])->first();
        if ($calificacion === null) {
            $calificacion = new Calificacion;
            $calificacion->alumno_id = $request->alumno_id;
            $calificacion->materia = $request->materia;
            $calificacion->calificacion = $request->calificacion;
            $calificacion->save();

            return redirect('calificaciones/'.$request->alumno_id)->with('message', 'Se ha capturado una nueva calificacion');
        } else {
            $calificacion->alumno_id = $request->alumno_id;
            $calificacion->materia = $request->materia;
            $calificacion->calificacion = $request->calificacion;
            $calificacion->save();

            return redirect('calificaciones/'.$request->alumno_id)->with('message', 'Se ha actualizado la calificacion');
        }
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
        $calificacion = Calificacion::find($id);
        $calificacion->delete();
        
        return redirect()->back()->with('message', 'Se eliminó la calificación.');
    }
    
}
