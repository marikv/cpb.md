<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    private const SYSTME_ID = '------';
    private const PASSWORD = '------';
    private const SENDER_NAME = '------';
    private const URL = 'http://api.bulksms.md:8082/UnifunBulkSMSAPI.asmx/SendSMSSimple?username={username}&password={password}&from={sender}&to={msisdn}&text={body}';

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

    public function sendCerere(Request $request)
    {
        $phone = $request->phone;
        if ($phone) {
            $mail = 'cpb.md.cereri@gmail.com';
            $phone = '373760000000';
            // $mail = 'marin.vartan@gmail.com';
            // $phone = '37376083045';


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

//            $smsBody = 'Cerere noua pe cpb.md. Deschide '.$mail.' pentru mai multe detalii';
//
//            $URL = self::URL;
//            $URL = str_replace('{username}', self::SYSTME_ID, $URL);
//            $URL = str_replace('{password}', self::PASSWORD, $URL);
//            $URL = str_replace('{sender}', self::SENDER_NAME, $URL);
//            $URL = str_replace('{msisdn}', $phone, $URL);
//            $URL = str_replace('{body}', $smsBody, $URL);
//
//            $client = new \GuzzleHttp\Client();
//            $request = $client->get($URL);
//            $response = $request->getBody();
        }
    }
}
