@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <div class="mt-10 lg:mt-20 lg:flex">
        <img src="{{ $product->image }}" alt="">

        <div class="mt-8 lg:px-10 lg:mt-0">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white lg:w-72">
                {{ $product->name }}
            </h1>

            <div class="max-w-lg mt-6 text-gray-600 dark:text-gray-500">
                R {{ $product->price }}
            </div>
        </div>
    </div>
</div>
@endsection
