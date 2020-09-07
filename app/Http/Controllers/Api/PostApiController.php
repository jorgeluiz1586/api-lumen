<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\Post;

class PostApiController extends MasterApiController
{
    protected $model;
    protected $path = 'post';
    protected $upload = 'image';
    protected $width = 1280;
    protected $height = 720;
    protected $totalPage = 20;

    public function __construct(Post $posts, Request $request)
    {
        $this->model = $posts;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->model->paginate($this->totalPage);
        return response()->json($data);
    }
}