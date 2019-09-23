<?php

namespace StKevich\Blog\Domain\Post;

/**
 * Interface PostRepositoryInterface
 * @package StKevich\Domain\Post
 */
interface PostRepositoryInterface
{

    /**
     * @param int $id
     * @return Post
     */
    public function getById(int $id): Post;

    /**
     * @param string $url
     * @return Post
     */
    public function getByUrl(string $url): Post;

    /**
     * @param PostSpecificationInterface $spec
     * @return PostCollection
     */
    public function find(PostSpecificationInterface $spec): PostCollection;

    /**
     * @param Post $post
     * @return mixed
     */
    public function persist(Post $post);

}
