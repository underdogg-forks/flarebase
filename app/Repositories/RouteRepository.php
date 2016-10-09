<?php namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class RouteRepository extends BaseRepository
{
    public function model()
    {
        return 'App\Models\Route';
    }

}
