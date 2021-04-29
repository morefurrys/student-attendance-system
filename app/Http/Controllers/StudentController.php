<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Models\Roll;
use App\Models\Admission;
use Flash;
use Session;

class StudentController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     * 
     */
    public function index(){

    }
    
    
    public function studentBiodata(Request $request){

        $students = Roll::join('admissions','admissions.id','=','rolls.student_id')
        ->where(['username' =>Session::get('studentSession')])->first();
        return view('students.lectures.biodata',compact('students'));
    }

    public function studentChooseCourse(Request $request){

        return view('students.lectures.choose-course');
    }

    public function studentLectureCalender(Request $request){

        return view('students.lectures.calender');
    }

    public function studentLogin(Request $request){

        return view('students.login');
    }

    public function LoginStudent(Request $request){

        if($request->isMethod('post')){

            $student = $request->all();
            $studentCount = Roll::where([
                'username'=>$student['username'],
                'password'=>$student['password']])
                ->count();

                if($studentCount > 0){
                    Session::put('studentSession',$student['username']);
                    Flash::success('Welcome'.'-'. $student['username']);
                    return redirect('/account');
                }
                else{
                    
                    Flash::error('Your Username or Password is Incorrect');
                    return redirect('/student');
                }
        }
        
    }

    public function verifyPassword(Request $request){

        $students = $request->all();

        $validStudent = Roll::where(['username'=>Session::get('studentSession'),'password'=>$students['old_password']])->count();

        if($validStudent==1){
           // Flash::success('Your Username is correct');
           echo "true";die;
        }else{
            //Flash::error('Your Username is incorrect');
            echo "false";die;

        }

        //return view('students.lectures.biodata',compact('students'));
    }

    public function changePassword(Request $request){

        $student = $request->all();
        $students = Admission::where('email',$student['email'])->first();
        //dd($students);die;

        $studentCount = Roll::where(['username'=>Session::get('studentSession'),'password'=>$student['old_password']])->count();

        if($studentCount==1){
            $new_password = $student['new_password'];
            Roll::where('username', Session::get('studentSession'))
            ->update(['password'=>$new_password]);

            Flash::success('You have successfully change your password');
            return redirect()->back();
        }else{

            Flash::error('Password failed to update');
            return redirect()->back();
        }
    }

    public function getForgotPassword(){


        return view('students.forgot-password');
    }

    public function forgotPassword(Request $request){

        $data = $request->all();
        $studentCount = Admission::where('email',$data['email'])->count();

        if($studentCount==0){
            Flash::error('we cannot find a student with that Email address');
            return redirect()->back();
        }

         Session::put('studentSession');

         //get the first student email
         $students = Admission::where('email',$data['email'])->first();
         //dd($students);die;
         $ran_password = str::rand(12);

         $new_password = $ran_password;
         Roll::where('username', Session::get('studentSession'))->update(['password'=>$new_password]);
         $email=$data['email'];
         $student_name = $student->first_name;
         $message = [
             'email'=> $email,
             'first_name' => $student_name,
             'password'=> $ran_password

         ];

         Mail::send('emails.forgot-password', $message, function($message)use($email){
             $message->to($email)->subject('Password Reset - Wenzhou University Information System');
         });

         Flash::success('We have sent a link to' . $data['email'] . 'to reset your password');
         //return redirect()->back();

         return view('students.login');

    }

    public function account(){
        if(Session::has('studentSession')){
            $student = Admission::all();
            
        }
        else{
            return redirect('/student')->with('error','Please Login to have access');
        }


        return view('students.account',compact('student'));
    }
        /**
     * @return \Illuminate\Http\Response
     * 
     */
    public function create(){

    }


}
