<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-03-01
 * Time: 11:01
 */

namespace App\Repositories\Eloquent;


use App\Repositories\Repository;

abstract class EloquentRepository implements Repository
{
    protected $model;
    public  function __construct()
    {
        $this->setModel();

    }
    abstract public function getModel();


    public function setModel(){
        $this->model = app()->make($this->getModel());
    }

    public function all(){
        $result = $this->model->all();
        return $result;
    }
    public function create($data){
        try {
            $object = $this->model->create($data);
        } catch (\Exception $exception) {
            return null;
        }
        return $object;

    }

    public function update($data, $object)
    {
       $object->update($data);
       return $object;


    }
    public function destroy($object)
    {
      $object->delete();
    }


    public function find($id)
    {
        $result = $this->model->find($id);
        return $result;
    }

}