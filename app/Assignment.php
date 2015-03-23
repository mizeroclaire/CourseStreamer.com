<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model {

	protected $table = 'assignments';

	protected $fillable = ['tutorial_id','problem','solution','submission_deadline'];

	/**
	 * Relationships
	 */
	
	public function tutorial()
	{
		return $this->belongsTo('Tutorial');
	}

}
