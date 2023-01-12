<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMotif;
use App\Models\Motif;

class MotifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gestionMotifs.listMotifs',
        [ 'motifs' => Motif::all()
    ]);
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
    public function store(StoreMotif $request)
    {
        $data = $request->only(['nom','description']);
        $motif = Motif::create($data);
        return redirect()->back()->with('message', 'Le motif à été ajouté avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motif = Motif::findOrFail($id);
        return view('gestionMotifs.showMotif', [
          'motif' =>  $motif
          ]);
    }

    function search(Request $req){
        
        if($req->input('nom') != "" ){
            return view('gestionMotifs.listMotifs',
            [ 'motifs' => Motif::where('id',$req->input('id'))
        ]); }

        else{
            return view('gestionMotifs.listMotifs',
            [ 'motifs' => Motif::all()
        ]);
                              
 }}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motif = Motif::findOrFail($id);
        return view('gestionMotifs.editMotif', [
          'motif' =>  $motif
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMotif $request, $id)
    {
        $motif = Motif::findOrFail($id);
        $motif->nom = $request->input('nom');
        $motif->description = $request->input('description');
        $motif->save();

        return redirect('listMotifs')->with('message', 'Le motif à été Modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motif = Motif::find($id)->delete();
        if ($motif){
          $data=[
          'status'=>'1',
          'msg'=>'success'
        ];
        return redirect()->back()->with('message', 'le motif à été supprimé avec succés');
       }
    }
}
