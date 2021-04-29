<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Attendance
 * @package App\Models
 * @version April 29, 2021, 7:24 am UTC
 *
 * @property integer $student_id
 * @property integer $class_id
 * @property integer $course_id
 * @property integer $teacher_id
 * @property integer $semester_id
 * @property string $attendance_date
 * @property integer $edit_date
 * @property string $day
 * @property string $month
 * @property integer $year
 * @property string $attendance_status
 */
class Attendance extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'attendances';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primarykey = 'attendance_id';

    public $fillable = [
        'student_id',
        'class_id',
        'course_id',
        'teacher_id',
        'semester_id',
        'attendance_date',
        'edit_date',
        'day',
        'month',
        'year',
        'attendance_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'attendance_id' => 'integer',
        'student_id' => 'integer',
        'class_id' => 'integer',
        'course_id' => 'integer',
        'teacher_id' => 'integer',
        'semester_id' => 'integer',
        'attendance_date' => 'string',
        'edit_date' => 'integer',
        'day' => 'string',
        'month' => 'string',
        'year' => 'integer',
        'attendance_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required|integer',
        'class_id' => 'required|integer',
        'course_id' => 'required|integer',
        'teacher_id' => 'required|integer',
        'semester_id' => 'required|integer',
        'attendance_date' => 'required|string|max:255',
        'edit_date' => 'required|integer',
        'day' => 'required|string|max:255',
        'month' => 'required|string|max:255',
        'year' => 'required|integer',
        'attendance_status' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
