<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {

	protected $table = 'notes';

	protected $fillable = ['tutorial_id','text'];

	/**
	 * Relationships
	 */
	
	public function tutorial()
	{
		return $this->belongsTo('Tutorial');
	}
	
}
