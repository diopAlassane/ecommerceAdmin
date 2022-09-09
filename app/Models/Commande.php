<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['mode_paiement', 'date_reglement', 'produit_id'];

    protected $searchableFields = ['*'];

    protected $casts = [
        'date_reglement' => 'date',
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
