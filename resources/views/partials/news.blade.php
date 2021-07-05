<section class="bg-white border-b py-8">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        {{ __('What is up with us') }}
      </h1>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>

      @foreach ($posts->where('category_id', App\Models\Category::getCategoryId('Post')) as $post)

        @if($loop->iteration > 3)

            @break

        @endif

      <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
          <a href="#" class="flex flex-wrap no-underline hover:no-underline">
            <p class="w-full text-gray-600 text-xs md:text-sm px-6 pt-6">
              <img
              class="object-cover w-full"
              src="{{ url('storage/photos/'.$post->image) }}"
              alt=""
              loading="lazy"
            />
              {{-- xGETTING STARTED --}}
            </p>
            <div class="w-full font-bold text-xl text-gray-800 py-4 px-6">
              {{ $post->title }}
            </div>
            <p class="text-gray-800 text-base py-4 px-6 mb-5">
              {{ Str::limit($post->value, 150) }}
            </p>
          </a>
        </div>
        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
          <div class="flex items-center justify-end">
            <a href="/post/{{ $post->id }}" class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-4 py-2 px-6 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              {{ __('Read more') }}
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
