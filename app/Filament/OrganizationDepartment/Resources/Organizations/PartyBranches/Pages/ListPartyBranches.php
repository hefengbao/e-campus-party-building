<?php

namespace App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\Pages;

use App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\PartyBranchResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPartyBranches extends ListRecords
{
    protected static string $resource = PartyBranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
