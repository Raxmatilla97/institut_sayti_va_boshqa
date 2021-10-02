<?php

namespace App\Repositories;

use App\Models\Elonlar;
use App\Repositories\BaseRepository;

/**
 * Class ElonlarRepository
 * @package App\Repositories
 * @version October 2, 2021, 6:03 am UTC
*/

class ElonlarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'img',
        'desc'
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
        return Elonlar::class;
    }
}
