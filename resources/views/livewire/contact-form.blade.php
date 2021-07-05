<div>
    <section class="relative py-6   min-w-screen animation-fade animation-delay">
        <div class="container h-full max-w-5xl mx-auto overflow-hidden rounded-lg shadow">
            @if ($success)
                <div class="inline-flex w-full ml-3 overflow-hidden bg-white rounded-lg shadow-sm">
                    <div class="flex items-center justify-center w-12 bg-green-500">
                    </div>
                    <div class="px-3 py-2 text-left">
                        <span class="font-semibold text-green-500">Success</span>
                        <p class="mb-1 text-sm leading-none text-gray-500">{{ $success }}</p>
                    </div>
                </div>
            @endif
            <div class="h-full sm:flex">
                <div class="flex items-center justify-center w-full p-10 bg-white">
                    <form wire:submit.prevent="contactFormSubmit" class="w-full">

                        <div class="pb-3">
                            @error('email')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                            <input wire:model="email" class="text-gray-500 w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" type="text" placeholder="Email Address" />
                        </div>
                        <div class="py-3">
                            @error('name')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                            <input wire:model="name" class="text-gray-500 w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" type="text" placeholder="Name" />
                        </div>
                        <div class="py-3">
                            @error('comment')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                            <textarea wire:model="comment" row="4" class="text-gray-500 w-full h-40 px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" placeholder="Your message here..."></textarea>
                        </div>
                        <div class="pt-3">
                            <button wire:loading.attr="disabled" wire:loading.class="bg-indigo-500" wire:target="contactFormSubmit" class="flex px-6 py-3 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 hover:text-white focus:outline-none focus:shadow-outline focus:border-indigo-300" type="submit">
                                <span class="self-center float-left ml-3 text-base font-medium">Sent</span>
                            </button>
                            <div wire:loading wire:target="contactFormSubmit" class="text-gray-500">
                                Sent message ....
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
