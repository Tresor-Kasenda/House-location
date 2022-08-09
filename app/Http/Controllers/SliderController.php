<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admins.sliders.index', [
           'sliders' => Slider::all()
       ]);
    }

    public function part()
    {
      return Slider::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admins.sliders.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate(['title' => 'required|min:5|max:50',]);
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:50',
            'description' => 'required|min:5|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',]);
         
            $path = $request->image->store('images', 'public');
        //$validatedData = $request->validated();
        $slider = new Slider();
        $slider->title = $validatedData['title'];
        $slider->description = $validatedData['description'];
        $slider->image = $path;
        $slider->save();
        
        return $validatedData;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slider = Slider::findOrFail($id);
        return view("admins.sliders.edit", ['slider' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSliderRequest  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:50',
            'description' => 'required|min:5|max:50',]);
        $slider = Slider::find($id);
        $slider->title = $validatedData->title;
        $slider->description = $validatedData->description;
        if ($request->hasFile('photo')) {
            $path = $request->image->store('images', 'public');
        }
        $slider->save();
        return redirect()->route('home.index');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        //dd($slider);
        $slider->delete();
        return redirect()->route('home.index');
    }
}
