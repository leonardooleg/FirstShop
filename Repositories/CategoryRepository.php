<?php

namespace App\Repositories;

use App\Models\Category as Model;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllWithPaginate()
    {
        $colums=[
            'id','title','parent_id'
        ];
        $result=$this->startConditions()
                    ->select($colums)
                    ->orderBy('id','DESC')
                    ->with([
                        'category'=>function($query){
                            $query->select(['id','title']);
                        }
                    ])->paginate(30);
        return $result;
    }
}
