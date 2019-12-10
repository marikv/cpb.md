<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pdf;
use App\Models\Photo;
use App\Models\Page;
use App\Models\Product;
use App\Models\Faq;
use App\Models\Article;
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
    public function simplePage(Request $request)
    {
        $data = Page::where('alias', $request->alisa)->first();

        return view('admin.simplePage')->with('data', $data);
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
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pdfCatalogsPage(Request $request)
    {
        $pdfsData = Pdf::orderBy('id', 'DESC')->get();

        return view('admin.pdfCatalogsPage')
            ->with('edit', !empty($request->get('edit')))
            ->with('pdfsData', $pdfsData);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addPdf(Request $request)
    {
        if ($request->id) {
            $model = Pdf::find($request->id);
        } else {
            $model = new Pdf();
        }

        if($request->file('photo')) {
            $request->validate([
                'file' => 'mimes:jpg,jpeg,png,gif,ico,bmp|max:20480',
            ]);
            $fileName = date('YmdHis').'.'.$request->file('photo')->extension();
            $request->file('photo')->move(public_path('uploads'), $fileName);
            $model->photo = $fileName;
        }
        if($request->file('pdf')) {
            $request->validate([
                'file' => 'mimes:pdf|max:204800',
            ]);
            $fileName = date('YmdHis').'_CATALOG_'.$request->file('pdf')->getClientOriginalName().'.'.$request->file('pdf')->extension();
            $request->file('pdf')->move(public_path('uploads'), $fileName);
            $model->pdf = $fileName;
        }

        $model->name_ro = $request->name_ro;
        $model->name_ru = $request->name_ru;
        $model->name_en = $request->name_en;

        $model->save();

        return redirect('/admin/page/pdf?pdf=' . $model->id .'&edit=1');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function simplePageSave(Request $request)
    {
        if ($request->id) {
            $model = Page::find($request->id);
        } else {
            $model = new Page();
        }

        if($request->file('photo')) {
            $request->validate([
                'file' => 'mimes:jpg,jpeg,png,gif,ico,bmp|max:20480',
            ]);
            $fileName = date('YmdHis').'.'.$request->file('photo')->extension();
            $request->file('photo')->move(public_path('uploads'), $fileName);
            $model->photo = $fileName;
        }

        $model->name_ro = $request->name_ro;
        $model->name_ru = $request->name_ru;
        $model->name_en = $request->name_en;

        $model->text_ro = $request->text_ro;
        $model->text_ru = $request->text_ru;
        $model->text_en = $request->text_en;

        $model->save();

        return redirect('/admin/page/simplePage?id=' . $model->id .'&edit=1');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function faqPage(Request $request)
    {
        $settingsData = Settings::getAll();
        $faqData = Faq::orderBy('id', 'DESC')->get();

        $faqEdit = new \stdClass();

        $faq = $request->get('faq');
        if (!empty($faq)) {
            $faqEdit = Faq::find($faq);
        }


        return view('admin.faq')
            ->with('settingsData', $settingsData)
            ->with('faqEdit', $faqEdit)
            ->with('faqData', $faqData);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function photoGallery()
    {
        $settingsData = Settings::getAll();
        $photos = Photo::where('type', 0)->orderBy('id', 'DESC')->get();

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
        $categoriesData = Category::orderBy('id', 'DESC')->get();
        $productsData = Product::orderBy('id', 'DESC')->get();
        $categoryEdit = new \stdClass();
        $productEdit = new \stdClass();

        $cat = $request->get('category');
        if (!empty($cat)) {
            $productsData = Product::where('category_id', $cat)->orderBy('id', 'DESC')->get();
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newsPage(Request $request)
    {
        $articlesData = Article::orderBy('id', 'DESC')->get();
        $articleEdit = new \stdClass();

        $cat = $request->get('article');
        if (!empty($cat)) {
            $articleEdit = Article::find($cat);
        }

        return view('admin.newsPage')
            ->with('edit', !empty($request->get('edit')))
            ->with('articleEdit', $articleEdit)
            ->with('articlesData', $articlesData);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addFaq(Request $request)
    {
        if (!empty($request->id)) {
            $model = Faq::find($request->id);
        } else {
            $model = new Faq();
        }

        $model->query_ro = $request->query_ro;
        $model->query_ru = $request->query_ru;
        $model->query_en = $request->query_en;
        $model->answer_ro = $request->answer_ro;
        $model->answer_ru = $request->answer_ru;
        $model->answer_en = $request->answer_en;

        $model->save();

        return redirect('/admin/page/faq');
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

        if($request->file('cat_photo')) {
            $request->validate([
                'file' => 'mimes:jpg,jpeg,png,gif,ico,bmp|max:20480',
            ]);
            $fileName = date('YmdHis').'.'.$request->file('cat_photo')->extension();
            $request->file('cat_photo')->move(public_path('uploads'), $fileName);
            $model->photo = $fileName;
        }

        $model->name_ro = $request->cat_nume_ro;
        $model->name_ru = $request->cat_nume_ru;
        $model->name_en = $request->cat_nume_en;
        $model->save();

        return redirect('/admin/page/products?category=' . $model->id);
    }

    /**
     * @param Request $request
     */
    public function deleteProductCategory(Request $request)
    {
        if ($request->id) {
            $model = \App\Models\Category::find($request->id);
            $delete = $model->delete();
        }
    }

    /**
     * @param Request $request
     */
    public function deletePdf(Request $request)
    {
        if ($request->id) {
            $model = \App\Models\Pdf::find($request->id);
            $delete = $model->delete();
        }
    }

    /**
     * @param Request $request
     */
    public function deleteProduct(Request $request)
    {
        if ($request->id) {
            $model = \App\Models\Product::find($request->id);
            $delete = $model->delete();
        }
    }


    /**
     * @param Request $request
     */
    public function deleteArticle(Request $request)
    {
        if ($request->id) {
            $model = \App\Models\Article::find($request->id);
            $delete = $model->delete();
        }
    }

    /**
     * @param Request $request
     */
    public function deleteFaq(Request $request)
    {
        if ($request->id) {
            $model = \App\Models\Faq::find($request->id);
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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addArticle(Request $request)
    {
        if ($request->id) {
            $model = Article::find($request->id);
        } else {
            $model = new Article();
        }

        if($request->file('photo')) {
            $request->validate([
                'file' => 'mimes:jpg,jpeg,png,gif,ico,bmp|max:20480',
            ]);
            $fileName = date('YmdHis').'.'.$request->file('photo')->extension();
            $request->file('photo')->move(public_path('uploads'), $fileName);
            $model->photo = $fileName;
        }

        $model->name_ro = $request->name_ro;
        $model->name_ru = $request->name_ru;
        $model->name_en = $request->name_en;

        $model->text_ro = $request->text_ro;
        $model->text_ru = $request->text_ru;
        $model->text_en = $request->text_en;

        $model->save();

        return redirect('/admin/page/news?article=' . $model->id .'&edit=1');
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
