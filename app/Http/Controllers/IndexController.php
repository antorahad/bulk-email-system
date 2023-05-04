<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SendMail;
use App\Jobs\SendEmail;

class IndexController extends Controller
{
    public function index(){
        $mailConfig = DB::table('mail_config')->first();
        $template = DB::table('template')->first();
        $customers = DB::table('customers')->get();
        $process = DB::table('process')->get();

        return view('Index', [
            'mailConfig' => $mailConfig,
            'template' => $template,
            'customers' => $customers,
            'process' => $process
        ]);
    }

    public function sendMail(SendMail $request){
        $processData = [];
        foreach ($request->list_email as $key => $value){
            array_push($processData, [
                'email' => $value,
                'status' => 0
            ]);
        }
        DB::table('process')->insert($processData);
        SendEmail::dispatch();
        return back();
    }
}
