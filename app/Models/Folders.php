<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Folders
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Folders newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Folders newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Folders query()
 * @method static \Illuminate\Database\Eloquent\Builder|Folders whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folders whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folders whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Folders whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Folders extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'author'];
}
