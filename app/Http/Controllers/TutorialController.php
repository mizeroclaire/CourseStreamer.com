<?php 

namespace StrimUp\Http\Controllers;
use Illuminate\Support\Facades\Input;
use StrimUp\Tutorial;
use StrimUp\Http\Controllers\Auth;
use Request;
class TutorialController extends Controller {
	/**
	 * POST /tutorials
	 * Create a new tutorial
	 * @return json JSON object
	 */
	public function __construct()
	{
		//make sure that a user is logged in to view the content
		//$this->middleware('auth');
	}
    public function index() {

        $tutorials = Tutorial::all();
        return $tutorials;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function create(){
        $tutorial   =   Input::get('user_id');
        $tutorial   =   Input::get('tutorial_slug');
        $tutorial   =   Input::get('tutorial_notes');
        $tutorial   =   Input::get('tutorial_language');
        $tutorial   =   Input::get('tutorial_url');
        $tutorial->save();
        return $tutorial;

    }
    public function show($id){
        $tutorial   =   Tutorial::find($id);
        return $tutorial;
    }
    public function store() {
        $tutorials = Tutorial::create(Request::all());

        return $tutorials;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $tutorials = Tutorial::find($id);
        $tutorials->tutorial_name = Request::input('tutorial_name');
        $tutorials->save();
        return $tutorials;
    }
    /*******
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Tutorial::destroy($id);
    }

}