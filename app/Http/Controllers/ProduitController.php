<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\ProduitStoreRequest;
use App\Http\Requests\ProduitUpdateRequest;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Produit::class);

        $search = $request->get('search', '');

        $produits = Produit::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.produits.index', compact('produits', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Produit::class);

        $categories = Categorie::pluck('name', 'id');

        return view('app.produits.create', compact('categories'));
    }

    /**
     * @param \App\Http\Requests\ProduitStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProduitStoreRequest $request)
    {
        $this->authorize('create', Produit::class);

        $validated = $request->validated();
        //dd($validated);
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }
        $produit = Produit::create($validated);

        return redirect()
            ->route('produits.edit', $produit)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Produit $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Produit $produit)
    {
        $this->authorize('view', $produit);

        return view('app.produits.show', compact('produit'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Produit $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Produit $produit)
    {
        $this->authorize('update', $produit);

        $categories = Categorie::pluck('name', 'id');

        return view('app.produits.edit', compact('produit', 'categories'));
    }

    /**
     * @param \App\Http\Requests\ProduitUpdateRequest $request
     * @param \App\Models\Produit $produit
     * @return \Illuminate\Http\Response
     */
    public function update(ProduitUpdateRequest $request, Produit $produit)
    {
        $this->authorize('update', $produit);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            if ($produit->image) {
                Storage::delete($produit->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }
        $produit->update($validated);

        return redirect()
            ->route('produits.edit', $produit)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Produit $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Produit $produit)
    {
        $this->authorize('delete', $produit);

        $produit->delete();

        return redirect()
            ->route('produits.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
