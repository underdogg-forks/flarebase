<?php namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class PermissionRepository extends BaseRepository
{
    public function model()
    {
        return 'App\Models\Permission';
    }

}
