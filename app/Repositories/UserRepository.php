<?php

namespace App\Repositories;

use App\Models\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository{
    /**
     * @return string
     */
    public function model()
    {
        return User::class;
    }
}
