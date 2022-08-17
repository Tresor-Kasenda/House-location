<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\les;
use App\Http\Requests\UpdateNoteCommissionnaireRequest;
use App\Models\Commissioner;
use App\Models\NoteCommissionnaire;
use Illuminate\Http\Request;

class NoteCommissionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NoteCommissionnaire::where("id", 1)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       return view('admins.note_commissionnaires.create', ["commissioner_id" => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNoteCommissionnaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validated_data = $request->validate([
            'note' => 'required|integer|min:0|max:5',
            'commissioner_id' => 'required|integer|exists:commissioners,id',
        ]);
        $note = !is_null(NoteCommissionnaire::where("commissioner_id", $validated_data['commissioner_id'])->first()) ? NoteCommissionnaire::where("commissioner_id", $validated_data['commissioner_id'])->first() : false;
        //$note =  NoteCommissionnaire::where("commissioner_id", $validated_data['commissioner_id'])->first();

        //dd($validated_data);
        if($note) {
            $note->note = $validated_data['note'];
            $note->save();
        } else {
            NoteCommissionnaire::create($validated_data);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoteCommissionnaire  $noteCommissionnaire
     * @return \Illuminate\Http\Response
     * @return les 10 meilleurs  commissionnaires (meilleur notes)
     *
     *
     */
    public function  best_notes()
    {
        $notes = NoteCommissionnaire::all()->all();
        $best = [];
        $nombre = 0;
        if(count($notes)>10){
            for($i=0; $i<=10; $i++){
        foreach ($notes as $cle => $note) {
            $max = 0;
            $note_max = 0;
            if($note->note > $max) {
                $max = $note->note;
                $note_max = $note;
            }

        }
        $best[count($best)]=$note_max->commissioner;
        // dd($notes->all());
        unset($notes[array_search($note_max, $notes)]);
    }  }else{
        $best = $notes;
    }
       //dd($notes);

        return $best;
    }
    public function show($id_commissioner)
    {
        //$commissioner = NoteCommissionnaire::where("commissioner_id", $id_commissioner)->first();//Commissioner::findOrfail($id_commissioner);
         $commissioner = Commissioner::findOrFail($id_commissioner);
        return $commissioner->noteCommissionnaire;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoteCommissionnaire  $noteCommissionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteCommissionnaire $noteCommissionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNoteCommissionnaireRequest  $request
     * @param  \App\Models\NoteCommissionnaire  $noteCommissionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoteCommissionnaireRequest $request, NoteCommissionnaire $noteCommissionnaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NoteCommissionnaire  $noteCommissionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteCommissionnaire $noteCommissionnaire)
    {
        //
    }
}
