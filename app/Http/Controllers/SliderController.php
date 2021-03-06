<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;

class SliderController extends Controller
{
    



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {

        $input = $request->all();

        if($request->hasFile('slider_image')){
            $filenameWithExt = $request->file('slider_image')->getClientOriginalName();

            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just Extension
            $extension = $request->file('slider_image')->getClientOriginalExtension();

            // Filename to store 
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $input['slider_image'] = $fileNameToStore;

            // Upload Image
            $path = $request->file('slider_image')->storeAs('public/sliders_img', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
            $input['slider_image'] = $fileNameToStore;
        }
        
        // Create the new category
        Slider::create($input);

        return redirect()->route('sliders.index')
            ->with('success', 'Slider created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('admin.sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        $input = $request->all();

        if($request->hasFile('slider_image')){
            $filenameWithExt = $request->file('slider_image')->getClientOriginalName();

            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just Extension
            $extension = $request->file('slider_image')->getClientOriginalExtension();

            // Filename to store 
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $input['slider_image'] = $fileNameToStore;

            // Upload Image
            $path = $request->file('slider_image')->storeAs('public/sliders_img', $fileNameToStore);
        }
        
        // Update the slider with image
        $slider->update($input);
       
        return redirect()->route('sliders.index')    
            ->with('success', 'Slider have been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect('/sliders')
            ->with('success', 'Slider was deleted successfully.');
    }

    /**
     * Activated a slider
     */
    public function sliders_activate($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->status = 1;
        $slider->update();

        return back()->with('status', 'The slider has been successfully activated.');
    }

    /**
     * Deactivated a slider
     */
    public function sliders_deactivate($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->status = 0;
        $slider->update();

        return back()->with('status', 'The slider has been successfully De-activated.');
    }
}
