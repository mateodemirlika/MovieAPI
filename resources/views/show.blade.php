@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">

    <div class="container mx-auto px-4 py-16 flex md:flex-row ">
            <img src="{{asset('img/iron-man.jpeg')}}" alt="iron-man" class="w-1/2 " >
        <div class="md:ml-24 ">
                <h2 class="md:text-3xl  font-semibold"> Iron Man (2020)</h2>
                <div class="flex  flex-wrap items-center  text-gray-400 text-sm">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 0 0 .95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 0 0-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 0 0-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 0 0-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 0 0 .951-.69l1.519-4.674z"/></svg></span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb,20,2020</span>
                    <span class="ml-3">Action, Thriller, Comedy</span>
                </div>
                
                <p class="text-gray-300 mt-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe illum cupiditate at ea quae illo repudiandae voluptas laborum architecto consequatur non, eligendi quas itaque voluptatem harum minima sequi officiis, error assumenda debitis dignissimos autem quisquam? Enim, ullam voluptatum rem impedit ea consectetur numquam repellat nulla cum eius, sequi, debitis libero.   </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold"> Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay,Director,Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex items-center bg-red-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-red-600 transition ease-in-out duration-150"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.752 11.168-3.197-2.132A1 1 0 0 0 10 9.87v4.263a1 1 0 0 0 1.555.832l3.197-2.132a1 1 0 0 0 0-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg><span>Play Trailer</span></button>
                </div>
        
        </div>
        


    
  </div>

</div>
<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col ">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
            <div class="mt-8">
                <a href="#">
                    <img src="{{asset('img/iron-man.jpeg')}}" alt="iron-man" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2 ">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Iron Man</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 0 0 .95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 0 0-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 0 0-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 0 0-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 0 0 .951-.69l1.519-4.674z"/></svg></span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb,20,2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                     Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            
           
            
           
            
            

        </div>
    </div>
</div>
@endsection