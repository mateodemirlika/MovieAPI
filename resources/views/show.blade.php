@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">

    <div class="container mx-auto px-4 py-16 flex md:flex-row ">
            <img src="{{'https://image.tmdb.org/t/p/w500/' .$movie['poster_path']}}" alt="iron-man" class="w-1/2 " >
        <div class="md:ml-24 ">
                <h2 class="md:text-3xl  font-semibold">{{$movie['title']}}</h2>
                <div class="flex  flex-wrap items-center  text-gray-400 text-sm">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 0 0 .95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 0 0-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 0 0-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 0 0-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 0 0 .951-.69l1.519-4.674z"/></svg></span>
                    <span class="ml-1">{{$movie['vote_average']*10 .'%'}}</span>
                    <span class="mx-2">|</span>
                    <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                  
                    <span class="ml-3">
                        @foreach($movie['genres'] as $genre)   
                        {{$genre['name'] }}
                         {{-- @if(!$loop->last)   @endif --}}
                        @endforeach
                    </span>
                </div>
                
                <p class="text-gray-300 mt-8">{{$movie['overview']}}  </p>
              
             
              
                <div class="mt-12">
                    <h4 class="text-white font-semibold"> Featured Cast</h4>
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if($loop->index < 2)
                        
                                <div class="mr-8">
                                    <div>{{$crew['name']}}</div>
                                    <div class="text-sm text-gray-400">Screenplay,Director,Story</div>
                                </div>
                            @endif
                        @endforeach
                        
                    </div>
                </div>
                <div>
        <div x-data="{ isOpen: false }">
         @if (count($movie['videos']['results']) > 0)
            <div class="mt-12">
                <button
                    @click="isOpen = true"
                    class="flex inline-flex items-center bg-red-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-red-600 transition ease-in-out duration-150"
                >
                    <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                    <span class="ml-2">Play Trailer</span>
                </button>
            </div>



            <template x-if="isOpen">
            <div 
                style="background-color: rgba(0, 0, 0, .5);"
                class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                x-show.transition.opacity="isOpen"
                >
                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                    <div class="bg-gray-900 rounded">
                        <div class="flex justify-end pr-4 pt-2">
                            <button
                                @click="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="text-3xl leading-none hover:text-gray-300">&times;
                            </button>
                        </div>
                        <div class="modal-body px-8 py-8">
                            <div 
                                class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}"
                                style="border:0;" allow="autoplay; encrypted-media" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </template>
            @endif

        </div>
        
        </div>
    

    
  </div>

</div>
<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col ">
        <h2 class="text-4xl font-semibold">Cast</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
        

            
            @foreach ($movie['credits']['cast'] as $cast)
                    @if($loop->index <5 )
                    
                    
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{'https://image.tmdb.org/t/p/w500/' .$cast['profile_path']}}" alt="iron-man" class=" flex inline-flex hover:opacity-75 transition ease-in-out duration-150 ">
                            </a>
                            <div class="mt-2 ">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">{{$cast['character']}}</a>
                                
                            </div>
                            <div class="text-gray-400 text-sm">
                                {{$cast['original_name']}}
                            </div>
                        </div>
                    @endif
                @endforeach
                    
                </div>
                
 </div>
          <div class="movie-images" x-data="{ isOpen: false, image: ''}">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($movie['images']['backdrops'] as $image)
            @if($loop->index<9)
                <div class="mt-8">
                    <a
                        @click.prevent="
                            isOpen = true
                            image='{{ 'https://image.tmdb.org/t/p/original/'.$image['file_path'] }}'
                        "
                        href="#"
                    >
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="image1" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                @endif
            @endforeach
        </div>

        <div
            style="background-color: rgba(0, 0, 0, .5);"
            class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
            x-show="isOpen"
        >
            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                <div class="bg-gray-900 rounded">
                    <div class="flex justify-end pr-4 pt-2">
                        <button
                            @click="isOpen = false"
                            @keydown.escape.window="isOpen = false"
                            class="text-3xl leading-none hover:text-gray-300">&times;
                        </button>
                    </div>
                    <div class="modal-body px-8 py-8">
                        <img :src="image" alt="poster">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end movie-images -->

               

           
            

 
@endsection