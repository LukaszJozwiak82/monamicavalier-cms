<div>
    {{-- <p class="w-full text-gray-600 text-xs md:text-sm px-6 pt-6">{{ $key }}</p> --}}
    <img  class="w-full h-auto py-4 px-4 rounded-t" src="{{ url('storage/additional_photos/'.$photo) }}" alt="">
    <div class="flex justify-between">
        <x-jet-secondary-button wire:click="prevPhoto()" wire:loading.attr="disabled">
            {{ __('Prev') }}
        </x-jet-secondary-button>
        <x-jet-secondary-button wire:click="nextPhoto()" wire:loading.attr="disabled">
            {{ __('Next') }}
        </x-jet-secondary-button>
    </div>
</div>
