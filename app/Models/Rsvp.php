<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Rsvp
 *
 * @property int $id
 * @property int $user_id
 * @property int $event_id
 * @property string|null $responded_at
 * @property string|null $response
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Event $event
 * @method static \Illuminate\Database\Eloquent\Builder|Rsvp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rsvp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rsvp query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rsvp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rsvp whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rsvp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rsvp whereRespondedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rsvp whereResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rsvp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rsvp whereUserId($value)
 * @mixin \Eloquent
 */
class Rsvp extends Model
{
    protected $fillable = [
        'event_id',
        'user_id',
        'responded_at',
        'response'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
