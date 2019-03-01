<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;
    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }
    public function index()
    {
        $blogs = $this->blogService->all();
        return response()->json($blogs, 200);
    }

    public function show($id)
    {
        $dataBlog = $this->blogService->find($id);
        return response()->json($dataBlog['blogs'], $dataBlog['statusCode']);
    }

    public function store(Request $request)
    {
        $dataBlog = $this->blogService->crerate($request->all());
        return response()->json($dataBlog['blogs'], $dataBlog['statusCode']);
    }
    public function update(Request $request, $id)
    {
        $dataBlog = $this->blogService->update($request->all(), $id);
        return response()->json($dataBlog['blogs'], $dataBlog['statusCode']);
    }
    public function destroy($id)
    {
        $dataBlog = $this ->blogService->destroy($id);
        return response()->json($dataBlog['massage'], $dataBlog['statusCode']);
    }
}
