@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="p-6 bg-white rounded-sm w-8/12">
            <x-post :post="$post" />
        </div>
    </div>
@endsection