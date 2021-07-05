@extends('layouts.index')

    @section('content')

        @include('partials.header')

        <section class="bg-white border-b py-8">
            <div class="container max-w-5xl mx-auto m-8">
              <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                {{ __('About Us') }}
              </h1>
              <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
              </div>
                      <p class=" text-gray-600">{!! $post->value !!}</p>
            </div>
          </section>


        @include('partials.footer')

    @endsection
