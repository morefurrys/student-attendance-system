<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdmissionRequest;
use App\Http\Requests\UpdateAdmissionRequest;
use App\Repositories\AdmissionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use App\Models\Admission;
use App\Models\Faculty;
use App\Models\Department;
use App\Models\Roll;
use App\Models\Batch;

class AdmissionController extends AppBaseController
{
    /** @var  AdmissionRepository */
    private $admissionRepository;

    public function __construct(AdmissionRepository $admissionRepo)
    {
        $this->admissionRepository = $admissionRepo;
    }

    /**
     * Display a listing of the Admission.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$admissions = $this->admissionRepository->all();

        $student_id = Roll::max('roll_id');
        $faculties = Faculty::all();
        $departments = Department::all();
        $batches = Batch::all();
        $admissions = Admission::join('faculties','faculties.faculty_id','admissions.faculty_id')
                                ->join('departments','departments.department_id','admissions.department_id')
                                ->join('batches','batches.batch_id','admissions.batch_id')
                                ->get();

        return view('admissions.index',compact('admissions','student_id','faculties','departments','batches'))
            ->with('admissions', $admissions);
    }

    /**
     * Show the form for creating a new Admission.
     *
     * @return Response
     */
    public function create()
    {
        $admissions = Admission::all();
        $student_id = Admission::max('id');
        $roll_id = Roll::max('roll_id');
        $faculties = Faculty::all();
        $departments = Department::all();
        $batches = Batch::all();
        $rand_username_password = mt_rand(1751111100 .($student_id + 1),1751111100 .($student_id + 1));

        return view('admissions.create',compact('admissions','student_id','faculties','departments','batches','roll_id','rand_username_password'));
    }

    /**
     * Store a newly created Admission in storage.
     *
     * @param CreateAdmissionRequest $request
     *
     * @return Response
     */
    public function store(CreateAdmissionRequest $request)
    {
        $input = $request->all();

        // $admission = $this->admissionRepository->create($input);
        $file = $request->file('image');

        $extension = $file->getClientOriginalExtension();

        //gererating random alphaumeric string for images being stored
        $new_image_name = substr(sha1(time()), 0, 16) . '.' . $extension;

        //will move our image in public folder by creating folder (student_images) and store them
        $file->move(\public_path('student_images'), $new_image_name);

        $admission = new Admission; //for fillable function in models
        $admission->roll_no = $request->roll_no;
        $admission->first_name = $request->first_name;
        $admission->last_name = $request->last_name;
        $admission->father_name = $request->father_name;
        $admission->father_phone = $request->father_phone;
        $admission->mother_name = $request->mother_name;
        $admission->gender = $request->gender;
        $admission->email = $request->email;
        $admission->dob = $request->dob;
        $admission->phone = $request->phone;
        $admission->address = $request->address;
        $admission->current_address = $request->current_address;
        $admission->nationality = $request->nationality;
        $admission->passport = $request->passport;
        $admission->status = $request->status;
        $admission->date_registered = date('Y-m-d');
        $admission->user_id = Auth::id();
        $admission->department_id = $request->department_id;
        $admission->faculty_id = $request->faculty_id;
        $admission->batch_id = $request->batch_id;
        $admission->image = $request->new_image_name;

        if($admission->save()){
            $student_id = $admission->id;
            $username = $admission->username;
            $password = $admission->password;

            Roll::insert(['student_id'=> $student_id, 
                        'username'=>$request->username, 
                        'password'=>$request->password]);
                        //dump($request->all());die;
        }

        Flash::success('Admission saved successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Display the specified Admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.show')->with('admission', $admission);
    }

    /**
     * Show the form for editing the specified Admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $admission = $this->admissionRepository->find($id);

        $admissions = Admission::all();
        $student_id = Admission::max('id');
        $roll_id = Roll::max('roll_id');
        $faculties = Faculty::all();
        $departments = Department::all();
        $batches = Batch::all();
        $rand_username_password = mt_rand(1751111100 .($student_id + 1),1751111100 .($student_id + 1));
        
        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.edit',compact('rand_username_password','admissions','student_id','faculties','departments','batches','roll_id'))->with('admission', $admission);
    }

    /**
     * Update the specified Admission in storage.
     *
     * @param int $id
     * @param UpdateAdmissionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdmissionRequest $request)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        $admission = $this->admissionRepository->update($request->all(), $id);

        Flash::success('Admission updated successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Remove the specified Admission from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        $this->admissionRepository->delete($id);

        Flash::success('Admission deleted successfully.');

        return redirect(route('admissions.index'));
    }
}
