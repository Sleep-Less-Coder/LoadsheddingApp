<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Loadshedding;
use Redirect;

class GroupController extends Controller {

	public function show($id)
    {
        $schedule = Loadshedding::where('group_name','Group '.$id)->get();

        if($schedule->count())
        {
            return view('group-schedule')->with('schedule', $schedule)->with('id', $id);
        }
        else
        {
            return Redirect::route('home')->with('fail', 'There is no such group! Try groups between 1 to 7');
        }
    }
}
