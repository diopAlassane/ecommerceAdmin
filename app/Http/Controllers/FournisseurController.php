<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
use App\Http\Requests\FournisseurStoreRequest;
use App\Http\Requests\FournisseurUpdateRequest;

class FournisseurController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Fournisseur::class);

        $search = $request->get('search', '');

        $fournisseurs = Fournisseur::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.fournisseurs.index',
            compact('fournisseurs', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Fournisseur::class);

        return view('app.fournisseurs.create');
    }

    /**
     * @param \App\Http\Requests\FournisseurStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FournisseurStoreRequest $request)
    {
        $this->authorize('create', Fournisseur::class);

        $validated = $request->validated();

        $fournisseur = Fournisseur::create($validated);

        return redirect()
            ->route('fournisseurs.edit', $fournisseur)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fournisseur $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Fournisseur $fournisseur)
    {
        $this->authorize('view', $fournisseur);

        return view('app.fournisseurs.show', compact('fournisseur'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fournisseur $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Fournisseur $fournisseur)
    {
        $this->authorize('update', $fournisseur);

        return view('app.fournisseurs.edit', compact('fournisseur'));
    }

    /**
     * @param \App\Http\Requests\FournisseurUpdateRequest $request
     * @param \App\Models\Fournisseur $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(
        FournisseurUpdateRequest $request,
        Fournisseur $fournisseur
    ) {
        $this->authorize('update', $fournisseur);

        $validated = $request->validated();

        $fournisseur->update($validated);

        return redirect()
            ->route('fournisseurs.edit', $fournisseur)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fournisseur $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Fournisseur $fournisseur)
    {
        $this->authorize('delete', $fournisseur);

        $fournisseur->delete();

        return redirect()
            ->route('fournisseurs.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
