<?php

namespace App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\Pages;

use App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\PartySubCommitteeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPartySubCommittee extends ViewRecord
{
    protected static string $resource = PartySubCommitteeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
