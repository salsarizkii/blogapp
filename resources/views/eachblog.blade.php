<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>
    
    <article class="py-8 blog-post max-w-md">
        <h3 class="mb-1 text-2xl font-bold text-gray-700 tracking-tighter">{{ $eachblog['title'] }}</h3>
      <div class="text-base text-gray-400">
        <a href="https://www.instagram.com/salsaa.rs">{{ $eachblog['author'] }}</a> - 1 jam yang lalu
      </div>
      <p class="font-light text-justify ">{{ $eachblog['body'] }}</p>
        <a href="/blog" class="font-medium text-blue-400 hover:underline">&laquo; Back to menu</a>
    </article>
</x-layout>
