<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Template;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    public function add(Template $request){
        DB::table('template')->updateOrInsert(['id' => 1], $request->except('_token'));
        return back();
    }
}
