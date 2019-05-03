<?php

/**
 * ImageController - Handle uploads of image files and deleting existing images from storage.
 * 
 * @author Roman Sorin <roman@romansorin.com>
 */

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function _construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'file_name' => ['required', 'string'],
            'file' => ['image', 'required'],
            'image_description' => ['nullable', 'string']
        ]);

        request()->file->storeAs('public/images/', request()->file_name);

        Image::create(request(['file_name', 'image_description']));

        return redirect('/dashboard/images');
    }

    public function destroy($filename)
    {
        Image::where('file_name', $filename)->first()->destroy();
        Storage::delete("public/images/{$filename}");

        return redirect('/dashboard/images');
    }
}
