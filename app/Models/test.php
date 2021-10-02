<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Test
 * @package App\Models
 * @version October 2, 2021, 10:27 am UTC
 *
 */
class Test extends Model
{


    public $table = 'test';
    



    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
