<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model {

	protected $table = 'exercises';

	protected $fillable = ['tutorial_id','problem','solution'];

	/**
	 * Relationships
	 */
	
	public function tutorial()
	{
		return $this->belongsTo('Tutorial');
	}

}
