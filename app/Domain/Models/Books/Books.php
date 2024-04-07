<?php

namespace App\Domain\Wissen_books\Models;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['username', 'password_hash', 'email', 'role'];

    /**
     * Get the books associated with the user.
     */
    public function books()
    {
        return $this->belongsToMany('App\Domain\Books\Models\Book', 'user_books', 'user_id', 'book_id')
                    ->withPivot('status', 'read_date', 'abandon_date', 'rating')
                    ->withTimestamps();
    }

    /**
     * Add a book to user's collection.
     *
     * @param int $bookId
     * @param array $attributes
     * @return void
     */
    public function addBook($bookId, $attributes = [])
    {
        $this->books()->attach($bookId, $attributes);
    }

    /**
     * Remove a book from user's collection.
     *
     * @param int $bookId
     * @return void
     */
    public function removeBook($bookId)
    {
        $this->books()->detach($bookId);
    }

    /**
     * Update the reading status of a book.
     *
     * @param int $bookId
     * @param string $status
     * @param array $attributes
     * @return void
     */
    public function updateBookStatus($bookId, $status, $attributes = [])
    {
        $this->books()->updateExistingPivot($bookId, array_merge(['status' => $status], $attributes));
    }
}
