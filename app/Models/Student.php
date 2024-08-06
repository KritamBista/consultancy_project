<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    /**
     * Get the consultant that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consultant()
    {
        return $this->belongsTo(Consultant::class);
    }
    /**
     * Get all of the docuemts for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docuemts()
    {
        return $this->hasMany(Document::class,);
    }
    /**
     * Get all of the accounts for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
