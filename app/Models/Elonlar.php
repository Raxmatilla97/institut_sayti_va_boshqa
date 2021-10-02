<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Elonlar
 * @package App\Models
 * @version October 2, 2021, 6:03 am UTC
 *
 * @property string $title
 * @property string $slug
 * @property string $img
 * @property string $desc
 */
class Elonlar extends Model
{

    use HasFactory;

    public $table = 'elonlar';
    



    public $fillable = [
        'title',
        'slug',
        'img',
        'desc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
