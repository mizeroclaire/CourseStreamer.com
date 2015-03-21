<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model {

	protected $table = 'tutorials';

	protected $fillable = ['class_id','name','slug','language','description','url'];

	/**
	 * Relationships
	 */
	
	public function class()
	{
		return $this->belongsTo('Class');
	}

	public function videos()
	{
		return $this->hasMany('Video');
	}

	public function notes()
	{
		return $this->hasMany('Note');
	}

	public function examples()
	{
		return $this->hasMany('Example');
	}

	public function exercises()
	{
		return $this->hasMany('Exercise');
	}

	public function assignments()
	{
		return $this->hasMany('Assignment');
	}
}
