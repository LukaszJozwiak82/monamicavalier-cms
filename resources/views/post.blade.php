@extends('layouts.index')

    @section('content')

        @include('partials.header')

        <section class="bg-white border-b py-8">
            <div class="container mx-auto flex flex-wrap pt-4 pb-12">
              <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                {{ $post->title }}
              </h1>
              <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
              </div>
              <p class="w-full text-gray-600 text-xs md:text-sm px-6 pt-6">
                <img
                class="object-cover w-1/4"
                src="{{ url('storage/photos/'.$post->image) }}"
                alt=""
                loading="lazy"
              />
                {{-- xGETTING STARTED --}}
              </p>
              <p class="w-full text-gray-600 text-xs md:text-sm px-6 pt-6">
                {{ $post->value }}
              </p>
              <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                {{ __('Photos') }}
              </h1>
              <div class="w-full mb-4 mt-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
              <div class="w-full flex flex-col md:flex-row py-6">
               @forelse ($post->photos as $photo)

                    <img class="w-1/2 h-1/2 py-4 px-4" src="{{ url('storage/additional_photos/'.$photo->filename) }}" alt="">

               @empty
                </div>
               <p class="w-full text-gray-600 text-xs md:text-sm px-6 pt-6">Brak</p>
               @endforelse



            </div>
        </section>

        @include('partials.footer')

    @endsection
