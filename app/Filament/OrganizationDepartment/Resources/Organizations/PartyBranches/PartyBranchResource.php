<?php

namespace App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches;

use App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\Pages\CreatePartyBranch;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\Pages\EditPartyBranch;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\Pages\ListPartyBranches;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\Pages\ViewPartyBranch;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\Schemas\PartyBranchForm;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\Schemas\PartyBranchInfolist;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\Tables\PartyBranchesTable;
use App\Models\Organization;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class PartyBranchResource extends Resource
{
    protected static ?string $model = Organization::class;

    protected static ?string $modelLabel = '支部';

    protected static ?string $pluralModelLabel = '支部';

    protected static string | UnitEnum | null $navigationGroup = '组织管理';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return PartyBranchForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PartyBranchInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PartyBranchesTable::configure($table);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereNotNull('parent_id');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPartyBranches::route('/'),
            'create' => CreatePartyBranch::route('/create'),
            'view' => ViewPartyBranch::route('/{record}'),
            'edit' => EditPartyBranch::route('/{record}/edit'),
        ];
    }
}
