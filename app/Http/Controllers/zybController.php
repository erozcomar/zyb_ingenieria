<?php

namespace App\Http\Controllers;
use App\query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class zybController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('zyb');
    }

    // public function admin()
    // {
    //     $preguntas = [
    //     'cuanto sale',
    //     'en que pais estan',
    //     'hacen trabajos de planeamiento?'
    //     ];

    //     // ! 1º manera de pasar el arreglo
    //     // return view('administrador', ['preguntas'=>$preguntas]);
    //     // ! 2º manera de pasar el arreglo
    //     return view('administrador', compact('preguntas'));
    // }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $notaNueva = new App\query;
        // $notaNueva->name = $request->name;
        // $notaNueva->email = $request->email;
        // $notaNueva->phone_number = $request->phone_number;
        // $notaNueva->message = $request->message;

        // $notaNueva->save();

        // return back()->with('mensaje', 'Consulta enviada');
        
        DB::table('queries')->insert(
            ['name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone,
            'message' => $request->message]
        );
        // return $request;
        return back()->with('mensaje', 'Consulta enviada');
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
}
