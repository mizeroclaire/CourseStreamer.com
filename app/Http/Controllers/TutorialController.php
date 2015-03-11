<?php 

namespace StrimUp\Http\Controllers;
use StrimUp\Tutorial;
use DB;
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
        $tutorials->done = Request::input('done');
        $tutorials->save();
        return $tutorials;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Tutorial::destroy($id);
    }

}