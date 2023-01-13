<?php

namespace App\Models;

use App\Models\Relationships\TagRelationship;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Tag.
 *
 * @package namespace App\Models;
 */
class Tag extends Model implements Transformable
{
    use TransformableTrait, TagRelationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

}
