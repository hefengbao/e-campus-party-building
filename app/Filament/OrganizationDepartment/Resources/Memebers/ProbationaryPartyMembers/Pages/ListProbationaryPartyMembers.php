<?php

namespace App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers\Pages;

use App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers\ProbationaryPartyMemberResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProbationaryPartyMembers extends ListRecords
{
    protected static string $resource = ProbationaryPartyMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
