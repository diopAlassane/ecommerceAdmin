@php $editing = isset($client) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="prenom"
            label="Prenom"
            value="{{ old('prenom', ($editing ? $client->prenom : '')) }}"
            maxlength="255"
            placeholder="Prenom"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="nom"
            label="Nom"
            value="{{ old('nom', ($editing ? $client->nom : '')) }}"
            maxlength="255"
            placeholder="Nom"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="mail"
            label="Mail"
            value="{{ old('mail', ($editing ? $client->mail : '')) }}"
            maxlength="255"
            placeholder="Mail"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="address"
            label="Address"
            value="{{ old('address', ($editing ? $client->address : '')) }}"
            maxlength="255"
            placeholder="Address"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="telephone"
            label="Telephone"
            value="{{ old('telephone', ($editing ? $client->telephone : '')) }}"
            maxlength="255"
            placeholder="Telephone"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="commande_id" label="Commande" required>
            @php $selected = old('commande_id', ($editing ? $client->commande_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Commande</option>
            @foreach($commandes as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
