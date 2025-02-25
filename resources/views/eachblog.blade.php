<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>
    
    {{-- <article class="py-8 blog-post max-w-md">
        <h3 class="mb-1 text-2xl font-bold text-gray-700 tracking-tighter">{{ $eachblog['title'] }}</h3>
        <div class="">By
          <a class="hover:underline text-base text-gray-500" href="/author/{{ $eachblog->author->username }}">{{ $eachblog->author->name }}</a> in
          <a class="hover:underline text-base text-gray-500" href="/category/{{ $eachblog->category->slug }}"> {{ $eachblog->category->name }} </a>
          | {{ $eachblog->created_at->diffForHumans() }}
        </div>
      <p class="font-light text-justify ">{{ $eachblog['body'] }}</p>
        <a href="/blog" class="font-medium text-blue-400 hover:underline">&laquo; Back to menu</a>
    </article> --}}

    <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
            <a href="/blog" class="text-primary-400 hover:underline">&laquo; back to menu</a>
              <address class="flex items-center my-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $eachblog->author->name }}">
                      <div>
                          <a href="/blog?author={{ $eachblog->author->username }}  rel="author" class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{ $eachblog->author->name }}</a>
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="{{ $eachblog->created_at->diffForHumans() }}">{{ $eachblog->created_at->diffForHumans() }}</time></p>
                      </div>
                  </div>
                  
              </address>
              <a href="/posts?category={ $eachblog->category->slug }}">
                <span class="{{ $eachblog->category->color }} text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 my-5 rounded dark:bg-primary-200 dark:text-primary-800 hover:bg-slate-200 hover:underline">
                    {{ $eachblog->category->name }}
                </span>
              </a>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $eachblog['title'] }}</h1>
          </header>
          <p class="lead">{{ $eachblog['body'] }}</p>
      </article>
      </div>
      </main>
</x-layout>
