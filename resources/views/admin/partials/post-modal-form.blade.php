<x-slot name="content">
    <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="img" value="{{ __('Featured image') }}" />
        <x-jet-input wire:model.defer="featuredImg" id="img" type="file" class="mt-1 block w-full"/>
        <x-jet-input-error for="featuredImg" class="mt-2" />
        @if ($featuredImg)
          <div>
              Photo Preview:
              <img class="object-cover w-1/4" src="{{ $featuredImg->temporaryUrl() }}">
          </div>
        @endif
    </div>

    <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="img" value="{{ __('Additional Photos') }}" />
        <x-jet-input wire:model.defer="additionalPhotos" id="ap" type="file" class="mt-1 block w-full" multiple/>
        <x-jet-input-error for="additionalPhotos" class="mt-2" />
        @if ($additionalPhotos)
          <div>
              Photos Preview:
              <div class="flex pl-1">
                @foreach ($additionalPhotos as $photo)
                  <img class="object-cover w-1/4 pl-1" src="{{ $photo->temporaryUrl() }}">
                @endforeach
              </div>
          </div>
        @endif
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="title" value="{{ __('Title') }} PL" />
        <x-jet-input wire:model="titlePl"  type="text" class="mt-1 block w-full"/>
        <x-jet-input-error for="titlePl" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="title2" value="{{ __('Title') }} EN" />
        <x-jet-input wire:model="titleEn"  type="text" class="mt-1 block w-full"/>
        <x-jet-input-error for="titleEn" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="name" value="{{ __('Content') }} PL" />
        <textarea wire:model.defer="contentPl" rows="4" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
        <x-jet-input-error for="contentPl" class="mt-2" />
    </div>
    <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="name" value="{{ __('Content') }} EN" />
        <textarea wire:model.defer="contentEn" rows="4" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
        <x-jet-input-error for="contentEn" class="mt-2" />
    </div>
</x-slot>
