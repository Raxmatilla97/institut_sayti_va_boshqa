<?php

namespace App\Repositories;

use App\Models\Test2;
use App\Repositories\BaseRepository;

/**
 * Class Test2Repository
 * @package App\Repositories
 * @version October 2, 2021, 10:29 am UTC
*/

class Test2Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

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
        return Test2::class;
    }
}
