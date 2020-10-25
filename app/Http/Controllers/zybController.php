<?php

namespace App\Http\Controllers;
use App\query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Mail\Consultas;


// !importante a tener en cuenta cuando actualizamos un dato en la tabla users columna last_seen lo podemos hacer de dos maneras:

// !-1
    //    $user->last_seen = Carbon::now();
    //         $user->save();

// !-2           
        //     $mytime = Carbon::now();

        //    DB::table('users')
        //         ->where('id', $user->id)
        //         ->update(['last_seen' => $mytime]);

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
    
      public function form(Request $request)
     {
        DB::table('queries')->insert(
        ['name' => $request->name,
        'email' => $request->email,
        'phone_number' => $request->phone,
        'message' => $request->query]
        );

     return view('zyb');
}

      public function consultarPreguntas(Request $request)
     {
        // $preguntas= DB::table('queries');

        return view('administrador', compact('preguntas'));

     return view('zyb');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
