<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use Illuminate\Http\Request;
use File;

class FileUpload extends Controller
{
    public function index()
    {
        return view('uploadfile');
    }

    public function createForm()
    {
        return view('file-upload');
    }

    public function fileupload(Request $request)
    {

        $date = $request->post('date');
        $timeline = new Timeline;
        $timeline->date = $request->post('date');
        $timeline->time = $request->post('time');
        $timeline->text = $request->post('text');
        $timeline->save();

        //        $request->validate(['file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048']);
        //        $fileModel = new File;
        //        if ($request->file()) {
        //            $fileName = time() . '_' . $request->file->getClientOriginalName();
        //            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
        //            $fileModel->name = time() . '_' . $request->file->getClientOriginalName();
        //            $fileModel->file_path = '/storage/' . $filePath;
        //            $fileModel->save();
        //
        //            return back()->with('success', 'File has been uploaded.')->with('file', $fileName);
        //        }

    }
}
