<?php

namespace App\Filament\OrganizationDepartment\Resources\Memebers\PartyMembers\Pages;

use App\Filament\OrganizationDepartment\Resources\Memebers\PartyMembers\PartyMemberResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePartyMember extends CreateRecord
{
    protected static string $resource = PartyMemberResource::class;
}
