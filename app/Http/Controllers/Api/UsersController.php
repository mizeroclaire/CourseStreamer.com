<?php
namespace StrimUp\Http\Controllers\Api;
use StrimUp\Assignment;
use StrimUp\Http\Requests;
use StrimUp\Http\Controllers\Controller;
use StrimUp\Auth;


use StrimUp\Institution;
use StrimUp\Message;
use StrimUp\User;
class UsersController extends Controller {

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
  /*public function __construct()
  {t
    $this->middleware('auth');
  }*/

  /**
  * Show the application dashboard to the user.
  *
  * @return Response
  */
  public function index()
  {

   //showing home@Strims with user's record
    if(!$this->middleware('auth')){//remove ! for production i am testing that's why i don't need more login every time a test
        //if a use logged in let access all
        //return view('users.home');
        return $message=(string) User::find(1)->tutorials;
            
    }else{
        return redirect('/')->with('message','You are not allowed to view this file please log in first!');
    }
  }
  public function getUserProfile(){

  }
  public function getUserTutorials(){
      return $message=(string) User::find(1)->institution;
  }
   public function getUserCurrentClass(){
        
  }
  public function getUserMessage(){
    return $message=User::find(1)->tutorials();
  }
   public function getUserCurrentGroups(){
       
  }
  public function getuserGroups(){

  }
}
