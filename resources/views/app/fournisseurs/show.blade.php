@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('fournisseurs.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.fournisseurs.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.fournisseurs.inputs.prenom')</h5>
                    <span>{{ $fournisseur->prenom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.fournisseurs.inputs.nom')</h5>
                    <span>{{ $fournisseur->nom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.fournisseurs.inputs.telephone')</h5>
                    <span>{{ $fournisseur->telephone ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('fournisseurs.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Fournisseur::class)
                <a
                    href="{{ route('fournisseurs.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
