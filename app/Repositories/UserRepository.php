<?php

namespace App\Repositories;

use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

class UserRepository
{
    protected $model;

    public function __construct(\App\Models\User $model)
    {
        $this->model = $model;
    }
};
