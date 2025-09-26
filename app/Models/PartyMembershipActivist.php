<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kra8\Snowflake\HasSnowflakePrimary;

/**
 * 入党积极分子
 */
class PartyMembershipActivist extends Model
{
    /** @use HasFactory<\Database\Factories\PartyMembershipActivistFactory> */
    use HasFactory;
    use HasSnowflakePrimary;

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class, 'organization_id');
    }
}
