<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>
    
    @foreach ($blog as $eachblog)
    <article class="py-8 blog-post max-w-md border-b border-gray-400 ">
      <a href="/blog/{{ $eachblog['slug'] }}" class="hover:underline">
        <h3 class="mb-1 text-2xl font-bold text-gray-700 tracking-tighter">{{ $eachblog['title'] }}</h3>
      </a>
      <div >By
        <a class="hover:underline text-base text-gray-500" href="/author/{{ $eachblog->author->username }}">{{ $eachblog->author->name }}</a> in
        <a class="hover:underline text-base text-gray-500" href=""> Web Programming </a>
        | {{ $eachblog->created_at->diffForHumans() }}
      </div>
      
      <p class="font-light text-justify ">{{Str::of($eachblog['body'])->limit(100, preserveWords: true)}}</p>
        <a href="/blog/{{ $eachblog['slug'] }}" class="font-medium text-blue-400 hover:underline">Read More &raquo</a>
    </article>
    @endforeach
</x-layout>
