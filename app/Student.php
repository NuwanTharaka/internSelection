<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Student extends Model 
{
   protected $table = 'students';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 
   protected $fillable = [
        'index_no', 'username','password','email'
    ];

	public function Student(){
		return $this-> belongsTo('App\User');
		}
	
	public function addDescription($Description)
	{
		$this->description = $Description;
	
	}
	public function setGPA($gpa)
	{
		$this->GPA = $gpa;
	}
}
?>