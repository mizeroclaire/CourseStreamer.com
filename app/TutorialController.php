<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorialController extends Model {

	protected $table="Tutorials";
	protected $fillable = array('tutorial_name', 'tutorial_description', 'tutorial_owner');
	protected $guarded = array('id');

}
