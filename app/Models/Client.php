<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'prenom',
        'nom',
        'mail',
        'address',
        'telephone',
        'commande_id',
    ];

    protected $searchableFields = ['*'];

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
}
