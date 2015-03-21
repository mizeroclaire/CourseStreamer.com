<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model {

	protected $table = 'instructors';

	protected $fillable = ['class_id','institution_id','profession','current_job'];

	/**
	 * Relationships
	 */
	
	public function class()
	{
		return $this->belongsTo('Class');
	}

	public function institution()
	{
		return $this->hasMany('Institution');
	}

}
