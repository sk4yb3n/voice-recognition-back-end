<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommandRelationWord extends Model
{
    /**
     * Get the command that owns relation command.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function command()
    {
        return $this->belongsTo(Command::class);
    }
}
