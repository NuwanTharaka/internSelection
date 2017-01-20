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

class UserController extends Controller
{


    public function checkdatabasequery()
    {

        $testDB = new functions();
        $testDB->testFunction();
        return view('welcome');
    }

    public function RegisterStudent(Request $request)
    {

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:3'
        ]);

        $student = new Student();
        $student->index_no = $request['Index_no'];
        $student->username = $request['username'];
        $student->password = bcrypt($request['password']);
        $student->email = $request['email'];
        $student->GPA = "non";
        $student->description = "not_assigned";
        $student->cv_url = "not_assigned";
        $student->save();
        $user = new User();
        $user->id = $request['Index_no'];
        $user->password = bcrypt($request['password']);
        $user->type = 'Student';
        $user->save();

    }

    public function RegisterCoordinator(Request $request)
    {

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = $request['Company_Name'] . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $Coordinator = new Coordinator();
        $Coordinator->ID = $request['Index_no'];
        $Coordinator->Company_Name = $request['Company_Name'];
        $Coordinator->username = $request['username'];
        $Coordinator->password = bcrypt($request['password']);
        $Coordinator->email = $request['email'];
        $Coordinator->img_url = $imageName;
        $Coordinator->save();
        $user = new User();
        $user->ID = $request['Index_no'];
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
            if (Auth::user()->type == "Student") {
                return redirect()->route('StudentDashboard');
            } elseif (Auth::user()->type == "Coordinator") {
                return redirect()->route('CompanyDashboard');
            } else {
                return redirect()->route('AdminDashboard');
            }

        } else {
            return view('userLogin', ['customMessage' => 'login failed, try again']);
        }
    }

    public function StudentDashboard(Request $request)
    {
        $student = DB::table('students')->where('index_no', Auth::User()->id)->first();
        $companyDetails = DB::table('studentcompany')
            ->leftJoin('coordinator', 'studentcompany.Company', '=', 'coordinator.company_name')
            ->where('StudentID', Auth::User()->id)->pluck('username', 'img_url');
        $companyname = [];
        $companyurl = [];

        foreach ($companyDetails as $username => $title) {

            array_push($companyname, $title);
            $studentqw = DB::table('coordinator')->where('username', $title)->pluck('img_url')->first();
            array_push($companyurl, $studentqw);
        }
        return view('StudentDashboard', ['student' => $student, 'companyname' => $companyname, 'companyurl' => $companyurl]);

    }

    public function coordinatorDashboard(Request $request)
    {
        $student = DB::table('coordinator')->where('ID', Auth::User()->id)->first();

        return view('CoordinatorDashboard')->with('coordinator', $coordinator);

    }

    public function UpdateInfo(Request $request)

    {
        $file = $request->file('filePDF');
        $fileName = Auth::User()->id . '.pdf';
        $file->move(base_path() . '/public/uploads/', $fileName);
        $student = DB::table('students')->where('index_no', Auth::User()->id)->first();
        $new_user_data = array('GPA' => $request['updateGPA'], 'description' => $request['updatedes'], 'description' => $request['updatedes'], 'cv_url' => '/uploads/' . $fileName);
        $student = DB::table('students')->where('index_no', $student->index_no)->update($new_user_data);

        return redirect()->back();

    }


//by salaka
    public function Data()
    {

        $func = new functions();
        $company = $func->getStudent();

        return view('Dashboard')->with('data', $company);

    }

    public function company(Request $request, $id)
    {


        $func = new functions();
        $company = $func->getCompany();

        $email = $func->getStudentemail($id);
        $GPA = $func->getStudentGPA($id);
        $description = $func->getStudentDescription($id);

        return view('studentCompany')->with('data', $company)->with('email', $email)->with('gpa', $GPA)->with('description', $description)->with('student_id', $id);


    }

    public function Save(Request $request)
    {

        $namelist = $request["check_list"];

        if (isset($request["check_list"])) {

            foreach ($namelist as $company) {
                DB::insert('insert into studentcompany (studentId, company) values (?, ?)', [$request['student_id'], $company]);

            }
            return redirect()->route('Data');

        }
        return "Failed";
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('/');
    }
}

?>