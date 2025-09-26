<?php

namespace App\Filament\PartyBranch\Resources\Memebers\PartyMembershipActivists;

use App\Filament\PartyBranch\Resources\Memebers\PartyMembershipActivists\Pages\CreatePartyMembershipActivist;
use App\Filament\PartyBranch\Resources\Memebers\PartyMembershipActivists\Pages\EditPartyMembershipActivist;
use App\Filament\PartyBranch\Resources\Memebers\PartyMembershipActivists\Pages\ListPartyMembershipActivists;
use App\Filament\PartyBranch\Resources\Memebers\PartyMembershipActivists\Pages\ViewPartyMembershipActivist;
use App\Filament\PartyBranch\Resources\Memebers\PartyMembershipActivists\Schemas\PartyMembershipActivistForm;
use App\Filament\PartyBranch\Resources\Memebers\PartyMembershipActivists\Schemas\PartyMembershipActivistInfolist;
use App\Filament\PartyBranch\Resources\Memebers\PartyMembershipActivists\Tables\PartyMembershipActivistsTable;
use App\Models\PartyMembershipActivist;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PartyMembershipActivistResource extends Resource
{
    protected static ?string $model = PartyMembershipActivist::class;

    protected static ?string $modelLabel = '入党积极分子';

    protected static ?string $pluralModelLabel = '入党积极分子';

    protected static string | UnitEnum | null $navigationGroup = '人员管理';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return PartyMembershipActivistForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PartyMembershipActivistInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PartyMembershipActivistsTable::configure($table);
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
            'index' => ListPartyMembershipActivists::route('/'),
            'create' => CreatePartyMembershipActivist::route('/create'),
            'view' => ViewPartyMembershipActivist::route('/{record}'),
            'edit' => EditPartyMembershipActivist::route('/{record}/edit'),
        ];
    }
}
