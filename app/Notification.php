<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model {

	protected $table = 'notifications';

	protected $fillable = ['user_id','message'];

	/**
	 * Relationships
	 */
	
	public function user()
	{
		return $this->belongsTo('User');
	}

}
