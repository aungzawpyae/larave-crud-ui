@extends('layouts.app')

@section('content')
  <div class="collection-header ">
    <div class="w-full h-48 bg-fixed"
      style="background-image: url(https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140604_960_720.jpg)"
         >
         <div class="w-full h-full text-white bg-black opacity-50">
            <div class="max-w-3xl mx-auto text-center ">
              <h1 class="pt-10 mb-3 text-5xl font-bold " >Collection</h1>
              <div class="flex justify-center ">
                <a href="" class="font-bold hover:text-red-800 text-1xl">
                  Home
                </a>
                
                <span class="" >
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 py-8 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </span>
                <a href="" class="">
                  Collection List
                </a>
              </div>
            </div>
         </div>
       </h6>
    </div>
  </div>
    <div class="py-12 bg-gray-100">
        <div class="grid grid-cols-1 gap-5 p-10 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4">
            
              <div class="overflow-hidden rounded shadow-lg">
                <img class="w-full " src="{{ asset('images/i-5.jpg') }}" alt="Mountain">
                <div class="px-6 py-4">
                  <div class="mb-2 text-xl font-bold text-pink-600">
                    Collection Name
                  </div>
                  <p class="text-base text-center text-gray-700">
                   344 Itmes
                  </p>
                </div>
                <div class="py-3 text-center">
                  <a href="" class="text-red-500 font-bold rounded-full bg-gray-900 hover:text-black hover:bg-pink-700 focus:ring-4 focus:ring-blue-300  text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read More ..
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                </div>
              </div>

           
        </div>

          
     
      
    </div>
    </div>
@endsection