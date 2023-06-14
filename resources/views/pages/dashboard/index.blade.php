@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-7xl py-10 px-8 mx-auto">
    <h2 class="text-2xl font-bold text-gray-800 mb-8 dark:text-white">Dashboard</h2>

    <h2 class="text-lg font-medium text-gray-800 dark:text-white mb-4">
        Top 10 customers by purchase (cost) - BIG SPENDERS
    </h2>

    <div class="flex flex-col mb-10">
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

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{ __('Total Orders') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @foreach ($topCostCustomers as $c)
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $c->name }}
                                </td>

                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $c->email }}
                                </td>

                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $c->phone }}
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    {{ $c->orders_count }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <h2 class="text-lg font-medium text-gray-800 dark:text-white mb-4">
        Top 10 customers by purchase (count) - QUANTITY OVER QUALITY
    </h2>

    <div class="flex flex-col mb-10">
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

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{ __('Cost Of Orders') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @foreach ($topCountCustomers as $c)
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $c->name }}
                                </td>

                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $c->email }}
                                </td>

                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $c->phone }}
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    R {{ $c->orders_sum_total }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <h2 class="text-lg font-medium text-gray-800 dark:text-white mb-4">
        Top 3 Sales People by Nett Profit on Sales
    </h2>

    <div class="flex flex-col mb-10">
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

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{ __('Net Profit') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @foreach ($totalSalePersonNet as $s)
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $s->name }}
                                </td>

                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $s->email }}
                                </td>

                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $s->phone }}
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    R {{ $s->orders_sum_total }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <h2 class="text-lg font-medium text-gray-800 dark:text-white mb-4">
        Top 3 Sales People by Gross Sales value
    </h2>

    <div class="flex flex-col mb-10">
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

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{ __('Gross Profit') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @foreach ($totalSalePersonGross as $s)
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $s->name }}
                                </td>

                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $s->email }}
                                </td>

                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                    {{ $s->phone }}
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    R {{ $s->orders_sum_subtotal }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
