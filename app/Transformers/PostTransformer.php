<?php

namespace App\Transformers;

use App\Post;
use App\Transformers\UserTransformer;
use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'author'
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Post $post)
    {
        return [
            'id' => $post->id,
            'body' => $post->body
        ];
    }

    public function includeAuthor(Post $post)
    {
        return $this->item($post->user, new UserTransformer);
    }
}
