<x-app-layout>

    <div class="container mx-auto py-8 ml-4">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>

        <div class="text-lg text-gray-500 mt-2">
            {{$post->extract}}
        </div>

        <div class="grid grid-cols-3 gap-6">
        
        <!-- Contenido principal     -->
            <div class="col-span-2">

                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {{$post->body}}
                </div>

            </div>

            <!-- Contenido relacionado -->
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$post->category->name}}</h1>

                <ul>
    @foreach ($similares as $similar)
    <li class="mb-4">
        <a class="flex items-center space-x-3" href="{{ route('posts.show', $similar) }}">
            <img src="{{ Storage::url($similar->image->url) }}" alt="" class="w-20 h-20 object-cover"> <!-- Ajusta el tamaño de la imagen -->
            <span class="ml2 text-gray-600"> <!-- Ajusta el tamaño del texto si es necesario -->
                {{ $similar->name }} <!-- Asumiendo que quieres mostrar el nombre del post similar -->
            </span>
        </a>
    </li>
    @endforeach        
</ul>


            </aside>
        </div>

    </div>

</x-app-layout>