<?php

namespace App\Service\Post;

use App\Dao\Post\PostDao;
use App\Contract\Service\Post\PostServiceInterface;

class postService implements PostServiceInterface
{
    protected $postDao;

    public function __construct(PostDao $post_dao)
    {
        $this->postDao = $post_dao;
    }

    /**
     * store data
     */
    public function storeCollectData($data)
    {
        $this->postDao->storeCollectData($data);
    }

    /** 
     * get post list
     */
    public function getPostList($searchData)
    {
       return $this->postDao->getPostList($searchData);
    }

    /**
     * guest post
     */
    public function guestPost($searchData)
    {
        return $this->postDao->guestPost($searchData);
    }

    /**
     * delete post
     */
    public function deletePost($id)
    {
        return $this->postDao->deletePost($id);
    }

    /**
     * search data
     */
    // public function search($searchData)
    // {
    //     return $this->postDao->search($searchData);
    // }

    /**
     * find post for update
     */
    public function findPostById($id)
    {
        return $this->postDao->findPostById($id);
    }

    /**
     * update post
     */
    public function updatePost($data , $id)
    {
        return $this->postDao->updatePost($data, $id);
    }

    /**
     * show post detail
     */
    // public function showDetail($id)
    // {
    //     return $this->postDao->showDetail($id);
    // }

    public function getDetail($id)
    {
        return $this->postDao->getDetail($id);
    }

}

