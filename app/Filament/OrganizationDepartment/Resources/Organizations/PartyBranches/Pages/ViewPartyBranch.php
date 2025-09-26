<?php

namespace App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\Pages;

use App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\PartyBranchResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPartyBranch extends ViewRecord
{
    protected static string $resource = PartyBranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
