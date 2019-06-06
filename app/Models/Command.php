<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $fillable = ['name', 'description', 'slug'];

    /**
     * Get the relation words for the command.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relationWords()
    {
        return $this->hasMany(CommandRelationWord::class);
    }
}
