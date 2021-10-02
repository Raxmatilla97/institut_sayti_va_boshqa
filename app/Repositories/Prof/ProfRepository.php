<?php

namespace App\Repositories\Prof;

use App\Models\Prof\Prof;
use App\Repositories\BaseRepository;

/**
 * Class ProfRepository
 * @package App\Repositories\Prof
 * @version October 2, 2021, 9:49 am UTC
*/

class ProfRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'title'
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
        return Prof::class;
    }
}
