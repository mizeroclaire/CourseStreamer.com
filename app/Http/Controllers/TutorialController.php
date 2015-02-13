<?php namespace App\Http\Controllers;

class TutorialController extends Controller {

	/**
	 * POST /tutorials
	 * Create a new tutorial
	 * @return json JSON object
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function create()
	{
		 
	}
	/**
	 * PUT /tutorials/{id}
	 * Update a specified tutorial
	 * @return json JSON object
	 */
	public function update($id)
	{
		 
	}

	/**
	 * DELETE /tutorials/{id}
	 * Return all tutorials in storage
	 * @return json JSON object
	 */
	public function delete($id)
	{
		 
	}

	/**
	 * GET /tutorials
	 * Return all tutorials in storage
	 * @return json JSON object
	 */
	public function getAll()
	{
		 
	}

	/**
	 * GET /tutorials/{id}
	 * Return a specified tutorial
	 * @return json JSON object
	 */
	public function getById($id)
	{
		 
	}

	/**
	 * GET /tutorials/{id}/about
	 * Returns the summary information about a specified tutorial
	 * @return json JSON object
	 */
	public function getSummary($id)
	{
		 
	}

	/**
	 * GET /tutorials/{id}/video/link
	 * Return a specified tutorial
	 * @return json JSON object
	 */
	public function getLinkToVideo($id)
	{
		 
	}

	/**
	 * GET /tutorials/featured
	 * Return the featured tutorial of the day
	 * @return json JSON object
	 */
	public function getFeatured($id)
	{
		 
	}
}