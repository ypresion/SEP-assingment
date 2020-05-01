
<?php
ini_set("session.save_path", "/home/unn_w18011022/sessionData");
session_start();
require_once("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="build/tailwind.css">
    <title>homepage
    </title>
    <style>
        .worksans {
            font-family: 'Work Sans', sans-serif;
        }
                
        #menu-toggle:checked + #menu {
            display: block;
        }
        
        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }
        
        .hover\:grow:hover {
            transform: scale(1.02);
        }
        
        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }
        
        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }
        
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }
        
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>
    <script src='scripts/vue.js'></script>
</head>
<body>

    
    <!-- Hero Section -->
    <div class="carousel relative container mx-auto" style="max-width:1600px;">
      <div class="carousel-inner relative overflow-hidden w-full">
          <!--Slide 1-->
          <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
          <div class="carousel-item absolute opacity-0" style="height:50vh;">
              <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('images/hero-main.jpg');">

                  <div class="container mx-auto">
                      <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                          <p class="text-white text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</p>
                          <a class=" text-white text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-yellow-400 hover:border-yellow-400" href="#">view product</a>
                      </div>
                  </div>

              </div>
          </div>
          <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
          <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

          <!--Slide 2-->
          <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
            <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('images/hero-second.jpg');">
                  <div class="container mx-auto">
                      <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                          <p class="text-white text-2xl my-4">Real Bamboo Wall Clock</p>
                          <a class=" text-white text-xl inline-block no-underline border-b border-gray-400 leading-relaxed hover:text-yellow-400 hover:border-yellow-400" href="#">view product</a>
                      </div>
                  </div>

              </div>
          </div>
          <div>
          </div>
        </div>
      </nav>
    <!-- Nav End -->


    <!-- Hero Section -->
    <div class="carousel relative container mx-auto" style="max-width:2560px;">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('assets/images/hero-main.jpg');">
                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-white text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</p>
                            <a class=" text-white text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-yellow-400 hover:border-yellow-400" href="#">view product</a>
                        </div>
                    </div>
  
                </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
  
            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
              <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('assets/images/hero-second.jpg');">
                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-white text-2xl my-4">Real Bamboo Wall Clock</p>
                            <a class=" text-white text-xl inline-block no-underline border-b border-gray-400 leading-relaxed hover:text-yellow-400 hover:border-yellow-400" href="#">view product</a>
                        </div>
                    </div>
  
                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
  
            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
              <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('assets/images/hero-fourth.jpg');">
                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-white text-2xl my-4">Brown and blue hardbound book</p>
                            <a class="text-white text-xl inline-block no-underline border-b border-gray-400 leading-relaxed hover:text-yellow-400 hover:border-yellow-400" href="#">view product</a>
                        </div>
                    </div>
  
                </div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
  
            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>
  
        </div>
    </div>
    <!-- End of Hero -->

    <!-- Hot Selling Products -->
    <div class="flex flex-wrap justify-around">
        <div class="flex flex-col my-2 p-2 h-auto max-w-sm md:w-1/2 md:max-w-md lg:w-1/3 lg:max-w-lg  xl:max-w-xl bg-gray-100 ">
            <div class="flex flex-col md:items-center max-w-full hover:border-gray-600 border-2 p-6 hover:bg-gray-700 ">
                <div class="h-auto overflow-hidden ">
                    <a href="#"><img src="assets/images/mx-master-3.png" alt=""></a>
                </div>
            </div>
                    <div class="flex pl-5 ">
                        <div class="flex flex-col  ">
                            <a href="#">
                                <span class="font-bold text-xl" >
                                    Logitech Mouse
                                </span>
                            </a>
                            <span>
                                Gaming Mouse
                            </span>
                            <span>
                                £44.99
                            </span>
                        </div>
                    </div>
        </div>
        <div class="flex flex-col my-2 p-2 h-auto max-w-sm md:w-1/2 md:max-w-md lg:w-1/3 lg:max-w-lg  xl:max-w-xl bg-gray-100 ">
            <div class="flex flex-col md:items-center max-w-full hover:border-gray-600 border-2 p-6 hover:bg-gray-700 ">
                <div class="h-auto overflow-hidden ">
                    <a href="#"><img src="assets/images/mx-master-3.png" alt=""></a>
                </div>
            </div>
                    <div class="flex pl-5 ">
                        <div class="flex flex-col  ">
                            <a href="#">
                                <span class="font-bold text-xl" >
                                    Logitech Mouse
                                </span>
                            </a>
                            <span>
                                Gaming Mouse
                            </span>
                            <span>
                                £44.99
                            </span>
                        </div>
                    </div>
        </div>
        <div class="flex flex-col my-2 p-2 h-auto max-w-sm md:w-1/2 md:max-w-md lg:w-1/3 lg:max-w-lg  xl:max-w-xl bg-gray-100 ">
            <div class="flex flex-col md:items-center max-w-full hover:border-gray-600 border-2 p-6 hover:bg-gray-700 ">
                <div class="h-auto overflow-hidden ">
                    <a href="#"><img src="assets/images/mx-master-3.png" alt=""></a>
                </div>
            </div>
                    <div class="flex pl-5 ">
                        <div class="flex flex-col  ">
                            <a href="#">
                                <span class="font-bold text-xl" >
                                    Logitech Mouse
                                </span>
                            </a>
                            <span>
                                Gaming Mouse
                            </span>
                            <span>
                                £44.99
                            </span>
                        </div>
                    </div>
        </div>

    </div>  
    
        <!-- Newsletter Subscription -->
    <div class="flex flex-col md:flex-row flex-wrap md:items-center md:justify-center ">
        <div class="flex flex-col items-center max-w-full md:flex-row h-auto md:flex-auto md:flex-row ">
            <span class="md:mx-2 ">Subscribe to our Newsletter</span>
            <div class="flex">
                <input class="mr-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="sub_email" type="email" placeholder="Email Address">
                <button class="bg-transparent hover:bg-blue-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded">
                    Subscribe
                  </button>
            </div>
        </div>
        <!-- Social Icons -->
        <div class="flex flex-col items-center max-w-full h-auto md:flex-row md:flex-1 ">
            <div class="md:flex md:items-center md:ml-auto text-gray-700 text-center mx-1">
                <span class="mr-2">Socials</span>   
                <div class="flex">
                  <svg class="fill-current h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M17 11v3l-3-3H8a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-1zm-3 2v2a2 2 0 0 1-2 2H6l-3 3v-3H2a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h2v3a4 4 0 0 0 4 4h6z"/></svg>
                  <svg class="fill-current h-10 w-10 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M17 11v3l-3-3H8a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-1zm-3 2v2a2 2 0 0 1-2 2H6l-3 3v-3H2a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h2v3a4 4 0 0 0 4 4h6z"/></svg>
                </div>
              </div>
        </div>
    </div>
    <!-- End of Newsletter -->

    <!-- App Showcase Section -->
        <div class="flex flex-col text-center items-center md:flex-row">
            <span>Download Our Best Selling App</span>    
            <div class=" flex-1 text-gray-700 text-center shadow-lg rounded-md md:shadow-none md:rounded-none p-2">
                  Google Play Store
                  <img src="assets/logos/Icon awesome-google-play.png" alt="awesome-google-play">
            </div>
            <div class="flex-1 text-gray-700 text-center shadow-lg rounded-md md:shadow-none md:rounded-none p-2">
              App Store
              <img src="assets/logos/Icon awesome-app-store-ios.png" alt="awesome-app-store-ios">
            </div>
          </div>

          <!-- Footer -->

        <div class="flex flex-col flex-wrap">
            <div class="flex justify-around bg-gray-200">
                <div><a href="index.php">Home</a></div>
                <div><a href="#">About</a></div>
                <div><a href="product.php">Products</a></div>
                <div><a href="#">Contact</a></div>
            </div>
        </div>
</body>
