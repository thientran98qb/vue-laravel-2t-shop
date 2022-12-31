<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\QuizzRepository;
use App\Entities\Quizz;
use App\Validators\QuizzValidator;

/**
 * Class QuizzRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class QuizzRepositoryEloquent extends BaseRepository implements QuizzRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Quizz::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
