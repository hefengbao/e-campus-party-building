<?php

namespace App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PartySubCommitteeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('名称')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('status')
                    ->label('状态')
                    ->default(true)
                    ->inline(false)
                    ->required()
                    ->columnSpanFull()
            ]);
    }
}
