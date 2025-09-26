<?php

namespace App\Filament\OrganizationDepartment\Resources\Memebers\PartyMembers\Pages;

use App\Filament\OrganizationDepartment\Resources\Memebers\PartyMembers\PartyMemberResource;
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
