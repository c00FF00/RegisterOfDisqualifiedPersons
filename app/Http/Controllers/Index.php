<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Index extends Controller
{
    public function reestr(Request $request)
	{
	 
	$user = DB::table('reestr')->where('full_name', 'like', 'ТРУСКОВ %')->get();
var_dump($user);	

	}

public function start()
{

	return view('start');

}	

}
