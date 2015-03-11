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
	 * @
	 */
	public function __construct(){
        //Authenticate before any operation
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





    //deal with error pages
	public function error(){
		return view('503');
	}


}
