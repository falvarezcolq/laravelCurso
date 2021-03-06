<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profession;
class ProfessionController extends Controller
{

    public function listar(){
        $professions = Profession::all();
        return response()->json(
            $profession->toArray()
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $professions = Profession::all();
       // return view('profession.index',[
       //     'professions' => $professions
       //]);

       return view('profession.index')
                ->with('professions', $professions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profession.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $profession = new Profession;
        // $profession->name = $request->name;
        // $profession->save();

        Profession::create([
            'name' => $request->name
        ]);

        return redirect('profession');        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      

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
        $profession = Profession::find($id);
        return view('profession.edit')
                    ->with('profession', $profession);
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
        $profession = Profession::find($id);
        $profession->name = $request->name;
        $profession->save();

        return redirect('profession');

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
        $profession = Profession::find($id);
        $profession->delete();
        
        return redirect('profession');

    }
}
