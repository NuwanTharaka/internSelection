<?php
namespace App\functions;
use Illuminate\Support\Facades\DB;
	
	class functions {
		
		function getStudent(){
			
			 $student = DB::table('students')->get();
			 
			/* foreach ($company as $regCompany) {
    			echo $regCompany->index_no;
				}
			 */
			 
			 return $student;
			 
			 }
	
   		function getCompany(){
		$company = DB::table('coordinator')->get();
		return $company;
		}
		
		function getStudentGPA($id){
		$GPA=DB::table('students')->where('index_no', $id)->value('GPA');
		return $GPA;
		}
		
		
		function getStudentDescription($id){
		$description=DB::table('students')->where('index_no', $id)->value('description');
		
		return $description;
		}		
		
		function getStudentemail($id){
		$email=DB::table('students')->where('index_no', $id)->value('email');
		
		return $email;
		}	
			
	
	}
	
	?>
	