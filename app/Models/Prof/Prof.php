<?php

namespace App\Models\Prof;

use Eloquent as Model;



/**
 * Class Prof
 * @package App\Models\Prof
 * @version October 2, 2021, 9:49 am UTC
 *
 * @property string $name
 * @property string $title
 */
class Prof extends Model
{


    public $table = 'prof';
    



    public $fillable = [
        'name',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'title' => 'required'
    ];

    
}
