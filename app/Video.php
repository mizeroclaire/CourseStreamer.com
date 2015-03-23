<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {

	protected $table = 'videos';

	protected $fillable = ['tutorial_id','name','url','description'];

	/**
	 * Relationships
	 */
	
	public function tutorial()
	{
		return $this->belongsTo('Tutorial');
	}
}
