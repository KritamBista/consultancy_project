<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    /**
     * Get all of the colleges for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function colleges()
    {
        return $this->hasMany(College::class,);
    }

    /**
     * Get all of the universities for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function universities()
    {
        return $this->hasMany(University::class,);
    }
}
