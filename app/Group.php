<?php namespace StrimUp;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

	protected $table = 'groups';

	protected $fillable = ['class_id','group_name','user_id','created_at'];
	public function users(){
        return $this->belongsToMany('User');
    }

}
