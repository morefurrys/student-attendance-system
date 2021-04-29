<?php

namespace App\Repositories;

use App\Models\Class_assigning;
use App\Repositories\BaseRepository;

/**
 * Class Class_assigningRepository
 * @package App\Repositories
 * @version April 12, 2021, 8:26 am UTC
*/

class Class_assigningRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'schedule_id',
        'teacher_id'
    ];

    protected $primaryKey = 'class_assign_id';
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
        return Class_assigning::class;
    }
}
