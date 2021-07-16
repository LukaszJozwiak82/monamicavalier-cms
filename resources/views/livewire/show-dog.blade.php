<div>
    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
          <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            {{ $post->title }}
          </h1>

          <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
          </div>
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <img class="rounded-t w-full md:w-4/5 z-50" src="{{ url('storage/photos/'.$post->image) }}" />
            </div>
            <p class=" text-gray-600">{!! $post->value !!}</p>
            <div class="w-full flex flex-col md:flex-row py-6">
                @forelse ($post->photos as $photo)

                     <img wire:click="showModalWindow({{ $post->id }}, {{ $photo->id }})" class="w-1/2 h-1/2 py-4 px-4" src="{{ url('storage/additional_photos/'.$photo->filename) }}" alt="">

                @empty
                 </div>
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
    </section>
</div>
