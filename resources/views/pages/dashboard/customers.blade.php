@extends('layouts.app')

@section('title', __('Customers'))

@section('content')
<div class="max-w-7xl py-10 px-8 mx-auto">
    <h2 class="text-2xl font-bold text-gray-800 mb-8 dark:text-white">{{ __('Customers') }}</h2>

    <div class="flex flex-col">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">

                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{ __('Name') }}
                                </th>

                                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{ __('Email') }}
                                </th>

                                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{ __('Phone') }}
                                </th>

                                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{ __('Addresss') }}
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{ __('Number of orders') }}
                                </th>
                            </tr>
                        </thead>

                        @foreach ($customers as $customer)
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $customer->name }}
                                </td>

                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $customer->email }}
                                </td>

                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $customer->phone }}
                                </td>

                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $customer->address }}
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    {{ $customer->orders_count }}
                                </td>
                            </tr>
                        </tbody>
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
