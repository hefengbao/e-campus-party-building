<?php

namespace App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\Pages;

use App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\PartySubCommitteeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPartySubCommittee extends EditRecord
{
    protected static string $resource = PartySubCommitteeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
