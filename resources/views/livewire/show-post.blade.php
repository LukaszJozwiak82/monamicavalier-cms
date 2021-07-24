
<section class="bg-white border-b py-8">
 <div class="container mx-auto flex flex-wrap pt-4 pb-12">
    @if (session()->has('message'))
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-4" role="alert">
            <p class="font-bold">Info</p>
            <p class="text-sm">{{ session('message') }}</p>

        </div>
    @endif
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
      {{ $post->title }}
    </h1>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <p class="justify-center w-full text-gray-600 text-xs md:text-sm px-6 pt-6">
      <img
      class="object-center w-1/4 shadow rounded-b px-4 py-4 rounded-t mx-auto"
      src="{{ url('storage/photos/'.$post->image) }}"
      alt=""
      loading="lazy"
    />
    </p>
    <p class="text-center w-full text-gray-600 text-xs md:text-sm px-6 pt-6 pb-6">
      {{ $post->value }}
    </p>
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
      {{ __('Photos') }}
    </h1>
    <div class="w-full mb-4 mt-4">
      <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <div class="w-full flex flex-col md:flex-row md:flex-wrap p-6">
     @forelse ($post->photos as $photo)
          <img wire:click="showModalWindow({{ $post->id }}, {{ $photo->id }})" class="md:w-1/3 h-auto py-4 px-4 rounded-b shadow" src="{{ url('storage/additional_photos/'.$photo->filename) }}" alt="">
     @empty
         <p class="w-full text-gray-600 text-xs md:text-sm px-6 pt-6">Brak</p>
     @endforelse
    </div>
    <x-jet-dialog-modal wire:model="modalPhotoVisible">
        <x-slot name="title">
            {{ __('Photos') }}
        </x-slot>

        <x-slot name="content">
            @livewire('show-photos')
        </x-slot>

        <x-slot name="footer">
            {{-- <x-jet-secondary-button wire:click="$set('modalPhotoVisible', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button> --}}
        </x-slot>
    </x-jet-dialog-modal>
  </div>
</section>

