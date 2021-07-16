@extends('layouts.index')

    @section('content')

        @include('partials.header')

        @livewire('show-dog',['post' => $post])

        @include('partials.footer')

    @endsection
