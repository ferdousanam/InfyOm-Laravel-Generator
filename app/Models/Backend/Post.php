<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * @package App\Models\Backend
 * @version March 10, 2022, 11:22 am UTC
 *
 * @property integer $category_id
 * @property string $title
 * @property string $body
 */
class Post extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'posts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'category_id',
        'title',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'category_id' => 'integer',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required|string|max:255|string|max:255',
        'title' => 'required',
        'body' => 'nullable'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
