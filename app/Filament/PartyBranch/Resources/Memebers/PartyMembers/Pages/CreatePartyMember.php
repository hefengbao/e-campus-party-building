<?php

namespace App\Filament\PartyBranch\Resources\Memebers\PartyMembers\Pages;

use App\Filament\PartyBranch\Resources\Memebers\PartyMembers\PartyMemberResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePartyMember extends CreateRecord
{
    protected static string $resource = PartyMemberResource::class;
}
