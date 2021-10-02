<?php

namespace App\Repositories;

use App\Models\tryrtyrt;
use App\Repositories\BaseRepository;

/**
 * Class tryrtyrtRepository
 * @package App\Repositories
 * @version October 2, 2021, 9:47 am UTC
*/

class tryrtyrtRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'trrt',
        'tttt'
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
        return tryrtyrt::class;
    }
}
