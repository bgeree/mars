<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TransactionPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Transaction $transaction)
    {
        // No transaction that has been moved to checkout can be deleted.
        if ($transaction->moved_to_checkout) {
            return false;
        }

        return $user->hasRoleWithObjectNames(Role::STUDENT_COUNCIL, ['economic-member', 'economic-leader']);
    }
}
