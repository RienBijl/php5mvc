<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Band extends Model
{
    use HasFactory;

    /**
     * Embed relation
     *
     * @return HasMany
     * @author Rien Bijl <me@rienbijl.nl>
     * @since 0.1
     */
    public function embeds()
    {
        return $this->hasMany(Embed::class);
    }

    /**
     * Users relation
     *
     * @return BelongsToMany
     * @author Rien Bijl <me@rienbijl.nl>
     * @since 0.1
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_band');
    }
}
