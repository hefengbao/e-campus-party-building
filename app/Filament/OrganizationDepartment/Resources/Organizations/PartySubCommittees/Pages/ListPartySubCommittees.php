<?php

namespace App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\Pages;

use App\Filament\OrganizationDepartment\Resources\Organizations\PartySubCommittees\PartySubCommitteeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPartySubCommittees extends ListRecords
{
    protected static string $resource = PartySubCommitteeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
