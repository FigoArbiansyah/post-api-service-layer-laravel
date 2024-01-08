<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponseHelper;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $posts;

    public function __construct(PostService $postService) {
        $this->posts = $postService;
    }

    public function index() {
        $posts = $this->posts->getData();
        return ApiResponseHelper::success(200, "Berhasil mendapatkan data postingan!", $posts);
    }

    public function store(PostRequest $request) {
        try {
            $post =  $this->posts->storeData($request->validated());
            return ApiResponseHelper::success(201, 'Berhasil menambahkan data!', $post);
        } catch (\Exception $e) {
            return ApiResponseHelper::error(500, 'Gagal menambahkan data!', $e->getMessage());
        }
    }

    public function update($id, PostRequest $request) {
        try {
            $post = $this->posts->updateData($id, $request->validated());
            if ($post) {
                $postDetail = $this->posts->getDataById($id);
                return ApiResponseHelper::success(200, 'Berhasil mengubah data!', $postDetail);
            }
        } catch (\Exception $e) {
            return ApiResponseHelper::error(500, 'Gagal mengubah data!', $e->getMessage());
        }
    }

    public function delete($id) {
        try {
            $post = $this->posts->deleteData($id);
            if ($post) {
                return ApiResponseHelper::success(200, 'Berhasil menghapus data!', null);
            }
        } catch (\Exception $e) {
            return ApiResponseHelper::error(500, 'Gagal menghapus data!', $e->getMessage());
        }
    }
}
