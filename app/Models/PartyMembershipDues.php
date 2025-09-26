<?php

namespace App\Models;

use App\Models\Enums\PaymentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kra8\Snowflake\HasSnowflakePrimary;

/**
 * 党费
 */
class PartyMembershipDues extends Model
{
    /** @use HasFactory<\Database\Factories\PartyMembershipDuesFactory> */
    use HasFactory;
    use HasSnowflakePrimary;

    protected $table = 'party_membership_dues';

    protected function casts(): array
    {
        return [
            'payment_status' => PaymentStatus::class,
        ];
    }
}
