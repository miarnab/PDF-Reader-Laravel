<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vaites\ApacheTika\Client;

class ContentController extends Controller
{
    public function index()
    {
        $contents = DB::table('files')->select('id','content')->get();

        return view('content', compact('contents'));
    }

    // public function pdfparser(){
    //     $client = Client::make('localhost', 9998);

    // }
}
