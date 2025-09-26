<?php

namespace App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers;

use App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers\Pages\CreateProbationaryPartyMember;
use App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers\Pages\EditProbationaryPartyMember;
use App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers\Pages\ListProbationaryPartyMembers;
use App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers\Pages\ViewProbationaryPartyMember;
use App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers\Schemas\ProbationaryPartyMemberForm;
use App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers\Schemas\ProbationaryPartyMemberInfolist;
use App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers\Tables\ProbationaryPartyMembersTable;
use App\Models\ProbationaryPartyMember;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ProbationaryPartyMemberResource extends Resource
{
    protected static ?string $model = ProbationaryPartyMember::class;

    protected static ?string $modelLabel = '预备党员';

    protected static ?string $pluralModelLabel = '预备党员';

    protected static string | UnitEnum | null $navigationGroup = '人员管理';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return ProbationaryPartyMemberForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProbationaryPartyMemberInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProbationaryPartyMembersTable::configure($table);
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
            'index' => ListProbationaryPartyMembers::route('/'),
            'create' => CreateProbationaryPartyMember::route('/create'),
            'view' => ViewProbationaryPartyMember::route('/{record}'),
            'edit' => EditProbationaryPartyMember::route('/{record}/edit'),
        ];
    }
}
