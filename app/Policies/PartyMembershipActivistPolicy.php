<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\PartyMembershipActivist;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartyMembershipActivistPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:PartyMembershipActivist');
    }

    public function view(AuthUser $authUser, PartyMembershipActivist $partyMembershipActivist): bool
    {
        return $authUser->can('View:PartyMembershipActivist');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:PartyMembershipActivist');
    }

    public function update(AuthUser $authUser, PartyMembershipActivist $partyMembershipActivist): bool
    {
        return $authUser->can('Update:PartyMembershipActivist');
    }

    public function delete(AuthUser $authUser, PartyMembershipActivist $partyMembershipActivist): bool
    {
        return $authUser->can('Delete:PartyMembershipActivist');
    }

    public function restore(AuthUser $authUser, PartyMembershipActivist $partyMembershipActivist): bool
    {
        return $authUser->can('Restore:PartyMembershipActivist');
    }

    public function forceDelete(AuthUser $authUser, PartyMembershipActivist $partyMembershipActivist): bool
    {
        return $authUser->can('ForceDelete:PartyMembershipActivist');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:PartyMembershipActivist');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:PartyMembershipActivist');
    }

    public function replicate(AuthUser $authUser, PartyMembershipActivist $partyMembershipActivist): bool
    {
        return $authUser->can('Replicate:PartyMembershipActivist');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:PartyMembershipActivist');
    }

}