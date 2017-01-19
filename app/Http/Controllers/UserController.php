<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Database\DataConnection;
use Illuminate\Support\Facades\Auth;
use App\Events\emailVerify;
use Illuminate\Support\Facades\Event;
use App\functions\functions;
use Illuminate\Support\Facades\Input;
use Hash;
use View;
use Session;
Use App\Student;
Use App\Coordinator;
Use DB;

class UserController extends Controller{
	
	

public function checkdatabasequery()
{
	
	$testDB = new functions();
	$testDB -> testFunction();
	 return view('welcome');
}

public function RegisterStudent(Request $request)
{	
 
	$this->validate($request,[
			'username' => 'required',
			'password' => 'required|min:3'
			]);
	
		$student = new Student();
		$student->index_no = $request['Index_no'];
		$student->username = $request['username'];
		$student->password = bcrypt($request['password']);
		$student->email = $request['email'];
		$student->save();
	$user=new User();
	$user->id = $request['Index_no'];
	$user->password = bcrypt($request['password']);
	$user->type = 'Student';
	$user->save();
	
}
public function RegisterCoordinator(Request $request)
{	
 
	$this->validate($request,[
			'username' => 'required',
			'password' => 'required|min:3',
			 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);

 		$imageName = $request['Company_Name'].'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
		$Coordinator = new Coordinator();
		$Coordinator->ID = $request['Index_no'];
		$Coordinator->Company_Name = $request['Company_Name'];
		$Coordinator->username = $request['username'];
		$Coordinator->password = bcrypt($request['password']);
		$Coordinator->email = $request['email'];
		$Coordinator->img_url = $imageName;
		$Coordinator->save();
	$user=new User();
	$user->ID= $request['Index_no'];
	$user->password = bcrypt($request['password']);
	$user->type = 'Coordinator';
	$user->save();
	
}
	
public function RegisterCompany(Request $request)
{	
 
return view('companyreg');
	
}
	
	
	  public function loginUser(Request $request)
    {

        $this->validate($request, [
            'index_no' => 'required',
            'password' => 'required'
        ]);

        $index_no = $request['index_no'];
        $password = $request['password'];


        if (Auth::attempt(['id' => $index_no, 'password' => $password])) {
            // Authentication passed...
            if(Auth::user()->type=="Student"){
                return redirect()->route('StudentDashboard');
            }elseif (Auth::user()->type=="Coordinator"){
                return redirect()->route('CompanyDashboard');
            }else{
                return redirect()->route('AdminDashboard');
            }

        }
        else{
            return view('userLogin', ['customMessage' => 'login failed, try again']);
        }
    }
	
	public function StudentDashboard(Request $request)
{	
  $student = DB::table('students')->where('index_no', Auth::User()->id)->first();
$companyDetails = DB::table('studentcompany')
            ->leftJoin('coordinator', 'studentcompany.Company', '=', 'coordinator.company_name')
            ->where('StudentID', Auth::User()->id)->pluck('username','img_url');
			$companyname=[];
			$companyurl=[];
			
		foreach ($companyDetails as $username => $title) {
			
    		array_push($companyname,$title);
			 $studentqw = DB::table('coordinator')->where('username', $title)->pluck('img_url')->first();
			array_push($companyurl,$studentqw);
		}
return view('StudentDashboard',['student'=>$student,'companyname'=>$companyname ,'companyurl'=>$companyurl]);
	
}

	public function coordinatorDashboard(Request $request)
{	
  $student = DB::table('coordinator')->where('ID', Auth::User()->id)->first();	

return view('CoordinatorDashboard')-> with('coordinator',$coordinator);
	
}
	
public function UpdateInfo(Request $request)
	
{	$file = Input::file('filePDF');
	$fileName = Auth::User()->id.'.'.$request->$file->getClientOriginalExtension();
    $file->move(base_path().'/public/uploads/', $fileName);
  
	$student = DB::table('students')->where('Index_no', Auth::User()->id)->update(['GPA' => $request['updateGPA']],['description' => $request['updatedes']],['cv_url' => $fileName]);

return redirect()->back();
	
}
	
	
}

?>