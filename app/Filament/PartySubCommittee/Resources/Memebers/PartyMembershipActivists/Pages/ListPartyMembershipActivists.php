<?php

namespace App\Filament\PartySubCommittee\Resources\Memebers\PartyMembershipActivists\Pages;

use App\Filament\PartySubCommittee\Resources\Memebers\PartyMembershipActivists\PartyMembershipActivistResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPartyMembershipActivists extends ListRecords
{
    protected static string $resource = PartyMembershipActivistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
