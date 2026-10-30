 @props(['card'])

 <article
     class="rounded-lg border border-gray-200 border-l-4 border-l-amber-400 bg-white p-5
                        dark:border-gray-700 dark:border-l-amber-400 dark:bg-gray-800">
     <h2 class="text-lg font-semibold text-gray-900 dark:text-white">
         {{ $card->title }}
     </h2>
     <p class="text-sm text-gray-500 dark:text-gray-400">
         {{ $card->author }}
     </p>
     <p class="mt-3 text-gray-700 dark:text-gray-300">
         {{ $card->comment }}
     </p>
     <div class="mt-3 text-gray-700 dark:text-gray-300">
         @if($card->like)
            <a 
            href={{  route("toggle", $card->id) }}
            class="inline-block rounded-lg bg-gray-200 px-4 py-2 text-white hover:bg-gray-500 cursor-pointer transition-transform duration-300 hover:scale-115 ease-in-out ">
                <x-lucide-thumbs-up  class="size-5 text-green-400" /> 
            </a>
            @else 
              <a 
            href={{  route("toggle", $card->id) }}
              class="inline-block rounded-lg bg-gray-200 px-4 py-2 text-white hover:bg-gray-500 cursor-pointer transition-transform duration-300 hover:scale-115 ease-in-out ">
                <x-lucide-thumbs-down  class="size-5 text-red-400" /> 
            </a>
         @endif
        </div>
 </article>
