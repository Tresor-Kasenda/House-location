<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //liste tous les temoignages

        return Temoignage::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  affiche le formulaire de création d'un temoignage
        return view('temoignages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTemoignageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // créé un nouveau temoignage

        $validated_data = $request->validate([
            'note' => 'required|max:255',
        ]);
        $temoignage = new Temoignage();
        $temoignage->note = $validated_data['note'];
        $temoignage->user_id = Auth::user()->id;
        $temoignage->save();
        return $temoignage;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function show($id_temoignage)
    {
        // retourne un temoignage

        return Temoignage::findOrFail($id_temoignage);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function edit(Temoignage $temoignage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemoignageRequest  $request
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)

    {
        //met à jour un temoignage
        $validated_data = $request->validate([
            'note' => 'required|max:255',
        ]);
        $temoignage = Temoignage::findOrFail($request->id);
        $temoignage->note = $validated_data['note'];
        $temoignage->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //supprime un temoignage
        $temoignage = Temoignage::findOrFail($request->id);
        $temoignage->delete();
    }

}
