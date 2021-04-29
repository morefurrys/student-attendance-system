<?php

namespace App\Repositories;

use App\Models\Department;
use App\Repositories\BaseRepository;

/**
 * Class DepartmentRepository
 * @package App\Repositories
 * @version April 17, 2021, 5:14 pm UTC
*/

class DepartmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'faculty_id',
        'department_name',
        'department_code',
        'department_description',
        'department_status'
    ];
    protected $primaryKey = 'department_id';
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
        return Department::class;
    }
}
