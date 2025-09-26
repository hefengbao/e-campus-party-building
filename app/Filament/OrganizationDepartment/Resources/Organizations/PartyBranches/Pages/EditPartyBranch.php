<?php

namespace App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\Pages;

use App\Filament\OrganizationDepartment\Resources\Organizations\PartyBranches\PartyBranchResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPartyBranch extends EditRecord
{
    protected static string $resource = PartyBranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
