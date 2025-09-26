<?php

namespace App\Filament\PartyBranch\Resources\Memebers\PartyMembershipActivists\Pages;

use App\Filament\PartyBranch\Resources\Memebers\PartyMembershipActivists\PartyMembershipActivistResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPartyMembershipActivist extends EditRecord
{
    protected static string $resource = PartyMembershipActivistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
