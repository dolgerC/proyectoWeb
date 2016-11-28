<?php

namespace App\Http\Controllers;
use App\Bien;

use Illuminate\Http\Request;

class bienesController extends Controller
{
    private $path ='bienes';
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bien::all();
        return view($this->path.'.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $bien = new Bien();
            $bien->imagen    = $request->file('imagen')->getClientOriginalName();
            $bien->precio = $request->precio;
            $bien->descripcion  = $request->descripcion;
            $bien->ubicacion  = $request->ubicacion;
            
            $bien->save();

            return redirect()->route('bienes.index');
        }
        catch(Exception $e){

            return "Fatal error - ".$e->getMessage();
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
        
        $bien = Bien::findOrFail($id);
        return view($this->path.'.edit', compact('bien'));
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
        $bien = new Bien();
        $bien->imagen    = $request->imagen;
        $bien->precio = $request->precio;
        $bien->descripcion  = $request->descripcion;
        $bien->ubicacion  = $request->ubicacion;
        $bien->save();

        return redirect()->route('bienes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $bien = Bien::findOrFail($id);
            $bien->delete();
            return redirect()->route('bienes.index');
        } catch (Exception $e){

            return "Fatal error - ".$e->getMessage();
        }
    }
}
