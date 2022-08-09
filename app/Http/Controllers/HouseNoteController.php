<?php

namespace App\Http\Controllers;

use App\Models\HouseNote;
use App\Http\Requests\StoreHouseNoteRequest;
use App\Http\Requests\UpdateHouseNoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\House;

class HouseNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::all();
        $notes = [];
        // trie des maisons par notes
        foreach ($houses as $cle => $houseone) {
            $notes[count($notes)]['house'] = $houseone;
            $conteur = 0;
            foreach ($houseone->notes as $key => $value) {
                $conteur+= $value->note;
            }
            //dd($notes);
            $notes[count($notes)-1]['note'] = count($houseone->notes)>0 ? $conteur/count($houseone->notes) : 1;
        }
        //trie des notes les plus élevées

        $nombre = 0;
        $notes_triees = [];
        $nombre_initial = count($notes);
        while($nombre < 10 && $nombre_initial>10){
            $max = 0;
            $max_note = 0;
            foreach ($notes as $key => $value) {
                if($value['note'] > $max){
                    $max = $value['note'];
                    $max_note = $value;
                    
                }
            }
            $notes_triees[count($notes_triees)] = $max_note;
            unset($notes[array_search($max_note, $notes)]);
            $nombre++;
            
        }
       // dd($notes_triees);
        if($nombre_initial<10){
            $notes_triees = $notes;
        }
        //arrangement des maison selon leurs notes 
        $all_house = [];
        foreach ($notes_triees as $key => $value) {
            $all_house[count($all_house)]= $value['house'];
        }

        return $all_house;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_house)
    {
       return view("note.create", ["house_id" => $id_house]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHouseNoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_validated = $request->validate([
            'note'=>'required|integer|min:0|max:5',
            'note_comment'=> 'required|string',
        ]);

        $houseNote = new HouseNote();
        $houseNote->note = $data_validated['note'];
        $houseNote->note_comment = $data_validated['note_comment'];
        $houseNote->house_id = $request->id_house;
        $houseNote->user_id = Auth::user()->id;
        $houseNote->save();

        return redirect()->route('home.index', $request->id_house);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HouseNote  $houseNote
     * @return \Illuminate\Http\Response
     */
    public function show(HouseNote $houseNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HouseNote  $houseNote
     * @return \Illuminate\Http\Response
     */
    public function edit(HouseNote $houseNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHouseNoteRequest  $request
     * @param  \App\Models\HouseNote  $houseNote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHouseNoteRequest $request, HouseNote $houseNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HouseNote  $houseNote
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $housenote = HouseNote::findOrFail($id);
        $housenote->delete();
    }
}
