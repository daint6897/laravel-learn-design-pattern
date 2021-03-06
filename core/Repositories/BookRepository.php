<?php

namespace Core\Repositories;

use App\Models\Book;

class BookRepository extends BaseRepository implements BookRepositoryContract
{
    // protected $model = Book::class;
    protected $model = "App\Models\Book";
    public function paginate()
    {
        $instance = $this->getNewInstance();
        return $instance->paginate(1);
    }
}
