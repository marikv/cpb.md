<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function globalSettingsPage()
    {
        $settingsData = Settings::getAll();

        return view('admin.globalSettingsPage')->with('settingsData', $settingsData);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function landingPage()
    {
        $settingsData = Settings::getAll();

        return view('admin.landingPage')->with('settingsData', $settingsData);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function photoGallery()
    {
        $settingsData = Settings::getAll();
        $photos = Photo::all();

        return view('admin.photoGallery')
            ->with('photos', $photos)
            ->with('settingsData', $settingsData);
    }


    /**
     * @param Request $request
     * @return int
     */
    public function saveSettings(Request $request)
    {
        try {

            if ($request->name == 'photoForPhotoGallery') {
                $model = new Photo();
                $model->path =  $request->value;
                $model->type = 0;
                $model ->save();

                return 0;
            }

            return \App\Models\Settings::updateOrCreate(
                ['name' => $request->name],
                ['value' => $request->value]
            );

        }catch (\Exception $e) {
            echo $e->getLine(). ' Mes: '.$e->getMessage();
        }
    }

    public function deleteFromPhotoGallery(Request $request)
    {
        try {

            if ($request->method() === 'POST' && $request->id) {

                $model = \App\Models\Photo::find($request->id);
                $name = $model->path;
                $delete = $model->delete();
                if ($delete) {
                    @unlink(public_path('uploads') . DIRECTORY_SEPARATOR . $name);
                }
            }

        }catch (\Exception $e) {
            echo $e->getLine(). ' Mes: '.$e->getMessage();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,gif,ico,bmp|max:20480',
        ]);

        $fileName = date('YmdHis').'.'.$request->file->extension();

        $request->file->move(public_path('uploads'), $fileName);

        return response()->json([
            'file' => $fileName
        ]);
    }
}
