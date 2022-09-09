@php $editing = isset($commande) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="mode_paiement"
            label="Mode Paiement"
            value="{{ old('mode_paiement', ($editing ? $commande->mode_paiement : '')) }}"
            maxlength="255"
            placeholder="Mode Paiement"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="date_reglement"
            label="Date Reglement"
            value="{{ old('date_reglement', ($editing ? optional($commande->date_reglement)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="produit_id" label="Produit" required>
            @php $selected = old('produit_id', ($editing ? $commande->produit_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Produit</option>
            @foreach($produits as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
