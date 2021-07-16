@extends('layouts.index')

    @section('content')

        @include('partials.header')


        @livewire('show-post',['post' => $post])


        @include('partials.footer')

    @endsection
