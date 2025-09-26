<?php

namespace App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers\Pages;

use App\Filament\OrganizationDepartment\Resources\Memebers\ProbationaryPartyMembers\ProbationaryPartyMemberResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditProbationaryPartyMember extends EditRecord
{
    protected static string $resource = ProbationaryPartyMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
