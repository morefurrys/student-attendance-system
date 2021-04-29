<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Repositories\ScheduleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;

//adding our models classes
use App\Models\Batch;
use App\Models\Classes;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Day;
use App\Models\Level;
use App\Models\Shift;
use App\Models\Time;
use App\Models\Semester;

class ScheduleController extends AppBaseController
{
    /** @var  ScheduleRepository */
    private $scheduleRepository;

    public function __construct(ScheduleRepository $scheduleRepo)
    {
        $this->scheduleRepository = $scheduleRepo;
    }

    /**
     * Display a listing of the Schedule.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //calles all batch from batch table but we are using modal
        $batch = Batch::all();
        $classes = Classes::all();
        $classroom = Classroom::all();
        $course = Course::all();
        $day = Day::all();
        $level = Level::all();
        $shift = Shift::all();
        $time = Time::all();
        $semester = Semester::all();

       //we are checking if we have all our data
        //dd($batch);die; 


        $schedules = $this->scheduleRepository->all();

        $schedules = DB::table('schedules')
        

        ->select('batches.*','classes.*','classrooms.*','courses.*','days.*','levels.*','shifts.*','times.*','semesters.*','schedules.*')

        ->join('batches','batches.batch_id', '=', 'schedules.batch_id')
        ->join('classes','classes.class_id', '=', 'schedules.class_id')
        ->join('classrooms','classrooms.classroom_id', '=', 'schedules.classroom_id')
        ->join('courses','courses.course_id', '=', 'schedules.course_id')
        ->join('days','days.day_id', '=', 'schedules.day_id')
        ->join('levels','levels.level_id', '=', 'schedules.level_id')
        ->join('shifts','shifts.shift_id', '=', 'schedules.shift_id')
        ->join('times','times.time_id', '=', 'schedules.time_id')
        ->join('semesters','semesters.semester_id', '=', 'schedules.semester_id')

        ->get();
        
        return view('schedules.index',compact('batch','classes','classroom','course',
           'day','level','shift','time','semester'))
            ->with('schedules', $schedules );
    }

    /**  
    * dynamicLevel function
    */
    public function DynamicLevel(Request $request)
    {
        $course_id = $request->get('course_id');
        $levels = Level::where('course_id', '=', $course_id)->get();

        return Response::json($levels);
    }

    /**
     * Show the form for creating a new Schedule.
     *
     * @return Response
     */
    public function create()
    {
        $batch = Batch::all();
        $classes = Classes::all();
        $classroom = Classroom::all();
        $course = Course::all();
        $day = Day::all();
        $level = Level::all();
        $shift = Shift::all();
        $time = Time::all();
        $semester = Semester::all();
        

        return view('schedules.create',compact('batch','classes','classroom','course',
           'day','level','shift','time','semester'));
    }

    /**
     * Store a newly created Schedule in storage.
     *
     * @param CreateScheduleRequest $request
     *
     * @return Response
     */
    public function store(CreateScheduleRequest $request)
    {

        $input = $request->all();

        $schedule = $this->scheduleRepository->create($input);

        Flash::success('Schedule saved successfully.');

        return redirect(route('schedules.index'));
    }

    /**
     * Display the specified Schedule.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $batch = Batch::all();
        $classes = Classes::all();
        $classroom = Classroom::all();
        $course = Course::all();
        $day = Day::all();
        $level = Level::all();
        $shift = Shift::all();
        $time = Time::all();
        $semester = Semester::all();

        $schedule = $this->scheduleRepository->find($id);

        if (empty($schedule)) {
            Flash::error('Schedule not found');

            return redirect(route('schedules.index'));
        }

        return view('schedules.show',compact('batch','classes','classroom','course',
           'day','level','shift','time','semester'))->with('schedule', $schedule);
    }

    /**
     * Show the form for editing the specified Schedule.
     *
     * @param int $id
     *
     * @return Response
     */
    // public function edit(Request $request)
    // {

    //     if($request->ajax()){
    //         return response(Schedule::find($request->id));
    //         //fetching data from model
    //     }
    // }


    public function edit($id)
    {
        $batch = Batch::all();
        $classes = Classes::all();
        $classroom = Classroom::all();
        $course = Course::all();
        $day = Day::all();
        $level = Level::all();
        $shift = Shift::all();
        $time = Time::all();
        $semester = Semester::all();

        $schedule = $this->scheduleRepository->find($id);



        if (empty($schedule)) {
            Flash::error('Schedule not found');

            return redirect(route('schedules.index'));
        }


        return view('schedules.edit',compact('batch','classes','classroom','course',
        'day','level','shift','time','semester'))->with('schedule', $schedule);
    }

    /**
     * Update the specified Schedule in storage.
     *
     * @param int $id
     * @param UpdateScheduleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateScheduleRequest $request)
    {
        $schedule = $this->scheduleRepository->find($id);

        if (empty($schedule)) {
            Flash::error('Schedule not found');

            return redirect(route('schedules.index'));
        }

        $schedule = $this->scheduleRepository->update($request->all(), $id);

        Flash::success('Schedule updated successfully.');

        return redirect(route('schedules.index'));
    }

    /**
     * Remove the specified Schedule from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $schedule = $this->scheduleRepository->find($id);

        if (empty($schedule)) {
            Flash::error('Schedule not found');

            return redirect(route('schedules.index'));
        }

        $this->scheduleRepository->delete($id);

        Flash::success('Schedule deleted successfully.');

        return redirect(route('schedules.index'));
    }
}
