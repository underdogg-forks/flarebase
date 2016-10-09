<?php namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class StaffRepository extends BaseRepository
{
    public function model()
    {
        return 'App\Staff';
    }

}
