<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-03-01
 * Time: 13:46
 */

namespace App\Services;


interface BlogService
{
public function all();
public function crerate($request);
public function update($request, $id);
public function destroy($id);
public function find($id);
}