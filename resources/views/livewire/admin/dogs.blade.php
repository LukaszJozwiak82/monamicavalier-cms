<div>
    @if (session()->has('message'))
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-4" role="alert">
            <p class="font-bold">Info</p>
            <p class="text-sm">{{ session('message') }}</p>

        </div>
    @endif
    <div class="mt-4">
        <button wire:click="confirmDogAdd"
          class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        >
        Dodaj
        </button>
    </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
              <th class="px-4 py-3">Id</th>
              <th class="px-4 py-3">{{__('Name') }}</th>
              <th class="px-4 py-3">{{__('Content') }} {{ app()->getLocale() }}</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Date</th>
              <th class="px-4 py-3">Actions</th>
            </tr>
          </thead>
          <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
          >
          @foreach($dogs as $post)
            <tr class="text-gray-700 dark:text-gray-400">
                <td>{{ $post->id }}</td>
                <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                      <!-- Avatar with inset shadow -->
                      {{-- <div
                        class="relative hidden w-32 mr-3 rounded-full md:block"
                      > --}}
                        <img
                          class="object-cover w-32"
                          src="{{ url('storage/photos/'.$post->image) }}"
                          alt=""
                          loading="lazy"
                        />
                      </div>
                    </div>
                  </td>
                <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                    <!-- Avatar with inset shadow -->
                    <div>
                        <p class="font-semibold">{{ $post->getTranslation('title', app()->getLocale()) }}</p>
                        {{-- <p class="text-xs text-gray-600 dark:text-gray-400">
                        10x Developer
                        </p> --}}
                    </div>
                    </div>
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $post->getTranslation('value', app()->getLocale()) }}
                </td>
                <td class="px-4 py-3 text-xs">
                    <button wire:click="changePostStatus({{ $post }})">

                        @if ($post->status == 1)
                        <span
                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                            > {{ __('Active') }}
                        @else
                        <span
                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-green-700 dark:text-green-100"
                            > {{ __('Inactive') }}
                        @endif
                        </span>
                    </button>
                  </td>
                  <td class="px-4 py-3 text-sm">
                    {{ $post->created_at }}
                  </td>
                  <td class="px-4 py-3">
                    <div class="flex items-center space-x-4 text-sm">
                      <button wire:click="confirmPostEdit({{ $post->id }})" wire:loading.attr="disabled"
                        class="border-2 border-purple-500 hover:border-gray-500 flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Edit"
                      >
                        <svg
                          class="w-5 h-5"
                          aria-hidden="true"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                        >
                          <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                          ></path>
                        </svg>
                        <span class="ml-4">{{ __('Edit') }}</span>
                      </button>
                      <button wire:click="confirmPostDeletion({{ $post->id }})" wire:loading.attr="disabled"
                        class="border-2 border-purple-500 hover:border-gray-500 flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Delete"
                      >
                        <svg
                          class="w-5 h-5"
                          aria-hidden="true"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                        <span class="ml-4">{{ __('Delete') }}</span>
                      </button>
                      <button wire:click="confirmPhotoShow({{ $post->id }})" wire:loading.attr="disabled"
                        class="border-2 border-purple-500 hover:border-gray-500 flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Photos"
                      >
                      <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                      ></path>
                    </svg>
                    <span class="ml-4">{{ __('Photos') }}</span>
                      </button>
                    </div>
                  </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <x-jet-dialog-modal wire:model="confirmingDogAdd">
        <x-slot name="title">
            {{ __('Add Dog') }}
        </x-slot>

        @include('admin.partials.post-modal-form')

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('confirmingDogAdd',false)" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-2" wire:click="savePost()" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">
        <x-slot name="title">
            {{ __('Delete dog') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete?') }}
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="deletePost" wire:loading.attr="disabled">
                {{ __('Delete record') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="modalConfirmPhotoVisible">
        <x-slot name="title">
            {{ __('Photos') }}
        </x-slot>

        <x-slot name="content">
            @livewire('admin.post-additional-photos')
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalConfirmPhotoVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
    <x-jet-dialog-modal wire:model="modalConfirmEditVisible">
        <x-slot name="title">
            {{ __('Edit Post') }}{{ $modelId }}
        </x-slot>

        @include('admin.partials.post-modal-form')

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('modalConfirmEditVisible',false)" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-2" wire:click="updatePost({{ $modelId }})" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
