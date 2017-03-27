<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request)
    {
    	$nama = $request->input('nama');
    	$bebas =  $request->input('email');
    	$gend = $request->input('gender');
    	$lead = $request->input('leader');

    	return view('forms') ->with('nama', $nama) ->with('email', $bebas) ->with('gender', $gend) ->with('leader', $lead);
    }
}
