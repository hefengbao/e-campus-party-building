<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\ProbationaryPartyMember;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProbationaryPartyMemberPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:ProbationaryPartyMember');
    }

    public function view(AuthUser $authUser, ProbationaryPartyMember $probationaryPartyMember): bool
    {
        return $authUser->can('View:ProbationaryPartyMember');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:ProbationaryPartyMember');
    }

    public function update(AuthUser $authUser, ProbationaryPartyMember $probationaryPartyMember): bool
    {
        return $authUser->can('Update:ProbationaryPartyMember');
    }

    public function delete(AuthUser $authUser, ProbationaryPartyMember $probationaryPartyMember): bool
    {
        return $authUser->can('Delete:ProbationaryPartyMember');
    }

    public function restore(AuthUser $authUser, ProbationaryPartyMember $probationaryPartyMember): bool
    {
        return $authUser->can('Restore:ProbationaryPartyMember');
    }

    public function forceDelete(AuthUser $authUser, ProbationaryPartyMember $probationaryPartyMember): bool
    {
        return $authUser->can('ForceDelete:ProbationaryPartyMember');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:ProbationaryPartyMember');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:ProbationaryPartyMember');
    }

    public function replicate(AuthUser $authUser, ProbationaryPartyMember $probationaryPartyMember): bool
    {
        return $authUser->can('Replicate:ProbationaryPartyMember');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:ProbationaryPartyMember');
    }

}