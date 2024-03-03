@props(['post'])

<article class="mt-8 bg-white shadow-2xl rounded-lg overflow-hidden border border-gray-200">
                <img class="w-full h-20 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">

                <div class="px-6 py-8">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{ route('posts.show', $post) }}">{{$post->name}}</a>
                    </h1>

                    <div class="text-gray-700 text-base">
                        {{$post->extract}}
                    </div>
                </div>

                <div class="px-6 pt-4 pb-2">
                    @foreach ($post->tags as $tag)
                        <a href="{{route('posts.tag', $tag)}}" class="inline-blocl bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name}}</a>
                    @endforeach
                </div>

            </article>