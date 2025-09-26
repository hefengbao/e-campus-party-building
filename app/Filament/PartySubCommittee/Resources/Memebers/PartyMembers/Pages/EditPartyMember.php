<?php

namespace App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers\Pages;

use App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers\PartyMemberResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPartyMember extends EditRecord
{
    protected static string $resource = PartyMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
