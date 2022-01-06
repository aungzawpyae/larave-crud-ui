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
               <h1 class="pt-10 mb-3 text-5xl font-bold " >Contact Us</h1>
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
                   Contact
                 </a>
               </div>
             </div>
          </div>
        </h6>
     </div>
   </div>

 <div class="max-w-7xl mx-auto  ">
     <div class="grid md:grid-cols-2  mt-3 gap-3 py-3 px-5">
       <div class="col-1  pt-5  ml-12">
         <div>
         <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1676.4250228323713!2d96.15645775231818!3d16.815044745404368!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1640098365926!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         </div>
         
       </div>
       <div class="col-1  pt-5 ">
         

           <div class="container mx-auto">
             <div class="max-w-xl p-5 mx-auto my-10 bg-white rounded-md shadow-sm">
               <div class="text-center">
                 <h1 class="my-3 text-3xl font-semibold text-gray-700">Say Hello. Don't Be Shy!</h1>
                 <p class="text-gray-400">Fill up the form below to send us a message.</p>
               </div>
               <div>
                 <form action="" method="POST">
                   <div class="mb-6">
                     <label for="name" class="block mb-2 text-sm text-gray-600"
                       >Full Name</label
                     >
                     <input
                       type="text"
                       name="name"
                       placeholder="John Doe"
                       required
                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                     />
                   </div>
                   <div class="mb-6">
                     <label for="email" class="block mb-2 text-sm text-gray-600"
                       >Email Address</label
                     >
                     <input
                       type="email"
                       name="email"
                       placeholder="you@email.com"
                       required
                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                     />
                   </div>
                 
                   <div class="mb-6">
                     <label for="message" class="block mb-2 text-sm text-gray-600"
                       >Your Message</label
                     >

                     <textarea
                       rows="5"
                       name="message"
                       placeholder="Your Message"
                       class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                       required
                     ></textarea>
                   </div>
                   <div class="mb-6">
                     <button
                       type="submit"
                       class="w-full px-2 py-4 text-white bg-indigo-500 rounded-md  focus:bg-indigo-600 focus:outline-none"
                     >
                       Send Message
                     </button>
                   </div>
                 </form>
               </div>
             </div>
           </div>
       </div>
      
     </div>
 </div>
</div>

 </div>
@endsection