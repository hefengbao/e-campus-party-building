<?php

namespace App\Filament\PartyBranch\Resources\Memebers\PartyMembers\Pages;

use App\Filament\PartyBranch\Resources\Memebers\PartyMembers\PartyMemberResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPartyMembers extends ListRecords
{
    protected static string $resource = PartyMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
