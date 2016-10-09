<?php namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class RoleRepository extends BaseRepository
{

    public function model()
    {
        return 'App\Models\Role';
    }

}
