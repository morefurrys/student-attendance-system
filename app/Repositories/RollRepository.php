<?php

namespace App\Repositories;

use App\Models\Roll;
use App\Repositories\BaseRepository;

/**
 * Class RollRepository
 * @package App\Repositories
 * @version April 21, 2021, 5:27 am UTC
*/

class RollRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'username',
        'password',
        'login_time',
        'logout_time'
    ];
    protected $primaryKey = 'roll_id';
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
        return Roll::class;
    }
}
