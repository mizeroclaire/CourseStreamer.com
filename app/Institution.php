<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model {

	protected $table = 'institutions';

	protected $fillable = ['user_id', 'description', 'location'];

	/**
	 * Relationships
	 */
	
	public function user()
	{
		return $this->belongsTo('User');
	}

	public function classes()
	{
		return $this->hasMany('Class');
	}
}
