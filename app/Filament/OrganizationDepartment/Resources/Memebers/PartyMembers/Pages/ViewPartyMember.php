<?php

namespace App\Filament\OrganizationDepartment\Resources\Memebers\PartyMembers\Pages;

use App\Filament\OrganizationDepartment\Resources\Memebers\PartyMembers\PartyMemberResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPartyMember extends ViewRecord
{
    protected static string $resource = PartyMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
