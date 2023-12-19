<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // Specify the table name for the Todo model
    use HasFactory;
    // Define the fillable attributes for mass assignment
    protected $table = 'todos';
    protected $fillable = ['tittle', 'description', 'is_completed'];

    /**
     * Define a relationship between Todo and User models.
     *
     * A Todo belongs to a User, indicating that each todo is associated with a specific user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
