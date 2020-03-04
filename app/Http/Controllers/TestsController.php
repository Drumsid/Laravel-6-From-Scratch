<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Test;
use Illuminate\Support\Facades\DB;

class TestsController extends Controller
{
    public function index()
    {
        $tests = DB::table('tests')->simplePaginate(2);
        // dd($tests);
        return view('test.index', [
            'tests' => $tests
        ]);
    }

}
