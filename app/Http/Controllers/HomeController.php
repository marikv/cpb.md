<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landingPage()
    {
        $settingsData = Settings::getAll();

        return view('layouts.landing')
            ->with('settingsData', $settingsData);
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landingPageRu()
    {
        self::setLang('ru');
        return $this->landingPage();
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landingPageRo()
    {
        self::setLang('ro');
        return $this->landingPage();
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landingPageEn()
    {
        self::setLang('en');
        return $this->landingPage();
    }

    public static function getLang()
    {
        $lang = Session::get('lang');
        if (!$lang) {
            $lang = 'ro';
        }
        return $lang;
    }

    public static function setLang($lang)
    {
        Session::put('lang', $lang);
    }


    public function sendCerere(Request $request)
    {
        $phone = $request->phone;
        if ($phone) {
            $mail = 'cpb.md.cereri@gmail.com';
            $phone = '373760000000';

            $details = [
                'title' => 'Aveti o cerere noua',
                'tel' => $request->phone,
                'nume' => $request->fio,
                'data_nasterii' => $request->dob,
                'suma' => $request->loanSum,
                'seria_pasaport' => $request->seriaPassport,
                'data_pasaport' => $request->dataPassport,
            ];
            $m = Mail::to($mail)->send(new \App\Mail\SendMailCerere($details));
        }
    }
}
