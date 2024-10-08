@props(['post'])
<article class="mb-8 bg-white shadow-lg rounded-lg">
                <img class="w-full h-72 object-cover object-center rounded-md" src="{{Storage::url($post->image->url)}}" alt="">
                <div class="px-6 py-4">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{route('posts.show', $post)}}" class="text-4xl text-gray-700 font-bold">{{$post->name}}</a>
                    </h1>
                    <div class="text-gray-700 text-base">
                    {{$post->extract}}
                    </div>
                </div>
                <div class="px-6 pt-4 pb-2">
                    @foreach($post->tags as $tag)
                        <a href="{{route('posts.tag', $tag)}}" class="inline-block px-3 h-6 text-white rounded-full text-sm mr-2 text-center" style="background-color: {{ $tag->color }}; text-align: center; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9)">{{$tag->name}}</a>
                    @endforeach
                </div>
</article>