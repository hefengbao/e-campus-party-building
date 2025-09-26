<?php

namespace App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees;

use App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\Pages\CreatePartySubCommittee;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\Pages\EditPartySubCommittee;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\Pages\ListPartySubCommittees;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\Pages\ViewPartySubCommittee;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\Schemas\PartySubCommitteeForm;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\Schemas\PartySubCommitteeInfolist;
use App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\Tables\PartySubCommitteesTable;
use App\Models\Organization;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class PartySubCommitteeResource extends Resource
{
    protected static ?string $model = Organization::class;

    protected static ?string $modelLabel = '党委（总支）';

    protected static ?string $pluralModelLabel = '党委（总支）';

    protected static string | UnitEnum | null $navigationGroup = '组织管理';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return PartySubCommitteeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PartySubCommitteeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PartySubCommitteesTable::configure($table);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereNull('parent_id');
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
            'index' => ListPartySubCommittees::route('/'),
            'create' => CreatePartySubCommittee::route('/create'),
            'view' => ViewPartySubCommittee::route('/{record}'),
            'edit' => EditPartySubCommittee::route('/{record}/edit'),
        ];
    }
}
