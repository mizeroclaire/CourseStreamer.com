<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Mates extends Model {

	protected $table = 'mates';

	protected $fillable = ['user_id','instution_id'];

	/**
	 * Relationships
	 */
	
	public function user()
	{
		return $this->belongsTo('User');
	}
	public function instution()
	{
		return $this->belongsTo('Institution');
	}
}
