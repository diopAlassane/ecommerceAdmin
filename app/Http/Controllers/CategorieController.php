<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\CategorieStoreRequest;
use App\Http\Requests\CategorieUpdateRequest;

class CategorieController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Categorie::class);

        $search = $request->get('search', '');

        $categories = Categorie::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.categories.index', compact('categories', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Categorie::class);

        return view('app.categories.create');
    }

    /**
     * @param \App\Http\Requests\CategorieStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieStoreRequest $request)
    {
        $this->authorize('create', Categorie::class);

        $validated = $request->validated();

        $categorie = Categorie::create($validated);

        return redirect()
            ->route('categories.edit', $categorie)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Categorie $category)
    {
        $this->authorize('view', $category);

        return view('app.categories.show', compact('category'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Categorie $category)
    {
        $this->authorize('update', $category);

        return view('app.categories.edit', compact('category'));
    }

    /**
     * @param \App\Http\Requests\CategorieUpdateRequest $request
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(
        CategorieUpdateRequest $request,
        Categorie $category
    ) {
        $this->authorize('update', $category);

        $validated = $request->validated();

        $category->update($validated);

        return redirect()
            ->route('categories.edit', $category)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Categorie $category)
    {
        $this->authorize('delete', $category);

        $category->delete();

        return redirect()
            ->route('categories.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
