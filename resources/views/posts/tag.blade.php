<x-app-layout>
    <div class="mx-auto max-w-5xl px-2 sm:px-6 lg:px-8 py-8 ">
        <h1 class=" uppercase text-4xl font-bold text-gray-600 text-center overflow-hidden">Etiqueta: {{$tag->name}}</h1>
        @foreach($posts as $post)
            <x-card-post :post="$post"/>
        @endforeach

        <div class="mt-4">
            {{$posts->links()}}
        </div>
        
    </div>
</x-app-layout>