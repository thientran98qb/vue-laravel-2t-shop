<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Models\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository{

    /**
     * @return string
     */
    public function model()
    {
        return Admin::class;
    }

    public function getListUser()
    {
        $query = $this->model->select(
            'name',
            'email',
            'phone',
            'status'
        );

        return $query->orderByDesc('created_at')->get();
    }
}
