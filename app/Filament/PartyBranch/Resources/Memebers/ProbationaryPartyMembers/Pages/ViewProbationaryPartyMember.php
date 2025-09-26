<?php

namespace App\Filament\PartyBranch\Resources\Memebers\ProbationaryPartyMembers\Pages;

use App\Filament\PartyBranch\Resources\Memebers\ProbationaryPartyMembers\ProbationaryPartyMemberResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProbationaryPartyMember extends ViewRecord
{
    protected static string $resource = ProbationaryPartyMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
