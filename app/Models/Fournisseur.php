<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseur extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['prenom', 'nom', 'telephone'];

    protected $searchableFields = ['*'];
}
