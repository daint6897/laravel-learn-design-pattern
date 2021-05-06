<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\country
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\countryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|country query()
 * @mixin \Eloquent
 */
class Country extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
}
