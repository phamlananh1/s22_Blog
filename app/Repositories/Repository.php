<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-03-01
 * Time: 09:26
 */

namespace App\Repositories;


interface Repository
{
public function all();
public function create($data);
public function update($data, $object);
public function destroy($object);
public function find($id);
}