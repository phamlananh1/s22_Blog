<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2019-03-01
 * Time: 13:50
 */

namespace App\Services\Impl;


use App\Repositories\BlogRepository;
use App\Services\BlogService;

class BlogServiceImpl implements BlogService
{
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function all()
    {
        $blogs = $this->blogRepository->all();
        return $blogs;
    }

    public function crerate($request)
    {
        $blog = $this->blogRepository->create($request);
        $statusCode  = 201;
        if (!$blog){
            $statusCode = 500;
        }
        $data = [
            'statusCode' => $statusCode,
            'blogs' => $blog
        ];
        return $data;
    }

    public function update($request, $id)
    {
        $oldBlog = $this->blogRepository->find($id);
        if (!$oldBlog){
            $newBlog = null;
            $statusCode = 404;
        } else {
            $newBlog = $this->blogRepository->update($request, $oldBlog);
            $statusCode = 200;
        }
        $data =[
            'statusCode' => $statusCode,
            'blogs' => $newBlog
        ];
        return $data;
    }

    public function destroy($id)
    {
        $blog =$this->blogRepository->find($id);
        $statusCode = 404;
        $message = "Use not found";
        if ($blog){
            $this->blogRepository->destroy($blog);
            $statusCode = 200;
            $message = "Delete success";
        }
        $data = [
            'statusCode' =>$statusCode,
            'message' =>$message
        ];
        return $data;
    }

    public function find($id)
    {
        $blog = $this->blogRepository->find($id);
        $statusCode = 200;
        if (!$blog)
            $statusCode = 404;
        $data = [
            'statusCode' => $statusCode,
            'blogs' => $blog
        ];
        return $data;
    }
}