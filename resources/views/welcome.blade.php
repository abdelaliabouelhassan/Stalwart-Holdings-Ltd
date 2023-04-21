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
                    <a href="javascript:void(0)" onclick="goTo('home')">Home</a>
                    <a href="javascript:void(0"  onclick="goTo('about')">About</a>
                    <a href="javascript:void(0"  onclick="goTo('portfolio')">Portfolio</a>
                    <a href="javascript:void(0"  onclick="goTo('contact')">Contact</a>

            </div>
        </div>
       </div>
        <div class=" w-full grid md:grid-cols-2 overflow-hidden relative pt-48 bg-white" id="home">
            <img src="{{asset('images/ppl.png')}}" class="   -left-[0rem] top-40 scale-125 fixed " alt="">
            <div class=" w-full  overflow-hidden  h-[700px] bg-white  ">
               
            </div>
            <div class=" w-full flex z-10 bg-white">
                <div class=" flex flex-col items-start space-y-10 m-auto">
                    <h1 class=" text-black text-7xl font-medium leading-[100px]">Stalwart <br> Holdings</h1>
                    <p class="text-base">
                        A Modern Small Sized Family Office
                    </p>
                    <button class=" bg-black py-3 px-6 text-white hover:bg-opacity-75" id="about">
                        Get in Touch
                    </button>
                </div>
            </div>
        </div>

        <div class=" w-full bg-white z-10 relative py-10 " >
            <section class=" w-full grid sm:grid-cols-2 gap-5 px-4 md:px-20" >
                <div class=" w-full bg-[#F4F4F4] flex py-10 px-5">
                    <div class=" m-auto flex flex-col items-center space-y-8">
                        <span class=" text-black text-4xl">About Us</span>
                        <p class=" text-center text-black text-base max-w-[500px]">
                            Founded in 2008, Stalwart Holdings Ltd is a privately held company that handles investment management and wealth management for a single high net worth family, with the goal being to effectively grow and transfer wealth across generations.
                        </p>
                    </div>
                </div>
                <div class=" w-full">
                    <img src="{{asset('images/coins.png')}}" class=" w-full h-full" alt="">
                </div>
            </section>

            <section class=" w-full flex flex-col pt-20 items-center space-y-20 md:space-y-40  max-w-[1000px] m-auto px-4 md:px-20" id="portfolio">
                <div class=" flex flex-col items-center space-y-4">
                    <span class=" text-black text-4xl font-semibold">Investment Portfolio</span>
                    <span class=" text-black text-lg">Asset Classes We Work With</span>
                </div>
                <div class=" w-full space-y-20 md:space-y-52">
                    <div class=" w-full flex md:flex-row flex-col md:items-center space-y-5 md:space-y-0 items-start md:space-x-5">
                        <div class=" max-w-[220px] w-full bg-gray-500 ">
                            <img src="{{asset('images/Equities.png')}}" alt="">
                        </div>
    
                        <div class=" flex flex-col items-start space-y-2">
                            <span class=" text-black text-lg font-semibold">Equities</span>
                            <p class=" text-base text-black">
                                We have a considerable exposure to US and UK equities through tracker index funds and internally developed strategies to detect value-for-money stocks and overall momentum in the market.
                            </p>
                        </div>
                    </div>
                    <div class=" w-full flex md:flex-row flex-col md:items-center space-y-5 md:space-y-0 items-start md:space-x-5">
                        <div class=" max-w-[220px] w-full bg-gray-500 ">
                            <img src="{{asset('images/FixedIncome.png')}}" alt="">
                        </div>
    
                        <div class=" flex flex-col items-start space-y-2">
                            <span class=" text-black text-lg font-semibold">Fixed Income</span>
                            <p class=" text-base text-black">
                                We maintain a globally diversified High Yield Corporate Debt portfolio together with US Treasuries and Inflation-Linked UK Gilts.
                            </p>
                        </div>
                    </div>
                    <div class=" w-full flex md:flex-row flex-col md:items-center space-y-5 md:space-y-0 items-start md:space-x-5">
                        <div class=" max-w-[220px] w-full bg-gray-500 ">
                            <img src="{{asset('images/RealEstate.jpg')}}" alt="">
                        </div>
    
                        <div class=" flex flex-col items-start space-y-2">
                            <span class=" text-black text-lg font-semibold">Real Estate</span>
                            <p class=" text-base text-black">
                                We own and let residential property in South East England and are minority shareholders of GCP Student Living, an investment company focussed on investments in large scale student accommodation in and around London.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class=" w-full grid  gap-10 md:gap-0 md:grid-cols-2 pt-20 md:pt-56" id="contact">
                <div class=" w-full flex">
                    <div class=" m-auto max-w-[454px] px-4 flex flex-col items-center space-y-14">
                        <h1 class=" font-semibold text-black text-5xl">Contact</h1>
                        <p class=" text-black text-base text-center">
                            We are always looking for the next big idea. Get in touch with us to find out more.
                        </p>

                        <form  class=" w-full flex flex-col items-start space-y-4">
                            @csrf
                            <div class=" w-full flex flex-col items-start space-y-2">
                                <span>Name *</span>
                                <input type="text" class=" w-full border border-black px-4 py-3 outline-none" placeholder="Name" name="name" id="name">
                            </div>
                            <div class=" w-full flex flex-col items-start space-y-2">
                                <span>Email *</span>
                                <input type="email" class=" w-full border border-black px-4 py-3 outline-none" placeholder="Email" name="email" id="email">
                            </div>
                            <div class=" w-full flex flex-col items-start space-y-2">
                                <span>Subject</span>
                                <input type="text" class=" w-full border border-black px-4 py-3 outline-none" placeholder="Subject" name="subject" id="subject">
                            </div>
                            <div class=" w-full flex flex-col items-start space-y-2">
                                <span>Leave us a message...</span>
                               <textarea name="message" id="message" cols="30" rows="5" class=" w-full border border-black px-4 py-3 outline-none" placeholder="Type your message here..."></textarea>
                            </div>
                            <div class=" w-full flex justify-center">
                                <button onclick="contactUs()" class=" bg-black py-4 font-semibold px-10 text-white hover:bg-opacity-75 ">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=" w-full">
                    <img src="{{asset('images/contactus.png')}}" class=" w-full h-full" alt="">
                </div>
            </section>

            <section class=" w-full flex flex-col items-center space-y-10 px-4 pt-10">
                <div>
                    <img src="{{asset('images/stalwartad_edited.png')}}" alt="">
                </div>
                <div class=" flex items-center space-x-4">
                    <a href="https://www.facebook.com/profile.php?id=100015527898742">
                        <img src="{{asset('images/Facebook.png')}}" alt="">
                    </a>
                    <a href="https://www.linkedin.com/company/stalwart-holdings-ltd/">
                        <img src="{{asset('images/LinkedIn.png')}}" alt="">
                    </a>
                </div>
            </section> 
        </div>

        <footer class=" w-full py-2 flex bg-[#F4F4F4] text-sm justify-center  text-center">
            <span class=" text-base text-black">©2020 by Stalwart Holdings Ltd.</span>
        </footer>


        <script>
            var loading = false
            function goTo(targetId) {
                const target = document.getElementById(targetId);
                target.scrollIntoView({ behavior: 'smooth' });

            }
            function contactUs() {
                if(loading){
                    return;
                }
              
                //prevent default
                event.preventDefault();
                const name = document.getElementById('name');
                const email = document.getElementById('email');
                const subject = document.getElementById('subject');
                const message = document.getElementById('message');
                const csrf = document.querySelector('input[name="_token"]').value;
                //clear border
                name.style.border = '1px solid black';
                email.style.border = '1px solid black';
                //validation
                if (name.value === '') {
                    name.focus();
                    name.style.border = '1px solid red';
                    return;
                }
                if (email.value === '') {
                    email.focus();
                    email.style.border = '1px solid red';
                    return;
                }
                //validate email 
                const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (!emailRegex.test(email.value)) {
                    email.focus();
                    email.style.border = '1px solid red';
                    return;
                }
                
                loading = true
                const data = {
                    name: name.value,
                    email: email.value,
                    subject: subject.value,
                    message: message.value,
                    _token: csrf
                }
                fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                    .then(res => res.json())
                    .then(data => {
                        console.log(data);
                        if (data.status === 'success') {
                            alert('Message sent successfully');
                            loading = false
                        } else {
                            alert('Message failed to send');
                            loading = false
                        }
                    })
                    .catch(err => {
                        loading = false
                        alert('Message failed to send');
                    })
            }
        </script>
    </body>
</html>
