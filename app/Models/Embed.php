<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Embed extends Model
{
    use HasFactory;

    /**
     * Band relation
     *
     * @return BelongsTo
     * @author Rien Bijl <me@rienbijl.nl>
     * @since 0.1
     */
    public function band()
    {
        return $this->belongsTo(Band::class);
    }
}
