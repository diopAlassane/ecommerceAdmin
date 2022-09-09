<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['nom', 'prix', 'poids', 'image', 'categorie_id'];

    protected $searchableFields = ['*'];

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
