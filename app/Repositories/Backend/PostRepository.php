<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Post;
use App\Repositories\BaseRepository;

/**
 * Class PostRepository
 * @package App\Repositories\Backend
 * @version March 10, 2022, 11:22 am UTC
*/

class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
        'title',
        'body'
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
        return Post::class;
    }
}
