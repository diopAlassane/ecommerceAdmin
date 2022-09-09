@php $editing = isset($fournisseur) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="prenom"
            label="Prenom"
            value="{{ old('prenom', ($editing ? $fournisseur->prenom : '')) }}"
            maxlength="255"
            placeholder="Prenom"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="nom"
            label="Nom"
            value="{{ old('nom', ($editing ? $fournisseur->nom : '')) }}"
            maxlength="255"
            placeholder="Nom"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="telephone"
            label="Telephone"
            value="{{ old('telephone', ($editing ? $fournisseur->telephone : '')) }}"
            maxlength="255"
            placeholder="Telephone"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
