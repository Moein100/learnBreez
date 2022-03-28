<x-app-layout>
    {{-- filters --}}
  <div class="filters flex space-x-6">
    <div class="w-1/3">
        <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
            <option value="1">Category One</option>
            <option value="1">Category One</option>
            <option value="1">Category One</option>
            <option value="1">Category One</option>
        </select>
    </div>
    <div class="w-1/3">
        <select name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
            <option value="1">Category One</option>
            <option value="1">Category One</option>
            <option value="1">Category One</option>
            <option value="1">Category One</option>
        </select>
    </div>
    <div class="w-1/3 relative">
 
        <input type="search" placeholder="Find an Idea" class="w-full placeholder-gray-900 border-none rounded-search  bg-white px-4 py-2 pl-8">
        <div class="absolute top-0 flex items-center text-gray-700 h-full ml-2">
            <svg class="h-6 w-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>
  </div> {{--end filters --}}

  {{-- ideas --}}
  <div class="ideas-container space-y-6 my-6">
    <div class="idea-container hover:shadow-md transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
        {{-- 1 --}}
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">
                    12
                </div>
                <div class="text-gray-500">
                     Votes   
                </div>
            </div>
            <div class="mt-8">
                <button 
                class="w-20 border-2 bg-gray-200 font-bold text-xs border-gray-200 hover:border-gray-400 
                transition duration-150 ease-in
                rounded-xl px-4 py-2">
                    VOTE
                </button>
            </div>
        </div>
        {{-- 2 --}}
        <div class="flex flex-1 px-2 py-6"> 
            <div class="flex-none">
                <a href="" ><img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl"></a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur fugit nam tempora. Id veniam blanditiis laborum ad. Cumque, sed harum facere nam maxime atque temporibus quis, numquam vel expedita voluptatem!
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-300">
                        <div>10 Hours ago</div>
                        <div>&bull;</div>
                        <div>category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-800">3 comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center  px-7 py-1">
                            Open
                        </div>
                        <button class="bg-gray-200 text-xxs hover:bg-gray-400 rounded-full py-1 px-4 transition duration-150 ease-in ">
                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                            <ul class="absolute w-44 font-semibold text-sm bg-white shadow-lg rounded-xl py-3  ml-8">
                                <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Mark as smap</a></li>
                                <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Delete Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
   
        </div>
    </div>
  </div>
  {{-- end Ideas --}}







    {{-- ideas2 --}}
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-md transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            {{-- 1 --}}
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue-600">
                        12
                    </div>
                    <div class="text-gray-500">
                         Votes   
                    </div>
                </div>
                <div class="mt-8">
                    <button 
                    class="w-20 border-2 bg-blue-600 font-bold text-xs text-white border-blue-600 hover:border-blue-800 
                    transition duration-150 ease-in
                    rounded-xl px-4 py-2">
                    VOTED
                    </button>
                </div>
            </div>
            {{-- 2 --}}
            <div class="flex px-2 py-6"> 
                <a href="" class="flex-none"><img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl"></a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur fugit nam tempora. Id veniam blanditiis laborum ad. Cumque, sed harum facere nam maxime atque temporibus quis, numquam vel expedita voluptatem!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-300">
                            <div>10 Hours ago</div>
                            <div>&bull;</div>
                            <div>category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-800">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center  px-7 py-1">
                                Open
                            </div>
                            <button class="bg-gray-200 text-xxs hover:bg-gray-400 rounded-full py-1 px-4 transition duration-150 ease-in ">
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul class="absolute w-44 font-semibold text-sm bg-white shadow-lg rounded-xl py-3  ml-8">
                                    <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Mark as smap</a></li>
                                    <li><a href="" class="hover:bg-gray-200 px-5 py-3 block transition duration-150 ease-in"> Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
       
            </div>
        </div>
      </div>
      {{-- end Ideas2 --}}






  
    </x-app-layout>