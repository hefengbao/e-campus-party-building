<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable implements FilamentUser
{
    protected function casts(): array
    {
        return [
            'status' => 'boolean'
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->status == true;
    }
}
