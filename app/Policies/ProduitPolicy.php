<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProduitPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the produit can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the produit can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Produit  $model
     * @return mixed
     */
    public function view(User $user, Produit $model)
    {
        return true;
    }

    /**
     * Determine whether the produit can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the produit can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Produit  $model
     * @return mixed
     */
    public function update(User $user, Produit $model)
    {
        return true;
    }

    /**
     * Determine whether the produit can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Produit  $model
     * @return mixed
     */
    public function delete(User $user, Produit $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Produit  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the produit can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Produit  $model
     * @return mixed
     */
    public function restore(User $user, Produit $model)
    {
        return false;
    }

    /**
     * Determine whether the produit can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Produit  $model
     * @return mixed
     */
    public function forceDelete(User $user, Produit $model)
    {
        return false;
    }
}
