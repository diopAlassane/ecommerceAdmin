@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('clients.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.clients.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.clients.inputs.prenom')</h5>
                    <span>{{ $client->prenom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.clients.inputs.nom')</h5>
                    <span>{{ $client->nom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.clients.inputs.mail')</h5>
                    <span>{{ $client->mail ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.clients.inputs.address')</h5>
                    <span>{{ $client->address ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.clients.inputs.telephone')</h5>
                    <span>{{ $client->telephone ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.clients.inputs.commande_id')</h5>
                    <span
                        >{{ optional($client->commande)->mode_paiement ?? '-'
                        }}</span
                    >
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('clients.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Client::class)
                <a href="{{ route('clients.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
