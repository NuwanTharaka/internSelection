<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model 
{
   protected $table = 'coordinator';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 
   protected $fillable = [
        'ID', 'Company_Name','username','password','email','img_url'
    ];

	public function Coordinator(){
		return $this-> belongsTo('App\User');
		}
	
}
?>