<?php

namespace App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\Schemas;

use App\Models\Organization;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ToggleColumn;

class PartyBranchForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('parent_id')
                    ->label('党委（总支）')
                    ->options(Organization::query()->whereNull('parent_id')->pluck( 'name','id',))
                    ->required()
                    ->columnSpanFull(),
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
