@extends('laravolt::layouts.app')

@section('content')


    <x-titlebar title="Dosen">
        <x-item>
            <x-link label="Tambah" icon="plus" url="{{ route('modules::dosen.create') }}"></x-link>
        </x-item>
    </x-titlebar>

    {!! $table !!}
@stop
