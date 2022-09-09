<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Http\Requests\CommandeStoreRequest;
use App\Http\Requests\CommandeUpdateRequest;

class CommandeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Commande::class);

        $search = $request->get('search', '');

        $commandes = Commande::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.commandes.index', compact('commandes', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Commande::class);

        $produits = Produit::pluck('nom', 'id');

        return view('app.commandes.create', compact('produits'));
    }

    /**
     * @param \App\Http\Requests\CommandeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommandeStoreRequest $request)
    {
        $this->authorize('create', Commande::class);

        $validated = $request->validated();

        $commande = Commande::create($validated);

        return redirect()
            ->route('commandes.edit', $commande)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Commande $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Commande $commande)
    {
        $this->authorize('view', $commande);

        return view('app.commandes.show', compact('commande'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Commande $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Commande $commande)
    {
        $this->authorize('update', $commande);

        $produits = Produit::pluck('nom', 'id');

        return view('app.commandes.edit', compact('commande', 'produits'));
    }

    /**
     * @param \App\Http\Requests\CommandeUpdateRequest $request
     * @param \App\Models\Commande $commande
     * @return \Illuminate\Http\Response
     */
    public function update(CommandeUpdateRequest $request, Commande $commande)
    {
        $this->authorize('update', $commande);

        $validated = $request->validated();

        $commande->update($validated);

        return redirect()
            ->route('commandes.edit', $commande)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Commande $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Commande $commande)
    {
        $this->authorize('delete', $commande);

        $commande->delete();

        return redirect()
            ->route('commandes.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
