<section class="bg-white border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        {{ __('Bitches') }}
      </h1>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      @foreach ($posts->where('category_id', App\Models\Category::getCategoryId('Dog')) as $post)
          @if ($loop->iteration%2)
              <div class="flex flex-wrap">
              <div class="w-5/6 sm:w-1/2 p-6">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                  {{ $post->title }}
              </h3>
              <p class="text-gray-600 mb-8">
              {{ $post->value }}
                  <br />
                  <br />

                  <a class="text-pink-500 underline" href="{{ route('dog', ['id' => $post->id])}}">{{ __('Read more') }}</a>
              </p>
              </div>
              <div class="w-full sm:w-1/2 p-6">
              <img class=" rounded-t w-full md:w-4/5 z-50" src="{{ url('storage/photos/'.$post->image) }}" />

              </div>
              </div>
          @else
              <div class="flex flex-wrap flex-col-reverse sm:flex-row">
              <div class="w-full sm:w-1/2 p-6 mt-6">
                  <img class="rounded-t w-full md:w-4/5 z-50" src="{{ url('storage/photos/'.$post->image) }}" />
              </div>
              <div class="w-full sm:w-1/2 p-6 mt-6">
                  <div class="align-middle">
                  <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                      {{ $post->title }}
                  </h3>
                  <p class="text-gray-600 mb-8">
                      {{ $post->value }}
                      <br />
                      <br />
                      <a class="text-pink-500 underline" href="{{ route('dog', ['id' => $post->id])}}">{{ __('Read more') }}</a>
                  </p>
                  </div>
              </div>
              </div>
          @endif
      @endforeach
    </div>
  </section>
