<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $table = 'profiles';

	protected $fillable = ['user_id','bio','website','blog'];

	/**
	 * Relationships
	 */
	
	public function user()
	{
		return $this->belongsTo('User');
	}

}
