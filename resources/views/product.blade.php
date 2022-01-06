@extends('layouts.app')

@section('content')
<div class="collection-header">
    <div class="w-full h-48 bg-fixed"
      style="background-image: url(https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140604_960_720.jpg)"
         >
         <div class="w-full h-full text-white bg-black opacity-50 mt-20">
            <div class="max-w-3xl mx-auto text-center ">
              <h1 class="pt-10 mb-3 text-5xl font-bold " >Product List</h1>
              <div class="flex justify-center ">
                <a href="/" class="font-bold hover:text-red-800 text-1xl">
                  Home
                </a>
                
                <span class="" >
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 py-8 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </span>
                <a href="" class="">
                  Product
                </a>
              </div>
            </div>
         </div>
       </h6>
    </div>
  </div>

  <div class="max-w-7xl mx-auto">
    <div class="flex flex-wrap ">
    
      <div class="w-full p-4 sm:w-1/2 md:w-1/2 xl:w-1/4">
          <a href="" class="block overflow-hidden bg-white rounded-lg shadow-md h-80 hover:shadow-xl hover:border">
              <div class="relative z-0 overflow-hidden">
                  <img class="inset-0 object-contain w-full transition duration-700 ease-in-out absoslute h-44 hover:scale-110" src="{{ asset('images/i-3.jpg')}}" alt="">
              </div>
          
          
          
              <div class="p-4">
                  <div class="flex items-center justify-between text-sm text-gray-600 ">
  
          
              </div>
              <h2 class="mt-2 mb-2 font-bold">
                  product name
              </h2>
          
              <div class="flex items-center mt-3">
                  <span class="font-bold text-pink-600 text-x">Ks 99999</span>
              </div>
              </div>
  
      
          
          </a>
      </div> 
      
      

  
</div>
  </div>
@endsection