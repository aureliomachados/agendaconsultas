<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Article
 * @package App\Models
 * @version April 26, 2021, 9:23 pm UTC
 *
 * @property string $title
 * @property string $description
 */
class Article extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'articles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    
}
