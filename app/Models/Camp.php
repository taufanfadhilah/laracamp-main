<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Camp extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'price'];

    /**
     * Get all of the CampBenefits for the Camp
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function CampBenefits(): HasMany
    {
        return $this->hasMany(CampBenefit::class);
    }
}
