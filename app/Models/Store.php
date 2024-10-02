<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'logo',
        'cover',
        'status',
    ];

    /**
     * Get the store's status as an active/inactive flag.
     *
     * @return bool
     */
    public function isActive()
    {
        return $this->status === 'active';
    }
}
