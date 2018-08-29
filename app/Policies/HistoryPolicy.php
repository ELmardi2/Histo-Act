<?php

namespace App\Policies;

use App\User;
use App\History;
use Illuminate\Auth\Access\HandlesAuthorization;

class HistoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the history.
     *
     * @param  \App\User  $user
     * @param  \App\History  $history
     * @return mixed
     */
    public function view(User $user, History $history)
    {
        return false;
    }

    /**
     * Determine whether the user can create histories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the history.
     *
     * @param  \App\User  $user
     * @param  \App\History  $history
     * @return mixed
     */
    public function update(User $user, History $history)
    {
        return $user->id === $history->user_id;
    }

    /**
     * Determine whether the user can delete the history.
     *
     * @param  \App\User  $user
     * @param  \App\History  $history
     * @return mixed
     */
    public function delete(User $user, History $history)
    {
        return $user->id === $history->user_id;
    }
}
