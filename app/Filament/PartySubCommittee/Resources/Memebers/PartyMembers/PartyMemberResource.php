<?php

namespace App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers;

use App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers\Pages\CreatePartyMember;
use App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers\Pages\EditPartyMember;
use App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers\Pages\ListPartyMembers;
use App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers\Pages\ViewPartyMember;
use App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers\Schemas\PartyMemberForm;
use App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers\Schemas\PartyMemberInfolist;
use App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers\Tables\PartyMembersTable;
use App\Models\PartyMember;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PartyMemberResource extends Resource
{
    protected static ?string $model = PartyMember::class;

    protected static ?string $modelLabel = '党员';

    protected static ?string $pluralModelLabel = '党员';

    protected static string | UnitEnum | null $navigationGroup = '人员管理';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return PartyMemberForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PartyMemberInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PartyMembersTable::configure($table);
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
            'index' => ListPartyMembers::route('/'),
            'create' => CreatePartyMember::route('/create'),
            'view' => ViewPartyMember::route('/{record}'),
            'edit' => EditPartyMember::route('/{record}/edit'),
        ];
    }
}
