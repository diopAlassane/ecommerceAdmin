@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('categories.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('Detail categorie')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.categories.inputs.name')</h5>
                    <span>{{ $category->name ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('categories.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('Retour')
                </a>

                @can('create', App\Models\Categorie::class)
                <a
                    href="{{ route('categories.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('Ajouter')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
