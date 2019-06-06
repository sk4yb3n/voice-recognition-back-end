<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    /**
     * Every action has its own command assigned.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function commands()
    {
        return $this->belongsToMany(Command::class, "command_actions");
    }
}
