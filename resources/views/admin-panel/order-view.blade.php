@extends('partials.admin-panel.layout')
@section('title', 'الطلبات')
@section('content')

    @push('order-style')
        @livewireStyles()
    @endpush


    @livewire('order-view', ['order_id' => $order->id])


    @push('order-scripts')
        @livewireScripts()
    @endpush
@endsection
