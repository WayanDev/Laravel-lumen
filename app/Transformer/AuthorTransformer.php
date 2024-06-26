<?php

namespace App\Transformer;

use App\Models\Author;
use League\Fractal\TransformerAbstract;

class AuthorTransformer extends TransformerAbstract
{
    protected array $availableIncludes = [
        'books'
    ];

    public function includeBooks(Author $author)
    {
        return $this->collection($author->books, new BookTransformer());
    }
    /**
     * Transform an author model
     *
     * @param Author $author
     * @return array
     */
    public function transform(Author $author): array
    {
        return [
            'id' => $author->id,
            'name' => $author->name,
            'gender' => $author->gender,
            'biography' => $author->biography,
            'created' => $author->created_at->toIso8601String(),
            'updated' => $author->created_at->toIso8601String(),
        ];
    }
}
