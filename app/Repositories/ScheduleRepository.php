<?php

namespace App\Repositories;

use App\Models\Schedule;
use App\Repositories\BaseRepository;

/**
 * Class ScheduleRepository
 * @package App\Repositories
 * @version April 12, 2021, 3:35 pm UTC
*/

class ScheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'class_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        'semester_id',
        'start_date',
        'end_date',
        'status'
    ];
    protected $primaryKey = 'schedule_id';
    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Schedule::class;
    }
}
