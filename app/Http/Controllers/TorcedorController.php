<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Torcedor;
use App\Http\Requests\TorcedorRequest;

class TorcedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $torcedores = Torcedor::all()->sortBy('nome');
     return view('torcedor.index', compact('torcedores'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('torcedor.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
     $torcedores = Torcedor::create($request->all());
     return redirect('torcedor');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
     $torcedores = Torcedor::find($id);
     return view('torcedor.show', ['data' => $torcedores]);

   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $torcedores = Torcedor::find($id);
     return view('torcedor.edit', ['data' => $torcedores]);
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
     $torcedores = Torcedor::find($id);
     $torcedores->fill($request->all());
     $torcedores->update();
     return redirect('torcedor');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
     Torcedor::destroy($id);
     return redirect('torcedor');
   }
}
