<?php
namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

trait FileUploadTrait {
    /**
     * @var string
     **/
    protected $uploadPath = 'uploads';

    /**
     * @var
     **/
    public $folderName;

    /**
     * @var string
     **/
    public $rule = 'image|max:2000';

    /**
     * @return bool
     **/

    private function createUploadFolder(): bool
    {
        if (!file_exists(config('filesystems.disks.public.root') . '/' . $this->uploadPath . '/' . $this->folderName)) {
            $attachmentPath = config('filesystems.disks.public.root') . '/' . $this->uploadPath . '/' . $this->folderName;
            Storage::put('public/' . $this->uploadPath . '/' . $this->folderName . '/index.html', 'Silent Is Golden');
            mkdir($attachmentPath, 0777);
            return true;
        }
        return false;
    }

    /**
     * For handle validation file action
     *
     * @param $file
     * @return fileUploadTrait|\Illuminate\Http\RedirectResponse
     */
    private function validateFileAction($file): string
    {
        $rules = array('fileupload' => $this->rule);
        $file = array('fileupload' => $file);
        $fileValidator = Validator::make($file, $rules);
        if ($fileValidator->fails()) {
            $messages = $fileValidator->messages();
            return redirect()->back()->withInput(request()->all())->withErrors($messages);
        }
    }

    /**
     * For Handle validation file
     *
     * @param $files
     * @return fileUploadTrait|\Illuminate\Http\RedirectResponse
     */
    private function validateFile($files)
    {
        if (is_array($files)) {
            foreach ($files as $file) {
                return $this->validateFileAction($file);
            }
        }
        $schema = Schema::class;

        return $this->validateFileAction($files);
    }

    /**
     * For Handle Put File
     *
     * @param $file
     * @return bool|string
     */
    private function putFile($file)
    {
        $fileName = preg_replace('/\s+/', '_', time() . ' ' . $file->getClientOriginalName());
        $path = $this->uploadPath . '/' . $this->folderName . '/';

        if (Storage::putFileAs('public/' . $path, $file, $fileName)) {
            return $path . $fileName;
        }

        return false;
    }

    private function loadFile($file)
    {
    }

    /**
     * For Handle Save File Process
     *
     * @param $files
     * @return array
     */
    public function saveFiles($files)
    {
        $data = [];

        if ($files != null) {

            $this->validateFile($files);

            $this->createUploadFolder();

            if (is_array($files)) {

                foreach ($files as $file) {
                    $data[] = $this->putFile($file);
                }

            } else {

                $data[] = $this->putFile($files);
            }

        }

        return $data;
    }

    public function FileUpload(Request $request, $id)
    {
        print_r($request->file('photo'));
        $rules = ['photo' => 'image|mimes:jpeg,jpg,png|max:2048'];

        $this->validate($request, $rules);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file('photo')->move(public_path('storage/images'), $filename);
        }

        return response()->json(['message' => 'Image successfully uploaded'], 200);
    }
}