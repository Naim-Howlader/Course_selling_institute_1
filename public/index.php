<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/main-style.css">
    <link rel="stylesheet" href="../public/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../public/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../public/assets/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../barfiller-master/css/style.css">
    <link rel="stylesheet" href="../public/assets/aos.css">
    <title>Document</title>
</head>

<body class="bg-gradient-to-r from-indigo-500 to-cyan-300 roboto">
    <nav class="bg-black md:bg-transparent fixed top-0 w-full bgcolor pt-5">
        <div class="max-w-6xl mx-auto px-10">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div class="logo">
                        <!-- Website Logo class="overflow-x-hidden"-->
                        <div class="flex items-center py-4 px-2">
                        <h2 class="text-white text-sm md:text-base rooster logo">Computer Castle <i
                                class="fa-sharp fa-solid fa-power-off"></i></h2>
                        </div>
                    </div>
                    <!-- Primary Navbar items -->
                </div>
                <div class="hidden md:flex items-center space-x-1 text-lg">
                    <a href="#home" class="py-4 px-2 text-white  ">Home</a>
                    <a href="#about" class="py-4 px-2 text-white   ">About</a>
                    <a href="#project" class="py-4 px-2 text-white  ">Project</a>
                    <a href="#course" class="py-4 px-2 text-white  ">Course</a>
                    <a href="#contact" class="py-4 px-2 text-white  ">Contact Us</a>
                </div>

                <!-- Secondary Navbar items -->

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-white  " x-show="!showMenu" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu flex bg-black">
            <ul class="mx-auto text-center">
                <li class="active"><a href="#home" class="block text-sm px-2 py-4 text-white ">Home</a></li>
                <li><a href="#about" class="block text-white text-sm px-2 py-4  transition duration-300">About</a></li>
                <li><a href="#project" class="block text-white text-sm px-2 py-4  transition duration-300">Project</a>
                </li>
                <li><a href="#course" class="block text-white text-sm px-2 py-4  transition duration-300">Course</a>
                </li>
                <li><a href="#contact" class="block text-white text-sm px-2 py-4  transition duration-300">Contact
                        Us</a></li>
            </ul>
        </div>
    </nav>


    <div class="hero-section bg-white py-20   mx-auto px-5 sm:px-16 md:px-28 sm:bg-transparent pt-20 sm:pt-36"
        id="home">
        <div
            class="item-section bg-white px-10 sm:px-20 md:px-24 sm:rounded-lg pb-10 pt-10 lg:flex lg:grid grid-cols-5 lg:gap-x-16 lg:px-10">
            <div class="image-section lg:col-span-3">
                <img src="assets/image/DSC_0567.jpg" alt="" class="rounded-lg  mx-auto">
            </div>
            <div class="text-section col-span-2">
                <h2 class="uppercase tracking-wide  pt-5 pb-2 font-thin md:text-lg ">Hello everbody, I am</h2>
                <h2 class="text-5xl font-semibold xl:text-6xl">Naim Howlader</h2>
                <h2 class="text-lg uppercase py-5 xl:text-xl font-medium" id="type"></h2>
                <p class="text-gray-500 font-normal  pb-10">You will begin to realise why this exercise is called the
                    Dickens Pattern (with reference to the ghost showing Scrooge some different futures)</p>
                <div class="icon-group space-y-3">
                    <div class="icon-grp flex items-center gap-5 text-xl ">
                        <i class="fa-solid fa-phone text-indigo-400"></i>
                        <p class="font-normal text-gray-500">016824964</p>
                    </div>

                    <div class="icon-grp flex items-center gap-5 text-xl ">
                        <i class="fa-regular fa-envelope text-indigo-400"></i>
                        <p class="font-normal text-gray-500">naim1234@gmail.com</p>
                    </div>

                    <div class="icon-grp flex items-center gap-5 text-xl ">
                        <i class="fa-solid fa-house text-indigo-400"></i>
                        <p class="font-normal text-gray-500">Foyslake, Chittagong</p>
                    </div>
                </div>
                <div class="social-link flex space-x-5 py-16">
                    <div
                        class="bg-gray-300 w-10 h-10 items-center justify-center flex rounded-md hover:bg-gradient-to-r from-indigo-500 to-cyan-300 transition duration-1000  focus:bg-gradient-to-r from-indigo-500 to-cyan-300">
                        <i class="fa-brands fa-facebook-f text-white"></i>
                    </div>

                    <div
                        class="bg-gray-300 w-10 h-10 items-center justify-center flex rounded-md hover:bg-gradient-to-r from-indigo-500 to-cyan-300 transition duration-500 ease-out focus:bg-gradient-to-r from-indigo-500 to-cyan-300">
                        <i class="fa-brands fa-twitter text-white"></i>
                    </div>

                    <div
                        class="bg-gray-300 w-10 h-10 items-center justify-center flex rounded-md hover:bg-gradient-to-r from-indigo-500 to-cyan-300 transition duration-150 ease-out focus:bg-gradient-to-r from-indigo-500 to-cyan-300">
                        <i class="fa-brands fa-instagram text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="about"
        class="about-section bg-gray-100 py-10 px-6 sm:px-16 md:px-24 mx-auto lg:grid grid-cols-4 lg:space-x-10">
        <div class="about-section-top lg:col-span-2">
            <h2 class="text-3xl font-bold pb-5 uppercase" data-aos="fade-up">About Myself</h2>
            <p class="pb-5 text-gray-500">inappropriate behavior is often laughed off as “boys will be boys,” women face
                higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our
                behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
            <div class="all-single-item  pt-5 pb-16 lg:flex justify-around space-y-5 lg:space-y-0 lg:space-x-3">
                <div class="single-item border-2 border-gray-300 py-3 px-5 rounded-lg">
                    <i class="fa-solid fa-database text-cyan-400 text-2xl"></i>
                    <h2 class="text-2xl font-semibold" data-aos="fade-left">$2.5 M</h2>
                    <p class="text-gray-700">Total Donation</p>
                </div>

                <div class="single-item border-2 border-gray-300 py-3 px-5 rounded-lg">
                    <i class="fa-solid fa-sheet-plastic text-cyan-400 text-2xl"></i>
                    <h2 class="text-2xl font-semibold" data-aos="fade-left">1465</h2>
                    <p class="text-gray-700">Total Project</p>
                </div>

                <div class="single-item border-2 border-gray-300 py-3 px-5 rounded-lg">
                    <i class="fa-solid fa-people-line text-cyan-400 text-2xl"></i>
                    <h2 class="text-2xl font-semibold" data-aos="fade-left">3965</h2>
                    <p class="text-gray-700">Total Volunteers</p>
                </div>
            </div>

        </div>
        <div class="about-section-bottom overflow-hidden lg:col-span-2 lg:pt-10">
            <h2 class="text-sm" data-aos="fade-right">Html</h2>
            <div id="bar1" class="barfiller rounded-md">
                <span class="tip"></span>
                <span class="fill" data-percentage="80"></span>
            </div>

            <h2 class="text-sm sm:text-base" data-aos="fade-right">Css</h2>
            <div id="bar2" class="barfiller rounded-md">
                <span class="tip"></span>
                <span class="fill" data-percentage="70"></span>
            </div>

            <h2 class="text-sm sm:text-base" data-aos="fade-right">Javascript</h2>
            <div id="bar3" class="barfiller rounded-md">
                <span class="tip"></span>
                <span class="fill" data-percentage="50"></span>
            </div>

            <h2 class="text-sm sm:text-base" data-aos="fade-right">Tailwind</h2>
            <div id="bar4" class="barfiller rounded-md">
                <span class="tip"></span>
                <span class="fill" data-percentage="80"></span>
            </div>

            <h2 class="text-sm sm:text-base" data-aos="fade-right">PHP</h2>
            <div id="bar5" class="barfiller rounded-md">
                <span class="tip"></span>
                <span class="fill" data-percentage="70"></span>
            </div>
        </div>
    </div>
    <div>
        <div
            class="skill-education-section text-white text-center lg:grid grid-cols-12 lg:space-x-10 lg:px-20 lg:pb-20 lg:pt-20">
            <div class="skill-full-section lg:col-span-6">
                <h2 class="text-center text-3xl font-bold py-5 md:text-4xl" data-aos="fade-down">My skills</h2>
                <div class="line bg-white w-8/12 mx-auto h-px px-5 mb-5"></div>
                <div class="skill-section space-y-8 lg:space-y-12">

                    <div class="graphics py-8 backdrop-grayscale-0 bg-white/30 lg:rounded-2xl lg:shadow-lg  hover:bg-gray-900 transition duration-700"
                        data-aos="fade-right">
                        <h2 class="text-xl md:text-3xl font-bold pb-5 px-5">Graphic Design</h2>
                        <p class="text-white font-semibold text-md md:text-lg pb-5 px-5">Hi I am a graphics designer. I
                            can work with</p>
                        <ul class="text-lg md:text-xl text-white font-semibold px-5">
                            <li data-aos="fade-up">Photoshop</li>
                            <li data-aos="fade-up">Illustrator</li>
                        </ul>
                    </div>
                    <div class="web-design py-8 backdrop-grayscale-0 bg-white/30 lg:rounded-2xl lg:shadow-lg hover:bg-gray-900 transition duration-700"
                        data-aos="fade-right">
                        <h2 class="text-xl md:text-3xl font-bold pb-5 px-5">Web Design</h2>
                        <p class="text-white font-semibold text-md pb-5 px-5 md:text-lg">Hi I am a web designer. I can
                            work with</p>
                        <ul class="text-lg md:text-xl text-white font-semibold px-5">
                            <li data-aos="fade-up">Html</li>
                            <li data-aos="fade-up">Css</li>
                            <li data-aos="fade-up">Javascript</li>
                            <li data-aos="fade-up">Bootstrap</li>
                            <li data-aos="fade-up">Tailwind</li>
                        </ul>
                    </div>
                    <div class="web-development py-8 backdrop-grayscale-0 bg-white/30 lg:rounded-2xl lg:shadow-lg  hover:bg-gray-900 transition duration-700"
                        data-aos="fade-right">
                        <h2 class="text-xl md:text-3xl font-bold pb-5 px-5">Web Development</h2>
                        <p class="text-white font-semibold text-md pb-5 px-5 md:text-lg">Hi I am a web developer. I can
                            work with</p>
                        <ul class="text-lg md:text-xl text-white font-semibold px-5">
                            <li data-aos="fade-up">Php</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="education-full-section py-16 lg:py-0 lg:col-span-6">
                <h2 class="text-center text-3xl font-bold py-5 md:text-4xl" data-aos="fade-up">My Education</h2>
                <div class="line bg-white w-8/12 mx-auto h-px px-5 mb-5"></div>
                <div class="education-section space-y-8 lg:space-y-12">
                    <div class="ssc py-8 backdrop-grayscale-0 bg-white/30 lg:rounded-2xl lg:shadow-lg hover:bg-gray-900 transition duration-700"
                        data-aos="fade-left">
                        <h2 class="text-xl md:text-3xl font-bold pb-5 px-10">SSC</h2>
                        <p class="text-white font-semibold text-md pb-5 px-10 md:text-lg md:px-20">I have passed SSC in
                            2019 form Chattogram Board. I have passed from Wieless Jawtola Colony High School getting
                            GPA 4.94</p>
                    </div>
                    <div class="diploma py-8 backdrop-grayscale-0 bg-white/30 lg:rounded-2xl lg:shadow-lg hover:bg-gray-900 transition duration-700"
                        data-aos="fade-left">
                        <h2 class="text-xl md:text-3xl font-bold pb-5 px-10 ">Diploma in Computer Engineering</h2>
                        <p class="text-white font-semibold text-md pb-10 px-5">Now I am studying at Chattogram
                            Polytechnic Institute in CSE Department</p>
                    </div>
                </div>
            </div>
            <div class="padding pb-8"></div>
        </div>
    </div>


    <!--Clients section start here-->

    <div class="clients-section bg-[#F9F9FF]">
        <div class="clients-section-title px-5 pt-16 pb-10 sm:px-20 md:pt-24">
            <h2 class="font-bold text-xl text-center uppercase pb-5 md:text-2xl lg:text-3xl" data-aos="fade-up">offering
                to my clients</h2>
            <p class="text-center text-gray-600 md:text-base lg:text-lg">If you are looking at blank cassettes on the
                web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        </div>
        <div
            class="clients-section-card px-5 sm:px-20 py-10 space-y-8 md:grid grid-cols-12 md:space-y-0 md:gap-x-10 md:gap-y-10">
            <div class="card-1 bg-white p-5 group md:col-span-6 lg:col-span-4 hover:shadow-xl transition duration-400"
                data-aos="flip-left">
                <i
                    class="fa-regular fa-building text-5xl pb-5 pt-5 text-gray-300 group-hover:text-cyan-500 duration-400 transition ease-in md:text-6xl"></i>
                <h2 class="text-lg md:text-xl font-bold pb-5">ARCHITECTURE</h2>
                <p class="text-gray-600 pb-10">If you are looking at blank cassettes on the web, you may be very
                    confused at the difference in price. You may see some for as low as $17 each.</p>
            </div>

            <div class="card-1 bg-white p-5 group md:col-span-6 lg:col-span-4 hover:shadow-xl transition duration-400"
                data-aos="flip-down">
                <i
                    class="fa-solid fa-building-wheat text-5xl pb-5 pt-5 text-gray-300 group-hover:text-cyan-500 duration-400 transition ease-in md:text-6xl"></i>
                <h2 class="text-lg md:text-xl font-bold pb-5">INTERIOR DESIGN</h2>
                <p class="text-gray-600 pb-10">If you are looking at blank cassettes on the web, you may be very
                    confused at the difference in price. You may see some for as low as $17 each.</p>
            </div>

            <div class="card-1 bg-white p-5 group md:col-span-6 lg:col-span-4 hover:shadow-xl transition duration-400"
                data-aos="flip-right">
                <i
                    class="fa-solid fa-swatchbook text-5xl pb-5 pt-5 text-gray-300 group-hover:text-cyan-500 duration-400 transition ease-in md:text-6xl"></i>
                <h2 class="text-lg md:text-xl font-bold pb-5">CONCEPT DESIGN</h2>
                <p class="text-gray-600 pb-10">If you are looking at blank cassettes on the web, you may be very
                    confused at the difference in price. You may see some for as low as $17 each.</p>
            </div>
        </div>
    </div>

    <!--Clients section end here-->


    <!--Isotope section start here-->
    <div class="isotope-section bg-white pb-10" id="project">
        <div class="isotope-section-title px-10 sm:px-24">
            <h2 class="text-center text-xl sm:text-2xl md:text-3xl font-bold pt-16" data-aos="fade-down">OUR LATEST
                FEATURED PROJECTS</h2>
            <p class="text-center text-gray-600 pt-3 md:text-lg">Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="isotope-section-main">
            <div class="isotope-main-link px-5 pt-16 pb-8">
                <ul class="flex justify-center space-x-5 item-menu hover:cursor-pointer">
                    <li data-filter="" class="hover:text-cyan-500 transition duration-400" data-aos="flip-left">All</li>
                    <li data-filter=".design" class="hover:text-cyan-500 transition duration-400" data-aos="flip-left">
                        Design</li>
                    <li data-filter=".development" class="hover:text-cyan-500 transition duration-400"
                        data-aos="flip-left">Development</li>
                    <li data-filter=".graphics" class="hover:text-cyan-500 transition duration-400"
                        data-aos="flip-left">Graphics</li>
                </ul>
            </div>
            <div class="isotope-main-image item-details grid grid-cols-12">
                <div class="w-full sm:w-6/12 md:w-4/12 px-10 py-5 design">
                    <a href="../public/assets/image/design-1.jpg" class="view"><img
                            src="../public/assets/image/design-1.jpg" alt="" srcset="" class="rounded-lg"></a>
                    <div class="pt-5">
                        <h2 class="text-center font-bold text-lg">Image Title</h2>
                        <p class="text-center">Image description</p>
                    </div>
                </div>
                <div class="w-full sm:w-6/12 md:w-4/12 px-10 rounded-lg py-5 development">
                    <a href="../public/assets/image/design-2.jpg" class="view"><img
                            src="../public/assets/image/design-2.jpg" alt="" srcset="" class="rounded-lg"></a>
                    <div class="pt-5">
                        <h2 class="text-center font-bold text-lg">Image Title</h2>
                        <p class="text-center">Image description</p>
                    </div>
                </div>
                <div class="w-full sm:w-6/12 md:w-4/12 px-10 rounded-lg py-5 design">
                    <a href="../public/assets/image/design-3.jpg" class="view"><img
                            src="../public/assets/image/design-3.jpg" alt="" srcset="" class="rounded-lg"></a>
                    <div class="pt-5">
                        <h2 class="text-center font-bold text-lg">Image Title</h2>
                        <p class="text-center">Image description</p>
                    </div>
                </div>
                <div class="w-full sm:w-6/12 md:w-4/12 px-10 rounded-lg py-5 development">
                    <a href="../public/assets/image/development-1.jpg" class="view"><img
                            src="../public/assets/image/development-1.jpg" alt="" srcset="" class="rounded-lg"></a>
                    <div class="pt-5">
                        <h2 class="text-center font-bold text-lg">Image Title</h2>
                        <p class="text-center">Image description</p>
                    </div>
                </div>
                <div class="w-full sm:w-6/12 md:w-4/12 px-10 rounded-lg py-5 development">
                    <a href="../public/assets/image/development-2.jpg" class="view"><img
                            src="../public/assets/image/development-2.jpg" alt="" srcset="" class="rounded-lg"></a>
                    <div class="pt-5">
                        <h2 class="text-center font-bold text-lg">Image Title</h2>
                        <p class="text-center">Image description</p>
                    </div>
                </div>
                <div class="w-full sm:w-6/12 md:w-4/12 px-10 rounded-lg py-5 development">
                    <a href="../public/assets/image/development-3.jpg" class="view"><img
                            src="../public/assets/image/development-3.jpg" alt="" srcset="" class="rounded-lg"></a>
                    <div class="pt-5">
                        <h2 class="text-center font-bold text-lg">Image Title</h2>
                        <p class="text-center">Image description</p>
                    </div>
                </div>
                <div class="w-full sm:w-6/12 md:w-4/12 px-10 rounded-lg py-5 graphics">
                    <a href="../public/assets/image/grapics-1.jpg" class="view"><img
                            src="../public/assets/image/grapics-1.jpg" alt="" srcset="" class="rounded-lg"></a>
                    <div class="pt-5">
                        <h2 class="text-center font-bold text-lg">Image Title</h2>
                        <p class="text-center">Image description</p>
                    </div>
                </div>
                <div class="w-full sm:w-6/12 md:w-4/12 px-10 rounded-lg py-5 graphics">
                    <a href="../public/assets/image/grapics-2.jpeg" class="view"><img
                            src="../public/assets/image/grapics-2.jpeg" alt="" srcset="" class="rounded-lg"></a>
                    <div class="pt-5">
                        <h2 class="text-center font-bold text-lg">Image Title</h2>
                        <p class="text-center">Image description</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-100 h-20"></div>
    </div>
    <!--Isotope section end here-->

    <!--Course section start here-->
    <div class="course-section" id="course">
        <div class="course-section-title bg-white px-5  text-center">
            <h2 class="text-center text-xl sm:text-2xl md:text-3xl font-bold pt-5 pb-5" data-aos="fade-up">Explore our
                Popular Courses</h2>
            <p class="pb-10 text-gray-500 sm:px-10 md:px-26 lg:px-36">We offer live online training to learners all
                across Bangladesh, and classroom training in Chattogram. You can also opt for our self-paced recorded
                online courses.</p>
        </div>
        <div class="course-section-main">
            <div class="course-link bg-white">
                <div class="sticky sticky-section pt-2 pb-2">
                    <ul
                        class="flex justify-center space-x-3 sm:flex sm:justify-start sm:pl-20 sm:space-x-5 bg-white pt-3 pb-4">
                        <li><a href="#online" class="sticky top-0 font-semibold pt-2">Online</a>
                        </li>
                        <li><a href="#offline" class="sticky  font-semibold">Offline</a></li>
                        <li><a href="#self" class="sticky  font-semibold">Self Paced</a></li>
                    </ul>
                    <div class="px-5 sm:px-10">
                        <div
                            class="bg-gradient-to-r from-indigo-500 to-cyan-300 h-1 w-full sm:w-6/12 lg:w-5/12 items-center">
                        </div>
                    </div>
                </div>
                <div class="course-main-section-online bg-gray-100 px-5 sm:px-20 md:px-10 pb-20" id="online">
                    <h2 class="text-lg pt-5 md:pt-10 pb-10">Instructor-led Online Training Courses (Live Classes)</h2>

                    <div class="course-main-section-online-gap space-y-5 sm:space-y-10 md:space-y-0 md:gap-x-5 md:gap-y-10 lg:gap-y-10 lg:gap-x-10 md:grid grid-cols-12"
                        id="onlinesection">
                    </div>
                </div>



                <div class="course-main-section-offline bg-white px-5 sm:px-20 md:px-10 pt-5 pb-20" id="offline">
                    <h2 class="text-lg pt-5 md:pt-10 pb-10">Classroom Training Courses in Chattogram</h2>

                    <div class="course-main-section-online-gap space-y-5 sm:space-y-10 md:space-y-0 md:gap-x-5 md:gap-y-10 lg:gap-y-10 lg:gap-x-10 md:grid grid-cols-12"
                        id="offlinesection">
                    </div>
                </div>
                <div class="course-main-section-self bg-gray-100 px-5 sm:px-20 md:px-10 pt-5 pb-20" id="self">
                    <h2 class="text-lg pt-5 md:pt-10 pb-10">Self-Paced Recorded Courses With Lifetime Access</h2>

                    <div class="course-main-section-online-gap space-y-5 sm:space-y-10 md:space-y-0 md:gap-x-5 md:gap-y-10 lg:gap-y-10 lg:gap-x-10 md:grid grid-cols-12"
                        id="selfsection">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Course section end here-->






    <!--Testimonials section start here-->

    <div class="testimonial-section bg-[#F9F9FF]" id="testimonial">
        <div class="testimonial-title px-5 sm:px-16">
            <h2 class="text-center font-bold uppercase text-xl sm:text-2xl lg:text-3xl pt-10 pb-5" data-aos="fade-down">
                testimonials</h2>
            <p class="text-gray-500 pb-20 text-center">If you are looking at blank cassettes on the web, you may be very
                confused at the difference in price. You may see some for as low as $.17 each.</p>
        </div>
        <div class="testimonial-owl-carousel pb-10">
            <div class="owl-carousel owl-theme sm:px-10">
                <div class="item px-5 pb-10" data-aos="fade-up">
                    <div class="single-item bg-white p-5 rounded-lg shadow-xl">
                        <p class="text-gray-500 pt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores
                            cupiditate quis necessitatibus quibusdam debitis voluptas praesentium ducimus eligendi
                            accusantium cumque.</p>
                        <h2 class="uppercase py-3 font-semibold text-lg">fanny spencer</h2>
                        <div class="star-icon pb-7">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star-half-stroke text-yellow-400"></i>
                        </div>
                    </div>
                </div>
                <div class="item px-5 pb-10" data-aos="fade-up">
                    <div class="single-item bg-white p-5 rounded-lg shadow-xl">
                        <p class="text-gray-500 pt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores
                            cupiditate quis necessitatibus quibusdam debitis voluptas praesentium ducimus eligendi
                            accusantium cumque.</p>
                        <h2 class="uppercase py-3 font-semibold text-lg">fanny spencer</h2>
                        <div class="star-icon pb-7">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star-half-stroke text-yellow-400"></i>
                        </div>
                    </div>
                </div>
                <div class="item px-5 pb-10" data-aos="fade-up">
                    <div class="single-item bg-white p-5 rounded-lg shadow-xl">
                        <p class="text-gray-500 pt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores
                            cupiditate quis necessitatibus quibusdam debitis voluptas praesentium ducimus eligendi
                            accusantium cumque.</p>
                        <h2 class="uppercase py-3 font-semibold text-lg">fanny spencer</h2>
                        <div class="star-icon pb-7">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star-half-stroke text-yellow-400"></i>
                        </div>
                    </div>
                </div>
                <div class="item px-5 pb-10" data-aos="fade-up">
                    <div class="single-item bg-white p-5 rounded-lg shadow-xl">
                        <p class="text-gray-500 pt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores
                            cupiditate quis necessitatibus quibusdam debitis voluptas praesentium ducimus eligendi
                            accusantium cumque.</p>
                        <h2 class="uppercase py-3 font-semibold text-lg">fanny spencer</h2>
                        <div class="star-icon pb-7">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star-half-stroke text-yellow-400"></i>
                        </div>
                    </div>
                </div>
                <div class="item px-5 pb-10" data-aos="fade-up">
                    <div class="single-item bg-white p-5 rounded-lg shadow-xl">
                        <p class="text-gray-500 pt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores
                            cupiditate quis necessitatibus quibusdam debitis voluptas praesentium ducimus eligendi
                            accusantium cumque.</p>
                        <h2 class="uppercase py-3 font-semibold text-lg">fanny spencer</h2>
                        <div class="star-icon pb-7">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star-half-stroke text-yellow-400"></i>
                        </div>
                    </div>
                </div>
                <div class="item px-5 pb-10" data-aos="fade-up">
                    <div class="single-item bg-white p-5 rounded-lg shadow-xl">
                        <p class="text-gray-500 pt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores
                            cupiditate quis necessitatibus quibusdam debitis voluptas praesentium ducimus eligendi
                            accusantium cumque.</p>
                        <h2 class="uppercase py-3 font-semibold text-lg">fanny spencer</h2>
                        <div class="star-icon pb-7">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star-half-stroke text-yellow-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Testimonials section end here-->

    <!--Footer section start here-->

    <footer id="contact">
        <div class="footer-section bg-black text-white sm:grid sm:grid-cols-12 sm:px-10 sm:pb-5 lg:pb-28">
            <div class="about-section pt-16 px-5 sm:col-span-6 lg:col-span-5">
                <h2 class="text-lg lg:text-xl font-bold pb-7">About Me</h2>
                <p class="text-sm text-gray-400 pb-5">Do you want to be even more successful? Learn to love learning and
                    growth. The more effort you put into improving your skills,</p>
                <p class="text-sm text-gray-400">Copyright ©2022 All rights reserved | This template is made with by
                    <span class="text-blue-600"><i>&nbsp; &nbsp;Naim Howlader</i></span>
                </p>
            </div>
            <div class="newsletter-section pt-10 sm:pt-16 px-5 sm:col-span-6 lg:col-span-5">
                <h2 class="text-lg lg:text-xl font-bold pb-7">Newsletter</h2>
                <p class="text-sm text-gray-400 pb-5">Stay updated with our latest trends</p>
                <div class="">
                    <div
                        class="email-box w-4/5 h-10 flex bg-black items-center outline outline-1 outline-gray-500 relative">
                        <input type="text" name="" id="" placeholder="Email Address"
                            class="bg-transparent outline-none pl-5 text-white w-full">
                        <div
                            class="bg-gradient-to-r from-indigo-500 to-cyan-300 w-10 h-10 flex items-center absolute right-0 justify-center">
                            <i class="fa-solid fa-arrow-right text-white "></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="follow-section pt-10 lg:pt-16 px-5 sm:col-span-6 lg:col-span-2">
                <h2 class="text-lg lg:text-xl font-bold pb-7">Follow Me</h2>
                <p class="text-sm text-gray-400 pb-5">Let us be social</p>
                <div class="icon space-x-2 pb-16">
                    <i class="fa-brands fa-facebook text-lg lg:text-xl"></i>
                    <i class="fa-brands fa-whatsapp text-lg lg:text-xl"></i>
                    <i class="fa-brands fa-instagram text-lg lg:text-xl"></i>
                </div>
            </div>
        </div>
    </footer>

    <!--Footer section end here-->





    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="../public/js/owl.carousel.min.js"></script>
    <script src="../public/js/jquery.stickem.js"></script>
    <script src="../public/js/jquery.magnific-popup.min.js"></script>
    <script src="../barfiller-master/js/jquery.barfiller.js"></script>
    <script src="../public/js/jquery.waypoints.min.js"></script>
    <script src="../public/js/typer.min.js"></script>
    <script src="../public/js/aos.js"></script>
    <script src="../public/js/jquery.smoothscroll.min.js"></script>
    <script src="js/script.js"></script>
    <script src="../public/dashbord/js/script.js"></script>
    <script>

    </script>
</body>

</html>