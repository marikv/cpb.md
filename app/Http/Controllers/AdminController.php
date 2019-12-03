<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Image;

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
        $photos = Photo::where('type', 0)->get();

        return view('admin.photoGallery')
            ->with('photos', $photos)
            ->with('settingsData', $settingsData);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function videoGallery()
    {
        $settingsData = Settings::getAll();
        $videos = Photo::where('type', 1)->get();

        return view('admin.videoGallery')
            ->with('videos', $videos)
            ->with('settingsData', $settingsData);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function productsPage(Request $request)
    {
        $categoriesData = Category::all();
        $productsData = Product::all();
        $categoryEdit = new \stdClass();
        $productEdit = new \stdClass();

        $cat = $request->get('category');
        if (!empty($cat)) {
            $productsData = Product::where('category_id', $cat)->get();
            $categoryEdit = Category::find($cat);
        }

        $prod = $request->get('product');
        if (!empty($prod)) {
            $productEdit = Product::find($prod);
        }

        return view('admin.productsPage')
            ->with('edit', !empty($request->get('edit')))
            ->with('productEdit', $productEdit)
            ->with('categoryEdit', $categoryEdit)
            ->with('productsData', $productsData)
            ->with('categoriesData', $categoriesData);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addProductCategory(Request $request)
    {
        if ($request->cat_id) {
            $model = Category::find($request->cat_id);
        } else {
            $model = new Category();
        }

        $model->name_ro = $request->cat_nume_ro;
        $model->name_ru = $request->cat_nume_ru;
        $model->name_en = $request->cat_nume_en;
        $model->save();

        return redirect('/admin/page/products?category=' . $model->id);
    }

    public function deleteProductCategory(Request $request)
    {
        if ($request->id) {
            $model = \App\Models\Category::find($request->id);
            $delete = $model->delete();
        }
    }

    public function deleteProduct(Request $request)
    {
        if ($request->id) {
            $model = \App\Models\Product::find($request->id);
            $delete = $model->delete();
        }
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addProduct(Request $request)
    {
        if ($request->id) {
            $model = Product::find($request->id);
        } else {
            $model = new Product();
        }

        if($request->file('photo')) {
            $request->validate([
                'file' => 'mimes:jpg,jpeg,png,gif,ico,bmp|max:20480',
            ]);
            $fileName = date('YmdHis').'.'.$request->file('photo')->extension();
            $request->file('photo')->move(public_path('uploads'), $fileName);
            $model->photo = $fileName;
        }

        $model->category_id = $request->category_id;

        $model->name_ro = $request->name_ro;
        $model->name_ru = $request->name_ru;
        $model->name_en = $request->name_en;

        $model->text_ro = $request->text_ro;
        $model->text_ru = $request->text_ru;
        $model->text_en = $request->text_en;

        $model->save();

        return redirect('/admin/page/products?product=' . $model->id .'&edit=1');
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
            if ($request->name == 'videoForVideoGallery') {
                $model = new Photo();
                $model->path =  $request->value;
                $model->type = 1;
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
