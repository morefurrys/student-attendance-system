<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Class_assigning
 * @package App\Models
 * @version April 12, 2021, 8:26 am UTC
 *
 * @property integer $schedule_id
 * @property integer $teacher_id
 */
class Class_assigning extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'class_assignings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'class_assign_id';

    public $fillable = [
        'schedule_id',
        'teacher_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_assign_id' => 'integer',
        'schedule_id' => 'integer',
        'teacher_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'schedule_id' => 'required|integer',
        'teacher_id' => 'required|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
