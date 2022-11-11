<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Http\Resources\SliderResource;
use App\Models\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function index()
    {
        return response()->json(Slider::all());
    }

    public function get($id)
    {
        return response()->json(new SliderResource(Slider::findOrFail($id)));
    }

    public function create(SliderRequest $request)
    {
        $slider = Slider::create($request->all());
        return response()->json($slider);
    }

    public function update(SliderRequest $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->update($request->all());

        return response()->json($slider);
    }

    public function upload(Request $request)
    {
        $file = $request->file('image');

        //get extension
        $extension = $file->getClientOriginalExtension();

        //file to store
        $fileName = 'image_' . time() . '.' . $extension;

        //upload to store
        $path = $file->move("sliders/", $fileName);

        return response()->json([
            'path' => "/$path",
            'name' => $fileName
        ]);
    }
}
