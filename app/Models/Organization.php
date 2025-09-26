<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kra8\Snowflake\HasSnowflakePrimary;

/**
 * 组织架构
 */
class Organization extends Model
{
    /** @use HasFactory<\Database\Factories\OrganizationFactory> */
    use HasFactory;
    use HasSnowflakePrimary;

    protected function casts(): array
    {
        return [
            'status' => 'boolean'
        ];
    }

    public function sub(): HasMany
    {
        return $this->hasMany(Organization::class, 'parent_id', 'id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Organization::class, 'parent_id', 'id');
    }
}
