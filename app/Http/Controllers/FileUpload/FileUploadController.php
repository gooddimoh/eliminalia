<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller {

    public function index()
    {
        return "its index method";
    }

    public function FileUpload(Request $request, $id)
    {
        print_r($request->file('photo'));
        $rules = ['photo' => 'image|mimes:jpeg,jpg,png|max:2048' ];

        $this->validate($request, $rules);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file('photo')->move(public_path('storage/images'), $filename);
        }

        return response()->json(['message' => 'Image successfully uploaded'], 200);
    }
}
