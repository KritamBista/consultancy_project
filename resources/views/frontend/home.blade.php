<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>

    {{-- Header --}}
    <header>
        <div class="  bg-black h-8 flex justify-between items-center px-10 ">

            {{-- left section  --}}
            <div class=" space-x-6  ">



                <a href="
                "class="text-white space-x-1">
                    <i class="fa-solid fa-envelope text-white"></i>

                    <span>{{ $company->name }}</span>
                </a>


                <a href="
                "class=" text-white space-x-1">
                    <i class="fa-solid fa-envelope text-white"></i>

                    <span>Call</span>

                </a>
                <a href="
                "class=" text-white space-x-1">
                    <i class="fa-solid fa-envelope text-white"></i>

                    <span>Request a Callback</span>

                </a>
            </div>



            {{-- right section --}}
            <div class=" space-x-4">
                <i class="fa-brands fa-facebook text-white"></i>
                <i class="fa-brands fa-instagram text-white"></i>
                <i class="fa-brands fa-linkedin text-white"></i>
                <i class="fa-brands fa-youtube text-white"></i>

            </div>

    </header>

    {{-- NavBar --}}
    <nav>
        <div class="flex justify-between bg-white px-4 py-2">
            <div>
                <h1> CONSULTANCY LOGO</h1>
            </div>
            <div class=" space-x-4">
                <a href="{{ route('contact') }}">About Us</a>
                <a href="">Services</a>
                <a href="">Blogs</a>
                <a href="">Destinations</a>
                <a href="">Test Preparation</a>
                <a href="">Contact Us</a>







            </div>



        </div>
    </nav>
    {{-- navbar end --}}

    <div class=" ">
        <div class="container bg-customColor  h-68 py-4 px-8 mx-auto grid  md:grid-cols-2 gap-8 ">
            <!-- Text Section -->
            <div class="">
                <h1 class="text-2xl md:text-4xl font-bold text-gray-800">
                    The best consultancy <br> Ensures your overseas success
                </h1>
                <p class="text-gray-700 text-lg">
                    We are dedicated to providing the best information and innovative services as a leading Study Abroad
                    Consultancy in Nepal. Our mission is to ensure students' success, excellent career prospects, and a
                    bright future.
                </p>
                <div class="flex  items-center space-x-8 my-4">
                    {{-- <div class=" flex justify-between"> --}}
                    <button class="h-10 border border-red-600 bg-red-600  text-white  px-7  py-1 hover:bg-red-700">
                        Contact Us
                    </button>
                    {{-- </div> --}}
                    {{-- <div class=" flex justify-between"> --}}
                    <button class=" h-10 border border-red-600 text-red-600 font-semibold  px-7 py-1 hover:bg-red-100">
                        Apply Now
                    </button>
                    {{-- </div> --}}



                </div>
            </div>

            <!-- Image Section -->
            <div class="flex  justify-end">
                <img src="{{ asset('assets/cons.png') }}" alt="Overseas Landmarks" class="w-full max-w-md">
            </div>
        </div>
    </div>

    {{-- Services Section --}}

    <div class=" mt-4">
        <div class=" flex flex-col items-center justify-center">
            <i class="fa-solid fa-gears text-blue-600 text-2xl "></i>
            <h1 class=" font-bold">OUR SERVICES</h1>
            <h4 class=" mt-4 ">
                We offer a Full Range of Study Abroad Services
            </h4>

        </div>

        <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-12 gap-8 mt-4">
            <div class=" border border-gray-200 bg-white shadow-xl h-40 flex flex-col  justify-center items-center ">
                <div class="text-4xl mb-4">
                    <i class="fas fa-graduation-cap "></i> <!-- Scholarship Icon -->
                    {{-- <div class=" h-4"></div> --}}



                </div>
                <h3 class="font-semibold text-1xl mb-2">Scholarship</h3>



            </div>
            <div
                class="border border-gray-200 bg-white shadow-xl rounded-lg  h-40 flex flex-col  justify-center items-center ">
                <div class="text-4xl mb-4">
                    <i class="fas fa-graduation-cap "></i> <!-- Scholarship Icon -->
                    {{-- <div class=" h-4"></div> --}}



                </div>
                <h3 class="font-semibold text-1xl mb-2">Scholarship</h3>

            </div>
            <div class=" border border-gray-200 bg-white shadow-xl  h-40 flex flex-col  justify-center items-center">
                <div class="text-4xl mb-4">
                    <i class="fas fa-graduation-cap "></i> <!-- Scholarship Icon -->
                    {{-- <div class=" h-4"></div> --}}



                </div>
                <h3 class="font-semibold text-1xl mb-2">Scholarship</h3>
            </div>
            <div class="border border-gray-200 bg-white shadow-xl  h-40 flex flex-col  justify-center items-center ">
                <div class="text-4xl mb-4">
                    <i class="fas fa-graduation-cap "></i> <!-- Scholarship Icon -->
                    {{-- <div class=" h-4"></div> --}}



                </div>
                <h3 class="font-semibold text-1xl mb-2">Scholarship</h3>
            </div>
        </div>

        <div class="flex justify-center mt-4">
            <button class=" bg-customColor1  text-white px-6 py-1 ">View All</button>
        </div>
        {{-- <div></div> --}}

        {{-- Explore The WORLD sECTION --}}
    </div>

    <div class=" bg-customColor2 ">
        <div>

            <div class=" flex items-center justify-center gap-4">

                <i class="fa-solid fa-plane-departure text-4xl"></i>
                <h1>explore the world in education</h1>
            </div>
            <h1 class=" text-center font-bold text-2xl">Top Education Journey</h1>
        </div>
        <p class=" text-center px-6">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione sint vero natus nemo exercitationem,
            impedit rerum culpa quasi fugit incidunt! lore

        </p>

        <div class="  grid  md:grid-cols-4 sm:grid-cols-2 gap-6 px-10">
            @foreach ($country as $item)
                <a href="">
                    <img src="{{ Storage::url($item->image) }}" alt="" srcset=""
                        class=" rounded-lg  hover: shadow-lg  transition-shadow duration-200">
                </a>
            @endforeach
        </div>

    </div>
    {{-- WHY US SECTION --}}


    <div class=" bg-customColor3 flex justify-center items-center   h-40  mt-3 gap-1 text-xl">

        <h1 class="">WHY TO CHHOSE OUR CONSULTACNY?</h1>




    </div>
    {{-- Grid Services  --}}
    <div class=" grid grid-cols-3  px-8 mt-8 gap-3">
        {{-- <div class=" bg-blue-50"> --}}
        <div class=" text-center">
            <i class="fa-solid fa-arrow-trend-up  "></i>
            <h1 class=" ">
                High Visa Sucess Rate
            </h1>
            <p class=" ">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque sint repudiandae nulla sed, magni

            </p>
        </div>



        {{-- </div> --}}
        {{-- <div class=" bg-blue-50"> --}}
        <div class=" text-center ">
            <i class="fa-solid fa-arrow-trend-up"></i>
            <h1 class=" r">
                High Visa Sucess Rate
            </h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque sint repudiandae nulla sed, magni

            </p>
        </div>

        {{-- </div> --}}

        {{-- <div class=" bg-blue-50"> --}}
        <div class=" text-center ">
            <i class="fa-solid fa-arrow-trend-up text-blue-500"></i>
            <h1>
                High Visa Sucess Rate
            </h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque sint repudiandae nulla sed, magni
                magnam

            </p>
        </div>



        {{-- </div> --}}
    </div>
    {{-- Grid Services End --}}

    <div class="  bg-customColor4  px-28 py-10 h-auto mt-10">
        <div class=" flex md:flex-row flex-col justify-between items-center ">
            <div>
                <h1 class=" text-white text-2xl">
                    Successful Journey
                </h1>
                <h1 class=" text-xl font-bold text-white">
                    We offer a full range of study aborad services
                </h1>
                <p class=" text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, perferendis eaque. Voluptate
                    illum impedit quam sint quasi, voluptatibus maxime at?
                </p>
            </div>
            <div class="">

                <img src="{{ asset('assets/girls.png') }}" alt="" class="">
            </div>
        </div>
        <div class=" grid grid-cols-1 md:grid-cols-3 gap-8 mt-6 ">

            <div class=" bg-white text-center  py-10 rounded-md  shadow-sm shadow-white">
                <h1>
                    17+
                </h1>
                <h1>Years </h1>

            </div>
            <div class=" bg-white text-center py-10 rounded-md shadow-sm shadow-white">
                <h1>
                    17+
                </h1>
                <h1>Years </h1>

            </div>
            <div class="bg-white text-center py-10  rounded-md shadow-sm shadow-white">
                <h1>
                    17+
                </h1>
                <h1>Years </h1>

            </div>
        </div>

    </div>
    <section
        style="background-image: url({{ asset('assets/image.png') }}); background-size: cover; background-position: center">
        ,

        {{-- <div class="absolute inset-0 bg-blue-900 bg-opacity-50"></div> <!-- Dark overlay --> --}}

        <div class="relative z-10 text-center mb-10">
            <h2 class="text-2xl font-semibold text-white">We extend our services all over the world!</h2>
        </div>

        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-4 relative z-10 mt-20">
            <div class="bg-white shadow-lg p-5 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-800">Australia Centre</h3>
                <p class="text-gray-600">+61-7-78546952</p>
                <p class="text-gray-500">Suite 2GA | Level 2, 199 George Street, Brisbane</p>
            </div>
            <div class="bg-white shadow-lg p-5 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-800">Delhi Centre</h3>
                <p class="text-gray-600">+91-9827899673</p>
                <p class="text-gray-500">561, Third Floor, Vardhman Star City Mall</p>
            </div>
            <div class="bg-white shadow-lg p-5 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-800">Kathmandu Centre</h3>
                <p class="text-gray-600">+977-1-5956714</p>
                <p class="text-gray-500">1st floor, Samsung Plaza, Bijulibazar</p>
            </div>
            <div class="bg-white shadow-lg p-5 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-800">Butwal Centre</h3>
                <p class="text-gray-600">071598745</p>
                <p class="text-gray-500">Milanchowk, Opposite Siddhartha Bank</p>
            </div>
        </div>
    </section>

    <footer class=" bg-customColor5 text-white py-10">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">Documentation</a></li>
                    <li><a href="#" class="hover:underline">Visa Applications</a></li>
                    <li><a href="#" class="hover:underline">Pre-Departure & Post-Arrival Briefing</a></li>
                    <li><a href="#" class="hover:underline">For Students</a></li>
                    <li><a href="#" class="hover:underline">Visa Interview</a></li>
                    <li><a href="#" class="hover:underline">Application Procedure Simplified</a></li>
                    <li><a href="#" class="hover:underline">Testimonials</a></li>
                    <li><a href="#" class="hover:underline">Student Videos</a></li>
                </ul>
            </div>

            <!-- Helpful Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Helpful Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">Our Associations</a></li>
                    <li><a href="#" class="hover:underline">Code of Conduct</a></li>
                    <li><a href="#" class="hover:underline">Enquiry Page</a></li>
                    <li><a href="#" class="hover:underline">Blog</a></li>
                    <li><a href="#" class="hover:underline">Events</a></li>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Follow Us On</h4>
                <div class="flex space-x-4 mb-4">
                    <!-- Social media icons, replace "#" with actual links -->
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="hover:text-gray-300"><i class="fab fa-whatsapp"></i></a>
                </div>
                <p>Stay connected with us</p>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center mt-10 text-sm text-gray-400">
            <p>© Copyright 2024. All Rights Reserved. Designed by Yube</p>
            <a href="#" class="hover:underline">Privacy & Policy</a>
        </div>
    </footer>



</body>

</html>
