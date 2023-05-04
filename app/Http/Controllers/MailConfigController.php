<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailConfigController extends Controller
{
    public function add(MailConfig $request){
        DB::table('mail_config')->updateOrInsert(['id' => 1], $request->except('_token'));
        return back();
    }
}
