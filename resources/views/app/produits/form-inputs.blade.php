@php $editing = isset($produit) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="nom"
            label="Nom"
            value="{{ old('nom', ($editing ? $produit->nom : '')) }}"
            maxlength="255"
            placeholder="Nom"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="prix"
            label="Prix"
            value="{{ old('prix', ($editing ? $produit->prix : '')) }}"
            maxlength="255"
            placeholder="Prix"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="poids"
            label="Poids"
            value="{{ old('poids', ($editing ? $produit->poids : '')) }}"
            maxlength="255"
            placeholder="Poids"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" aria-label="Image">
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="categorie_id" label="Categorie" required>
            @php $selected = old('categorie_id', ($editing ? $produit->categorie_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Choisir la Categorie</option>
            @foreach($categories as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
