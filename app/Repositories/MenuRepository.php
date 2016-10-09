<?php namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class MenuRepository extends BaseRepository
{
    public function model()
    {
        return 'App\Models\Menu';
    }

}
