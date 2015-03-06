<?php
namespace StrimUp\Http\Controllers;
use Illuminate\Support\Facades\URL;
use StrimUp\Tutorial;
use StrimUp\User;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(){
		$this->middleware('auth');
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tutorials=Tutorial::paginate();
		return view('home')->with('tutorials',$tutorials);
	}
	public function getUser($id){
        //tes t youtube api

        return  User::find($id)->toJson();
	}
	public function settings(){
		return view('settings');
	}
	public function pageSwitch(){
		return view('pageSwitcher');
	}
	public function privacy(){
		return view('privacy');
	}
	public function error(){
		return view('503');
	}
	public function play(){
		return view('play-ground')->with('message','hello you are watching fews video please upgrade to premium to see more!');
	}

}
