@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="about">
        <div class="collection-header">
            <div class="w-full h-48 bg-fixed"
              style="background-image: url(https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140604_960_720.jpg)"
                 >
                 <div class="w-full h-full text-white bg-black opacity-50 mt-20">
                    <div class="max-w-3xl mx-auto text-center ">
                      <h1 class="pt-10 mb-3 text-5xl font-bold " >About Us</h1>
                      <div class="flex justify-center ">
                        <a href="/" class="font-bold hover:text-red-800 text-1xl">
                          Home
                        </a>
                        
                        <span class="text-red-500" >
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4  mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                          </svg>
                        </span>
                        
                        <a href="" class="">
                          About 
                        </a>
                      </div>
                    </div>
                 </div>
               </h6>
            </div>
          </div>
    
        <div class="max-w-5xl mx-auto  ">
          <h1 class="mt-24 mb-3 text-3xl font-bold text-center">Our Services</h1>
          <p class="text-gray-400 text-center">Details to details is what makes Hexashop different from the other themes.</p>
    
            <div class="grid md:grid-cols-3  mt-3 gap-3 py-3 px-5">
              <div class="col-1 bg-gray-200 pt-5 ">
                <h1 class="text-center  text-2xl mb-3   font-bold">Synther Vaporware </h1>
                <p class="mx-3 text-gray-700 mb-3">Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                <img src="../assets/service-01.jpg" alt="">
              </div>
              <div class="col-1 bg-gray-200 pt-5 ">
                <h1 class="text-center  text-2xl mb-3   font-bold">Locavore Squidward</h1>
                <p class="mx-3 text-gray-700 mb-3">Lorem ipsum dolor sit amet,adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                <img src="../assets/service-02.jpg" alt="">
              </div>
              <div class="col-1 bg-gray-200 pt-5 ">
                <h1 class="text-center  text-2xl mb-3   font-bold">Health Gothfam </h1>
                <p class="mx-3 text-gray-700 mb-3">Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                <img src="../assets/service-03.jpg" alt="">
              </div>
            </div>
        </div>
      </div>
</div>
@endsection