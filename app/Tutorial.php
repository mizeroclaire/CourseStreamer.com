<?php 
	namespace StrimUp;
	use Illuminate\Database\Eloquent\Model;
class Tutorial extends Model
{
    protected $table        =   "tutorials";
    protected  $fillable    =   array('user_id','tutorial_slug','tutorial_notes','tutorial_language','username','tutorial_url','created_at');

}