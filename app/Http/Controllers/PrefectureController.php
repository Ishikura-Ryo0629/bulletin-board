<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;
use App\Prefecture;

class PrefectureController extends Controller
{
    public function index (Prefecture $prefecture) {
        return view('prefectures.index')->with(['prefectures' => $prefecture->getByPrefectures()]);
    }
}
