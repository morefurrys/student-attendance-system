<?php

namespace App\Repositories;

use App\Models\Time;
use App\Repositories\BaseRepository;

/**
 * Class TimeRepository
 * @package App\Repositories
 * @version March 28, 2021, 5:18 pm UTC
*/

class TimeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'time'
    ];
    protected $primaryKey = 'time_id';
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
        return Time::class;
    }
}
