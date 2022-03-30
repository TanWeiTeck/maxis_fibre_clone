<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="max-w-full overflow-auto flex justify-center m-auto">
        <div id="app"
        class="max-w-screen-2xl">

            
            <div class="z-0">
            <maxisheader></maxisheader>
            <maxisservice></maxisservice>
            <maxispros></maxispros>
            <maxisfibre></maxisfibre>
                <div class="flex max-h-max w-screen overflow-x-auto snap-x snap-mandatory ">
            @foreach ($fibreplans as $plan)
           

                <div class="m-4 bg-gray-100 border-2 min-w-[22rem] overflow-hidden border-blue-800 hover:border-blue-500 rounded-2xl shadow-md hover:shadow-lg hover:shadow-blue-400 duration-500 snap-center">
                    <div class="text-blue-900 p-5">
                        <h1 class="text-xl">Maxis Home Fibre</h1>
                        <p class="text-3xl font-extrabold">{{$plan['name']}}</p>
                    </div>
                    <div class="bg-white text-gray-900 px-5 py-3">
                        <h1 class="text-xl font-b">Recommended For</h1>
                        <ul class="">
                            <li class=""><span class="text-blue-800 text-xl font-extrabold">&#9737;</span>  {{$plan['description']}}</li>
                        </ul>
                        <p class="text-[0.6rem]">* Existing customer who change rate plan is not eligible for free DECT phone.</p>
                        <hr class="text-blue-800 border-8 my-3">
                        <div class="flex justify-between">
                            <h1><span class="text-xl font-extrabold">RM {{$plan['price']}}</span>/month</h1>
                            <a href="{{url('/apply')}}">
                                <button 
                                class="bg-[#40c706] rounded-full px-7 py-2 text-white hover:text-black hover:bg-blue-400 hover:scale-105 duration-300 font-extrabold"
                                >Apply Now</button>
                            </a>
                            
                        </div>
                    </div>
                </div>
            
                @endforeach
            </div>

            
            <maxispros2></maxispros2>


{{-- Check Coverage Form --}}
        <div id="coverage"
        class=" p-4">
            <h1 class="text-blue-900 text-3xl font-extrabold text-center py-4">
                Check Your Coverage
            </h1>
            <form action="/apply" method="POST" class="flex flex-col justify-center">
                @csrf
                
                <select class="hidden" type="text" name="package">
                    <option value="CheckCoverage">-</option>
                </select>
                <div class="flex space-x-4">
                    <div class="flex flex-col w-full">
                        <label class="text-xl mt-4 text-blue-900 font-extrabold" >Name</label>
                        <input class="px-3 py-2 border rounded-lg" type="text" name='name'placeholder="Your name" required>
                        <label class="text-xl mt-4 text-blue-900 font-extrabold">Contact Number</label>
                        <input class="px-3 py-2 border rounded-lg" type="text" name='contact'placeholder="Your contact number" required>
                    </div>
                    <div class="flex flex-col w-full">
                        <label class="text-xl mt-4 text-blue-900 font-extrabold">Email</label>
                        <input class="px-3 py-2 border rounded-lg" type="email" name='email' placeholder="Your email" required>
                        <label class="text-xl mt-4 text-blue-900 font-extrabold">Location</label>
                        <input class="px-3 py-2 border rounded-lg" type="text" name='location'placeholder="Location" required>
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="text-xl mt-4 text-blue-900 font-extrabold">Message</label>
                    <textarea class="px-3 py-2 h-[150px] w-full border rounded-lg" name='message' placeholder="message">Message here..</textarea>

                </div>
                <button
                class="bg-[#40c706] rounded-md mt-3 px-7 py-2 text-white hover:text-black hover:bg-blue-400 hover:scale-95 duration-300 font-extrabold"
                >SUMMIT</button>
            </form>
            
        </div>

        <maxisfooter></maxisfooter>



                
            </div>
                
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
