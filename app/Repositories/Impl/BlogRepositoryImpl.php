<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-03-01
 * Time: 13:37
 */

namespace App\Repositories\Impl;

use App\Blog;
use App\Repositories\BlogRepository;
use App\Repositories\Eloquent\EloquentRepository;

class BlogRepositoryImpl extends EloquentRepository implements BlogRepository
{
public function getModel()
{
 $model = Blog::class;
 return $model;
}
}