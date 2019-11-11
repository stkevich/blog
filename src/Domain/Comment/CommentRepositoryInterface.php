<?php

namespace StKevich\Blog\Domain\Comment;

/**
 * Interface CommentRepositoryInterface
 * @package StKevich\Blog\Domain\Post
 */
interface CommentRepositoryInterface
{

    /**
     * @param int $id
     * @return Comment
     */
    public function getById(int $id): Comment;

    /**
     * @param string $url
     * @return Comment
     */
    public function getByUrl(string $url): Comment;

    /**
     * @param CommentSpecificationInterface $spec
     * @return CommentCollection
     */
    public function find(CommentSpecificationInterface $spec): CommentCollection;

    /**
     * @param Comment $post
     * @return mixed
     */
    public function persist(Comment $post);

}
