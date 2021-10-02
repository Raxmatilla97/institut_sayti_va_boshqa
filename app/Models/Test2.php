<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Test2
 * @package App\Models
 * @version October 2, 2021, 10:29 am UTC
 *
 */
class Test2 extends Model
{


    public $table = 'test2';
    



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
