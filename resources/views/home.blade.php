@extends('layouts.app')

@section('content')
    

    <!-- Slider main container -->
    <div class=" swiper md:mt-24">
        <!-- Additional required wrapper -->
        <div class=" swiper-wrapper">
        <!-- Slides -->
       
            <div class="swiper-slide">
                <a href="">
                    
                    <img src="{{ asset('images/b-3.jpg') }}" alt="">
                </a>
        </div>
      
            
            
        
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

<div class="container mx-auto computer">
    <div class="flex justify-between mx-3 my-8">
        <h2 class=" xl:text-3xl">
           Collection Name
           
           
        </h2>
        <a href="/">
            <h4 class="flex collection-view">
                
                <div class="">
                    View All
                </div>
                <section class="mx-3 ">
                
                    <div class="relative spin circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </section>
            </h4>
        </a>
    </div>
    <div class="flex flex-wrap ">
            
            <div class="w-full p-4 sm:w-1/2 md:w-1/2 xl:w-1/4">
                <a href="" class="block overflow-hidden bg-white rounded-lg shadow-md h-80 hover:shadow-xl hover:border">
                    <div class="relative z-0 overflow-hidden">
                        <img class="inset-0 object-contain w-full transition duration-700 ease-in-out absoslute h-44 hover:scale-110" src="{{ asset('images/i-3.jpg') }}" alt="">
                    </div>
                
                
                
                    <div class="p-4">
                        <div class="flex items-center justify-between text-sm text-gray-600 ">
        
                
                    </div>
                    <h2 class="mt-2 mb-2 font-bold">
                        Product Name
                    </h2>
                
                    <div class="flex items-center mt-3">
                        <span class="font-bold text-pink-600 text-x">Ks  899900</span>
                    </div>
                    </div>
        
            
                
                </a>
            </div> 
            
            
     
        
    </div>
</div>

<div class="max-w-6xl my-10 border-b md:mx-auto ">

</div>
<div class="about max-w-6xl mx-auto">
    <div class="flex flex-row">
        <div class="basis-1/2">
            <img src="{{ asset('images/img2-about-us.jpg') }}" alt="">
        </div>
        <div class="basis-1/2 px-3 py-3 mt-8 mx-8 ">
            <h4>About Us</h4>
            <h1 class="font-bold text-pink-700 my-3">WHY CHOOSE OUR?</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.

                Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.

                Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.
            </p>
            <div class="flex my-6 px-3">
                <div class="m-3">
                    <svg
                        class="w-6 h-6 text-blue-600 fill-current"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                        />
                    </svg>
                </div>
                <div class="m-3">
                        <svg
                            class="w-6 h-6  text-blue-400 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 496 512">
                            <path
                                d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"
                            ></path>
                        </svg>
                </div>
                <div class="m-3">
                    <svg
                        class="w-6 h-6 text-pink-600 fill-current"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"
                        />
                    </svg>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
