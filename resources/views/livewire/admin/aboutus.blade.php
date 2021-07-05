<div>
    @if (session()->has('message'))
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-4" role="alert">
            <p class="font-bold">Info</p>
            <p class="text-sm">{{ session('message') }}</p>

        </div>
    @endif
    <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="name" value="{{ __('Content') }} PL" />
        <textarea wire:model.defer="valuePl" id="value1" rows="10" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
        <x-jet-input-error for="post.value1" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="name" value="{{ __('Content') }} EN" />
        <textarea wire:model="valueEn" id="value2" rows="10" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
        <x-jet-input-error for="post.value2" class="mt-2" />
    </div>
    <div class="pt-4">
        <x-jet-danger-button class="ml-2" wire:click="savePost({{ $post }})" wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-jet-danger-button>
    </div>
</div>
