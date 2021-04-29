<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClass_assigningRequest;
use App\Http\Requests\UpdateClass_assigningRequest;
use App\Repositories\Class_assigningRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use Validator;
use App\Models\Teacher;
use App\Models\Class_assigning;
use App\Models\Status;
use App\Models\Batch;
use App\Models\Classes;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Day;
use App\Models\Level;
use App\Models\Shift;
use App\Models\Time;
use App\Models\Semester;
use App\Models\Schedule;

class Class_assigningController extends AppBaseController
{
    /** @var  Class_assigningRepository */
    private $classAssigningRepository;

    public function __construct(Class_assigningRepository $classAssigningRepo)
    {
        $this->classAssigningRepository = $classAssigningRepo;
    }

    /**
     * Display a listing of the Class_assigning.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classAssignings = $this->classAssigningRepository->all();

        $teacher = Teacher::get();
        //dd($teacher);die;
        $schedules = Schedule::join('batches','batches.batch_id', '=', 'schedules.batch_id') 
        ->join('classes','classes.class_id', '=', 'schedules.class_id')
        ->join('classrooms','classrooms.classroom_id', '=', 'schedules.classroom_id')
        ->join('courses','courses.course_id', '=', 'schedules.course_id')
        ->join('days','days.day_id', '=', 'schedules.day_id')
        ->join('levels','levels.level_id', '=', 'schedules.level_id')
        ->join('shifts','shifts.shift_id', '=', 'schedules.shift_id')
        ->join('times','times.time_id', '=', 'schedules.time_id')
        ->join('semesters','semesters.semester_id', '=', 'schedules.semester_id')
        ->get();

        $classAssignings = Class_assigning::join('schedules','schedules.schedule_id', '=', 'class_assignings.schedule_id') 
        ->join('teachers','teachers.teacher_id', '=', 'class_assignings.teacher_id')
        ->join('classes','classes.class_id', '=', 'schedules.class_id')
        ->join('batches','batches.batch_id', '=', 'schedules.batch_id')
        ->join('classrooms','classrooms.classroom_id', '=', 'schedules.classroom_id')
        ->join('courses','courses.course_id', '=', 'schedules.course_id')
        ->join('days','days.day_id', '=', 'schedules.day_id')
        ->join('levels','levels.level_id', '=', 'schedules.level_id')
        ->join('shifts','shifts.shift_id', '=', 'schedules.shift_id')
        ->join('times','times.time_id', '=', 'schedules.time_id')
        ->join('semesters','semesters.semester_id', '=', 'schedules.semester_id')
        ->paginate(3);
        //->get();

        return view('class_assignings.index',compact('schedules','teacher'))
            ->with('classAssignings', $classAssignings);
    }

    public function insert(Request $request){

        $validator = Validator::make($request->all(), [
            'teacher_id' => 'required',
        ]);
    
        if ($validator->fails()) {
            Flash::error('Teachers name required');
            return redirect(route('classAssignings.index'));
        }


        $input = $request->all();

        $teacher = new Status;
        $teacher->teacher_id = $request->teacher_id;
        $status_id = $teacher->save();
        if ($status_id!=0){
            foreach($request->multiclass as $key =>$teach){
                $data2 = array('teacher_id'=>$request->teacher_id,
                                'schedule_id'=>$request->multiclass[$key]);

                $checkExist = Class_assigning::where('teacher_id',$request->teacher_id)
                                              ->where('schedule_id',$request->multiclass)
                                              ->first();
                if($checkExist){
                    Flash::error('Class Assigning for this teacher already exist');
                    return redirect(route('classAssignings.index'));
                }//else
                Class_assigning::insert($data2);
            }
        }
        Flash::success('Class Assigning generated successfully.');

        return redirect(route('classAssignings.index'));
    }

    public function classassign_validation(){
        $rules=[
            'teacher_id'=>'required'
        ];
    }

    /**
     * Show the form for creating a new Class_assigning.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_assignings.create');
    }

    /**
     * Store a newly created Class_assigning in storage.
     *
     * @param CreateClass_assigningRequest $request
     *
     * @return Response
     */
    public function store(CreateClass_assigningRequest $request)
    {
        $input = $request->all();

        $classAssigning = $this->classAssigningRepository->create($input);

        Flash::success('Class Assigning saved successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Display the specified Class_assigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.show')->with('classAssigning', $classAssigning);
    }

    /**
     * Show the form for editing the specified Class_assigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {$teacher = Teacher::get();

        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.edit',compact('teacher'))->with('classAssigning', $classAssigning);
    }

    /**
     * Update the specified Class_assigning in storage.
     *
     * @param int $id
     * @param UpdateClass_assigningRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClass_assigningRequest $request)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        $classAssigning = $this->classAssigningRepository->update($request->all(), $id);

        Flash::success('Class Assigning updated successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Remove the specified Class_assigning from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        $this->classAssigningRepository->delete($id);

        Flash::success('Class Assigning deleted successfully.');

        return redirect(route('classAssignings.index'));
    }
}
