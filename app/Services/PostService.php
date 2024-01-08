<?php

namespace App\Services;

use App\Models\Post;

class PostService {
    public function getData() {
        $posts = Post::all();
        return $posts;
    }

    public function getDataById($id) {
        $posts = Post::findOrFail($id);
        return $posts;
    }

    public function storeData($data) {
        $newPosts = Post::create($data);
        return $newPosts;
    }

    public function updateData($id, $data) {
        $updatedPost = Post::where('id', $id)->update($data);
        return $updatedPost;
    }

    public function deleteData($id) {
        $deletedData = Post::findOrFail($id);
        $deletedData->delete();
        return $deletedData;
    }
}
