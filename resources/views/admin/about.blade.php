@extends('admin.layouts.app')
@section('content')
        <main class="h-full pb-16 overflow-y-auto">
            <!-- Remove everything INSIDE this div to a really blank page -->
            <div class="container px-6 mx-auto grid">
              <h2
                class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
              >
                {{ __('About Us') }}
              </h2>
              <div>
                @livewire('admin.aboutus')
              </div>
            </div>
          </main>
      </div>
    </div>
@endsection