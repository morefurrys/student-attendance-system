<?php

namespace App\Repositories;

use App\Models\Semester;
use App\Repositories\BaseRepository;

/**
 * Class SemesterRepository
 * @package App\Repositories
 * @version April 5, 2021, 1:24 pm UTC
*/

class SemesterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'semester_name',
        'semester_code',
        'semester_duration',
        'semester_description'
    ];
    protected $primaryKey = 'semester_id';
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
        return Semester::class;
    }
}
