<?php

namespace App\Repositories;

use App\Models\Status;
use App\Repositories\BaseRepository;

/**
 * Class StatusRepository
 * @package App\Repositories
 * @version April 27, 2021, 4:41 pm UTC
*/

class StatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'teacher_id'
    ];
    protected $primaryKey = 'status_id';
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
        return Status::class;
    }
}
