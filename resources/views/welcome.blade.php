<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stalwart Holdings Ltd</title>
        @vite('resources/css/app.css')
      
    </head>
    <body>
       <div class=" w-full bg-white z-20  fixed">
        <header class=" w-full flex py-10 ">
            <img src="{{asset('images/stalwartlogo.png')}}" class=" m-auto" alt="">
        </header>
        <div class=" w-full py-2 flex bg-[#F4F4F4] text-sm text-center z-10 relative">
            <div class=" m-auto flex space-x-4">
                    <span>Home</span>
                    <span>About</span>
                    <span>Portfolio</span>
                    <span>Contact</span>

            </div>
        </div>
       </div>
        <div class=" w-full grid grid-cols-2 overflow-hidden relative pt-48 bg-white">
            <img src="{{asset('images/ppl.png')}}" class="   -left-[0rem] top-40 scale-125 fixed " alt="">
            <div class=" w-full  overflow-hidden  h-[700px] bg-white  ">
               
            </div>
            <div class=" w-full flex z-10 bg-white">
                <div class=" flex flex-col items-start space-y-10 m-auto">
                    <h1 class=" text-black text-7xl font-medium leading-[100px]">Stalwart <br> Holdings</h1>
                    <p class="text-base">
                        A Modern Small Sized Family Office
                    </p>
                    <button class=" bg-black py-3 px-6 text-white hover:bg-opacity-75">
                        Get in Touch
                    </button>
                </div>
            </div>
        </div>

        <div class=" w-full bg-white z-10 relative py-20 px-20">
            <div class=" w-full grid grid-cols-2 gap-5">
                <div class=" w-full bg-[#F4F4F4] flex py-10 px-5">
                    <div class=" m-auto flex flex-col items-center space-y-8">
                        <span class=" text-black text-4xl">About Us</span>
                        <p class=" text-center text-black text-base max-w-[500px]">
                            Founded in 2008, Stalwart Holdings Ltd is a privately held company that handles investment management and wealth management for a single high net worth family, with the goal being to effectively grow and transfer wealth across generations.
                        </p>
                    </div>
                </div>
                <div class=" w-full">
                    <img src="{{asset('images/coins.png')}}" alt="">
                </div>
            </div>
        </div>
    </body>
</html>
