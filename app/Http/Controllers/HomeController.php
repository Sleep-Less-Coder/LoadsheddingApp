<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Loadshedding;

class HomeController extends Controller {

	public function index()
    {
        //getting today's day only like Sunday, Monday.....

        $today = date('d-m-Y');
        $day = date("l", strtotime($today));

        //getting schedule for today and returning it

        $schedule_today = Loadshedding::where('day', $day)->get();

        return view('home')->with('schedule_today', $schedule_today);

    }

}
