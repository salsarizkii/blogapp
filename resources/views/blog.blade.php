<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>

      <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">

          <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
    @foreach ($blog as $eachblog)
              <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                  <div class="flex justify-between items-center mb-5 text-gray-500">
                    <a href="/category/{{ $eachblog->category->slug }}">
                      <span class="{{ $eachblog->category->color }} text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:bg-slate-200 hover:underline">
                          {{ $eachblog->category->name }}
                      </span>
                    </a>
                      <span 07 class="text-sm">{{ $eachblog->created_at->diffForHumans() }}</span>
                  </div>

                  <a href="/category/{{ $eachblog->category->slug }}">
                    <span class="{{ $eachblog->category->color }} text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:bg-slate-200 hover:underline">
                        {{ $eachblog->category->name }}
                    </span>
                  </a>
                  <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white" >
                    <a href="/blog/{{ $eachblog['slug'] }}">{{ $eachblog['title'] }}</a></h2>
                  <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{Str::of($eachblog['body'])->limit(100, preserveWords: true)}}</p>
                  <div class="flex justify-between items-center" >
                      <div class="flex items-center space-x-4">
                          <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                          <a  href="/author/{{ $eachblog->author->username }}" class="hover:underline">
                            <span class="font-medium dark:text-white">
                              {{ $eachblog->author->name }}
                            </span>
                          </a>

                      </div>
                      <a href="/blog/{{ $eachblog['slug'] }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                          Read more
                          <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      </a>
                  </div>
              </article>  
    @endforeach
      </div>  
    </div>
</x-layout>
