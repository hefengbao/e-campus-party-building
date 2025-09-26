<?php

namespace App\Models\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PaymentStatus: string implements HasLabel, HasColor
{
    case INIT = 'init';
    case PAID = 'paid';

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::INIT => 'danger',
            self::PAID => 'success',
        };
    }

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::INIT => '未交纳',
            self::PAID => '已缴纳',
        };
    }
}
