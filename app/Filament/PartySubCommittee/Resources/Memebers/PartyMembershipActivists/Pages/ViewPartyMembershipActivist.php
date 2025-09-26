<?php

namespace App\Filament\PartySubCommittee\Resources\Memebers\PartyMembershipActivists\Pages;

use App\Filament\PartySubCommittee\Resources\Memebers\PartyMembershipActivists\PartyMembershipActivistResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPartyMembershipActivist extends ViewRecord
{
    protected static string $resource = PartyMembershipActivistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
