<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Class extends Model {

	protected $table = 'classes';

	protected $fillable = ['institution_id', 'name', 'description','start_date','end_date'];

	/**
	 * Relationships
	 */
	
	public function institution()
	{
		return $this->belongsTo('Institution');
	}

	public function instructors()
	{
		return $this->hasMany('Instructor');
	}

	public function tutorials()
	{
		return $this->hasMany('Tutorial');
	}

}
