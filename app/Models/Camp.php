<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Checkout;
use Auth;

class Camp extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'price'];

    public function getIsRegisteredAttribute()
    {
        if (!Auth::check()) {
            return false;
        }

        return Checkout::whereCampId($this->id)->whereUserId(Auth::id())->exists();
    }

    /**
     * Get all of the CampBenefits for the Camp
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function CampBenefits(): HasMany
    {
        return $this->hasMany(CampBenefit::class);
    }

    /**
     * Get all of the Checkout for the Camp
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Checkout(): HasMany
    {
        return $this->hasMany(Checkout::class);
    }
}
