@extends('layouts.index')

    @section('content')

        @include('partials.header')

        @include('partials.dogs')

        @livewire('show-posts')

        @include('partials.contact')

        @include('partials.footer')

    @endsection


