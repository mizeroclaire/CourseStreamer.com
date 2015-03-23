<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

	protected $table = 'messages';

	protected $fillable = ['from_user_id','to_user_id','message'];

	/**
	 * Relationships
	 */
	
	public function user()
	{
		return $this->belongsTo('User','from_user_id','id');
	}

}
