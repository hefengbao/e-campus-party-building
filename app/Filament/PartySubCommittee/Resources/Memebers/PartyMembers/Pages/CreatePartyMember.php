<?php

namespace App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers\Pages;

use App\Filament\PartySubCommittee\Resources\Memebers\PartyMembers\PartyMemberResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePartyMember extends CreateRecord
{
    protected static string $resource = PartyMemberResource::class;
}
