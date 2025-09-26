<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\PartyMember;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartyMemberPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:PartyMember');
    }

    public function view(AuthUser $authUser, PartyMember $partyMember): bool
    {
        return $authUser->can('View:PartyMember');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:PartyMember');
    }

    public function update(AuthUser $authUser, PartyMember $partyMember): bool
    {
        return $authUser->can('Update:PartyMember');
    }

    public function delete(AuthUser $authUser, PartyMember $partyMember): bool
    {
        return $authUser->can('Delete:PartyMember');
    }

    public function restore(AuthUser $authUser, PartyMember $partyMember): bool
    {
        return $authUser->can('Restore:PartyMember');
    }

    public function forceDelete(AuthUser $authUser, PartyMember $partyMember): bool
    {
        return $authUser->can('ForceDelete:PartyMember');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:PartyMember');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:PartyMember');
    }

    public function replicate(AuthUser $authUser, PartyMember $partyMember): bool
    {
        return $authUser->can('Replicate:PartyMember');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:PartyMember');
    }

}