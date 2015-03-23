<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Example extends Model {

	protected $table = 'examples';

	protected $fillable = ['tutorial_id','problem','solution'];

	/**
	 * Relationships
	 */
	
	public function tutorial()
	{
		return $this->belongsTo('Tutorial');
	}

}
