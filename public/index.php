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
    <!-- Navigation -->
    <nav class="flex items-center justify-between flex-wrap bg-gray-200 p-6 shadow-xl mb-1 ">
        <?php
       require_once "functions.php";
       if(check_login()) {
        echo "<div>
        <a href=\"logOut.php\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-gray-900 border-gray-800 hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0\">Log Out</a>
        </div>";
        }
        else{
        echo"<div>
        <a href=\"login.php\" class=\"inline-block text-sm px-4 py-2 leading-none border rounded text-gray-900 border-gray-800 hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0\">Login</a>
    </div>";
        }
        ?>
        <div class="flex items-center flex-shrink-0 text-gray-900 mr-6">
          <svg class="fill-current h-auto w-40 mr-2 " id="svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="400" height="69.18873476250525" viewBox="0, 0, 400,69.18873476250525">
            <g id="svgg">
            <path id="path0" d="M0.000 34.594 L 0.000 69.189 34.973 69.189 L 69.945 69.189 69.945 34.594 L 69.945 0.000 34.973 0.000 L 0.000 0.000 0.000 34.594 M111.917 5.130 C 111.144 5.154,109.644 5.291,109.416 5.359 C 109.381 5.369,109.107 5.407,108.806 5.443 C 108.506 5.479,108.127 5.546,107.966 5.591 C 107.804 5.636,107.463 5.702,107.209 5.737 C 104.568 6.106,99.522 8.306,96.616 10.354 C 92.267 13.421,89.293 16.934,86.946 21.774 C 85.933 23.863,85.660 24.544,85.238 26.037 C 85.120 26.455,84.959 27.024,84.881 27.301 C 84.731 27.832,84.650 28.256,84.343 30.139 C 83.895 32.875,83.914 37.081,84.385 39.407 C 84.441 39.685,84.526 40.139,84.574 40.416 C 85.046 43.157,86.529 47.031,88.146 49.748 C 92.308 56.737,99.117 61.652,107.104 63.431 C 107.532 63.526,108.043 63.640,108.241 63.684 C 108.439 63.728,109.044 63.812,109.586 63.870 C 110.128 63.929,110.789 64.010,111.055 64.050 C 111.468 64.113,111.856 64.124,113.703 64.123 L 115.868 64.123 117.675 63.859 C 119.631 63.573,120.643 63.361,121.618 63.034 C 121.924 62.931,122.328 62.808,122.517 62.760 C 124.129 62.352,127.474 60.708,129.596 59.281 C 132.149 57.564,134.834 54.944,136.717 52.335 C 138.009 50.544,139.790 47.106,140.486 45.061 C 141.443 42.247,141.753 40.797,142.125 37.390 C 142.285 35.921,142.341 33.093,142.222 32.472 C 142.187 32.287,142.139 31.842,142.115 31.484 C 142.067 30.768,141.935 29.689,141.889 29.643 C 141.848 29.602,109.232 29.608,108.985 29.649 C 108.660 29.702,108.509 29.366,111.793 35.918 C 112.627 37.583,113.448 39.235,113.618 39.589 C 113.791 39.950,113.966 40.258,114.015 40.289 C 114.162 40.380,118.239 40.478,121.921 40.477 C 128.261 40.477,129.448 40.483,129.494 40.512 C 129.642 40.605,128.860 42.847,128.253 44.073 C 125.387 49.855,120.270 53.410,114.428 53.679 C 113.926 53.702,113.430 53.710,113.326 53.698 C 113.221 53.686,112.739 53.659,112.253 53.638 C 111.648 53.611,111.238 53.571,110.950 53.511 C 110.719 53.463,110.332 53.393,110.090 53.357 C 109.020 53.198,106.318 52.125,105.136 51.391 C 102.257 49.602,100.311 47.561,98.496 44.427 C 97.851 43.313,97.621 42.793,96.860 40.731 C 96.688 40.265,96.218 38.427,96.215 38.211 C 96.214 38.129,96.176 37.854,96.132 37.600 C 95.871 36.117,95.905 32.412,96.189 31.295 C 96.225 31.156,96.295 30.806,96.345 30.517 C 96.559 29.285,97.343 27.001,98.011 25.666 C 99.899 21.892,102.608 19.116,106.242 17.232 C 107.180 16.746,108.813 16.130,109.569 15.977 C 111.411 15.604,112.967 15.439,114.026 15.506 C 115.925 15.626,116.646 15.721,117.446 15.956 C 117.734 16.040,118.235 16.181,118.558 16.269 C 120.705 16.853,122.693 18.033,125.099 20.153 C 126.315 21.225,128.007 23.496,128.757 25.063 C 128.901 25.364,128.782 25.425,131.624 23.598 C 132.914 22.768,134.001 22.070,134.039 22.047 C 134.076 22.024,134.287 21.889,134.508 21.748 C 134.729 21.607,135.676 21.003,136.612 20.406 C 138.345 19.303,138.630 19.107,138.630 19.021 C 138.630 18.889,137.115 16.769,136.409 15.915 C 133.740 12.681,130.747 10.294,126.545 8.046 C 125.289 7.374,121.883 6.118,120.741 5.907 C 120.535 5.868,120.025 5.763,119.609 5.673 C 119.193 5.584,118.673 5.488,118.453 5.462 C 118.234 5.436,117.657 5.358,117.171 5.289 C 115.855 5.102,114.309 5.055,111.917 5.130 M368.979 5.154 C 368.944 5.162,368.294 5.236,367.534 5.318 C 366.455 5.433,366.026 5.498,365.579 5.610 C 365.264 5.689,364.613 5.841,364.133 5.947 C 359.061 7.068,353.475 10.354,349.664 14.460 C 346.077 18.324,343.198 23.938,342.357 28.710 C 342.001 30.728,341.924 31.384,341.863 32.897 C 341.741 35.943,341.951 38.912,342.431 40.911 C 342.532 41.332,342.647 41.835,342.686 42.029 C 342.869 42.939,344.012 46.021,344.665 47.368 C 347.152 52.492,350.375 56.169,355.233 59.423 C 357.263 60.782,360.615 62.314,362.947 62.948 C 365.070 63.525,365.357 63.589,366.690 63.785 C 367.406 63.889,368.085 63.994,368.201 64.017 C 368.975 64.173,373.044 64.179,374.002 64.026 C 374.302 63.978,374.936 63.899,375.410 63.852 C 376.485 63.743,377.044 63.646,377.953 63.410 C 378.346 63.308,378.965 63.147,379.329 63.053 C 380.178 62.833,381.254 62.443,382.955 61.740 C 384.468 61.114,386.398 59.994,388.090 58.758 C 390.383 57.083,391.356 56.165,393.293 53.846 C 395.319 51.420,396.793 48.856,398.162 45.376 C 398.695 44.022,399.435 41.149,399.624 39.702 C 399.691 39.193,399.803 38.351,399.874 37.831 L 400.002 36.885 399.988 34.489 C 399.971 31.595,399.884 30.307,399.669 29.750 L 399.624 29.634 383.103 29.634 L 366.583 29.634 366.583 29.775 C 366.583 29.876,367.258 31.274,368.993 34.766 C 370.318 37.434,371.471 39.762,371.556 39.938 C 371.670 40.177,371.738 40.269,371.825 40.303 C 372.065 40.397,374.725 40.445,380.853 40.466 C 384.321 40.479,387.190 40.505,387.228 40.525 C 387.333 40.580,387.287 40.816,387.022 41.593 C 386.344 43.585,385.848 44.567,384.458 46.679 L 383.849 47.604 382.477 48.973 C 381.058 50.390,380.701 50.695,379.783 51.272 C 378.335 52.183,376.485 52.954,375.031 53.253 C 374.695 53.322,374.238 53.426,374.014 53.485 C 373.253 53.682,370.930 53.767,369.672 53.643 C 363.426 53.028,357.702 48.511,355.216 42.234 C 354.587 40.648,354.487 40.348,354.328 39.588 C 354.244 39.188,354.102 38.520,354.013 38.104 C 353.784 37.030,353.643 35.421,353.699 34.493 C 353.710 34.306,353.740 33.718,353.764 33.186 C 353.795 32.529,353.841 32.044,353.909 31.673 C 353.963 31.372,354.020 31.032,354.035 30.916 C 354.120 30.250,354.683 28.262,355.034 27.385 C 356.909 22.699,360.014 19.236,364.208 17.151 C 365.279 16.618,366.657 16.111,367.445 15.958 C 369.180 15.623,370.709 15.447,371.522 15.489 C 373.346 15.583,374.476 15.731,375.368 15.993 C 375.634 16.070,375.917 16.147,375.998 16.163 C 376.771 16.315,378.517 17.061,379.644 17.721 C 382.366 19.314,384.933 21.968,386.255 24.556 C 386.718 25.461,386.552 25.482,388.326 24.303 C 388.979 23.870,390.477 22.903,391.656 22.154 C 394.765 20.180,396.224 19.231,396.336 19.112 L 396.434 19.008 396.058 18.447 C 393.997 15.368,391.843 13.140,388.377 10.502 C 387.534 9.860,384.747 8.223,383.566 7.676 C 382.103 6.998,379.500 6.090,378.499 5.907 C 378.176 5.848,377.627 5.735,377.280 5.655 C 376.934 5.575,376.423 5.481,376.145 5.446 C 375.868 5.412,375.575 5.363,375.494 5.339 C 375.413 5.315,375.025 5.276,374.632 5.253 C 374.239 5.229,373.842 5.192,373.749 5.170 C 373.593 5.133,369.123 5.118,368.979 5.154 M214.071 5.790 L 210.929 5.801 210.929 34.572 L 210.929 63.342 211.087 63.376 C 211.296 63.420,221.721 63.417,222.247 63.373 L 222.657 63.338 222.660 47.253 C 222.661 38.407,222.677 31.131,222.695 31.086 C 222.733 30.989,221.950 29.824,231.021 43.466 C 234.610 48.863,237.563 53.297,237.584 53.319 C 237.681 53.423,237.799 53.250,244.346 43.376 C 245.421 41.755,246.662 39.870,247.103 39.189 C 247.544 38.507,248.219 37.492,248.604 36.934 C 249.226 36.032,250.233 34.509,250.278 34.403 C 250.306 34.335,251.205 32.973,252.648 30.811 C 253.994 28.795,256.174 25.503,259.413 20.597 C 260.275 19.291,261.203 17.900,261.475 17.507 C 262.174 16.498,263.979 13.773,264.149 13.472 L 264.292 13.220 264.304 9.689 C 264.311 7.747,264.305 6.078,264.291 5.979 L 264.266 5.801 259.760 5.801 L 255.254 5.801 253.005 9.183 C 251.769 11.043,250.587 12.826,250.380 13.145 C 250.172 13.463,249.572 14.371,249.046 15.162 C 248.520 15.953,247.708 17.192,247.241 17.916 C 246.774 18.639,245.434 20.668,244.262 22.425 C 243.091 24.182,241.692 26.300,241.154 27.130 C 239.776 29.258,238.137 31.716,237.862 32.067 L 237.629 32.365 234.216 27.227 C 232.339 24.401,230.034 20.930,229.094 19.513 C 226.276 15.264,223.549 11.167,222.987 10.340 C 222.697 9.913,222.172 9.118,221.820 8.575 C 220.876 7.115,220.245 6.179,220.086 5.998 C 219.888 5.774,219.782 5.759,218.411 5.770 C 217.752 5.775,215.799 5.784,214.071 5.790 M169.691 6.421 C 169.547 6.762,169.208 7.608,168.937 8.302 C 168.666 8.995,168.254 10.007,168.022 10.551 C 167.404 11.994,167.020 12.925,166.570 14.061 C 166.351 14.615,165.983 15.514,165.753 16.057 C 165.523 16.600,165.122 17.594,164.862 18.264 C 164.602 18.934,164.365 19.540,164.334 19.609 C 164.062 20.227,163.003 22.738,162.854 23.119 C 162.750 23.385,162.640 23.659,162.609 23.728 C 162.579 23.798,162.479 24.044,162.386 24.275 C 162.294 24.506,162.064 25.055,161.875 25.494 C 161.685 25.933,161.353 26.753,161.136 27.315 C 160.919 27.878,160.544 28.795,160.302 29.354 C 159.713 30.719,159.025 32.392,157.924 35.141 C 157.419 36.401,156.842 37.810,156.641 38.272 C 156.440 38.735,156.091 39.577,155.864 40.143 C 155.637 40.709,155.231 41.702,154.961 42.350 C 154.690 42.997,154.336 43.877,154.173 44.304 C 154.010 44.732,153.551 45.848,153.152 46.784 C 152.753 47.721,152.101 49.300,151.703 50.294 C 151.306 51.288,150.955 52.158,150.925 52.228 C 150.894 52.297,150.585 53.063,150.238 53.930 C 149.891 54.797,149.433 55.913,149.221 56.410 C 149.009 56.907,148.688 57.683,148.508 58.134 C 148.327 58.584,147.920 59.568,147.602 60.319 C 146.688 62.483,146.590 62.724,146.514 62.990 C 146.475 63.128,146.434 63.274,146.422 63.314 C 146.401 63.384,146.717 63.388,152.635 63.387 L 158.869 63.386 159.851 61.086 C 160.391 59.820,161.365 57.542,162.015 56.021 L 163.198 53.258 176.175 53.258 C 188.401 53.258,189.161 53.262,189.305 53.331 C 189.477 53.413,189.561 53.555,189.822 54.211 C 189.913 54.438,190.242 55.229,190.554 55.969 C 190.865 56.709,191.367 57.919,191.668 58.659 C 191.969 59.399,192.404 60.449,192.635 60.992 C 192.867 61.535,193.154 62.216,193.274 62.505 C 193.588 63.262,193.610 63.301,193.740 63.369 C 193.865 63.433,205.652 63.466,205.967 63.403 C 206.158 63.365,206.136 63.282,205.593 62.001 C 205.344 61.411,204.993 60.541,204.814 60.067 C 204.634 59.593,204.318 58.799,204.110 58.302 C 203.902 57.805,203.619 57.114,203.481 56.768 C 203.343 56.421,203.021 55.645,202.766 55.044 C 201.839 52.859,200.648 49.939,199.706 47.541 C 199.365 46.674,198.684 45.000,198.192 43.821 C 197.701 42.642,197.102 41.176,196.861 40.563 C 196.620 39.951,196.292 39.117,196.133 38.711 C 195.973 38.305,195.693 37.643,195.511 37.240 C 195.328 36.837,195.050 36.166,194.894 35.750 C 194.737 35.334,194.421 34.549,194.191 34.006 C 193.625 32.667,192.339 29.537,191.670 27.869 C 191.368 27.117,190.971 26.146,190.787 25.711 C 190.603 25.275,190.264 24.426,190.034 23.824 C 189.804 23.222,189.297 21.961,188.907 21.022 C 188.517 20.083,188.033 18.893,187.831 18.377 C 187.138 16.600,186.526 15.239,186.415 15.226 C 186.263 15.208,186.220 15.243,183.396 17.676 C 181.928 18.942,179.933 20.658,178.962 21.491 C 177.157 23.039,177.064 23.131,177.111 23.320 C 177.133 23.407,177.675 24.711,177.911 25.242 C 177.941 25.311,178.165 25.860,178.408 26.461 C 178.651 27.062,179.009 27.932,179.205 28.394 C 179.595 29.318,179.820 29.879,180.182 30.832 C 180.314 31.179,180.592 31.839,180.799 32.299 C 181.006 32.760,181.342 33.564,181.545 34.086 C 181.860 34.896,182.379 36.156,182.578 36.591 C 182.609 36.660,182.960 37.521,183.357 38.504 C 183.753 39.486,184.211 40.593,184.372 40.963 C 184.757 41.841,185.129 42.796,185.098 42.827 C 185.012 42.913,167.487 42.911,167.401 42.825 C 167.389 42.813,170.758 34.568,174.888 24.502 C 179.018 14.436,182.432 6.110,182.476 6.000 L 182.554 5.801 176.254 5.801 L 169.953 5.801 169.691 6.421 M269.924 12.894 C 269.890 20.370,269.926 54.437,269.973 60.073 L 270.000 63.379 270.824 63.410 C 271.768 63.446,281.719 63.404,281.894 63.363 L 282.009 63.336 281.999 34.579 L 281.988 5.822 275.972 5.811 L 269.956 5.800 269.924 12.894 M287.653 5.916 C 287.592 6.137,287.614 63.293,287.676 63.354 C 287.737 63.416,299.125 63.434,299.506 63.373 L 299.705 63.341 299.716 45.489 C 299.723 33.681,299.741 27.614,299.769 27.569 C 299.803 27.513,299.977 27.742,300.694 28.787 C 301.179 29.496,301.955 30.605,302.419 31.253 C 302.882 31.900,303.811 33.234,304.483 34.218 C 305.154 35.201,306.630 37.339,307.762 38.968 C 308.895 40.597,310.263 42.573,310.803 43.359 C 311.342 44.145,312.241 45.440,312.799 46.238 C 313.357 47.036,314.114 48.123,314.480 48.655 C 314.847 49.187,315.528 50.161,315.993 50.820 C 316.459 51.479,317.121 52.434,317.465 52.942 C 317.808 53.451,318.659 54.681,319.356 55.675 C 320.498 57.305,322.744 60.550,323.930 62.284 C 324.521 63.148,324.594 63.236,324.812 63.341 L 324.995 63.430 330.909 63.430 L 336.822 63.430 336.822 61.351 C 336.822 59.465,336.815 59.257,336.749 59.112 C 336.659 58.916,335.551 57.292,334.174 55.338 C 333.604 54.529,332.866 53.470,332.535 52.984 C 332.203 52.499,331.475 51.449,330.916 50.652 C 330.358 49.854,329.308 48.341,328.583 47.289 C 327.135 45.186,325.236 42.454,324.450 41.341 C 324.172 40.948,323.593 40.106,323.163 39.470 C 322.733 38.835,322.013 37.797,321.562 37.166 C 321.112 36.534,320.716 35.976,320.681 35.926 C 319.039 33.541,318.551 32.835,318.075 32.156 C 317.759 31.706,317.125 30.788,316.666 30.118 C 316.208 29.447,315.366 28.237,314.796 27.427 C 313.797 26.010,313.085 24.979,310.887 21.774 C 310.324 20.953,309.294 19.468,308.596 18.474 C 307.899 17.480,307.048 16.260,306.705 15.763 C 306.362 15.266,305.820 14.488,305.502 14.033 C 305.183 13.579,304.597 12.728,304.200 12.142 C 303.802 11.556,303.028 10.442,302.480 9.668 C 301.636 8.475,300.770 7.223,299.988 6.064 L 299.811 5.803 293.748 5.802 L 287.686 5.801 287.653 5.916 M324.759 22.982 L 324.760 40.164 324.854 40.329 C 324.954 40.504,325.142 40.650,326.566 41.646 C 327.017 41.962,328.170 42.789,329.130 43.484 C 330.089 44.180,331.461 45.163,332.177 45.669 C 332.894 46.175,334.095 47.043,334.847 47.598 C 336.570 48.870,336.523 48.837,336.686 48.883 L 336.822 48.922 336.822 27.362 L 336.822 5.801 330.790 5.801 L 324.758 5.801 324.759 22.982 M41.015 34.773 L 41.005 61.770 35.540 61.770 L 30.076 61.770 30.065 39.466 L 30.055 17.162 29.771 17.135 C 29.615 17.121,26.042 17.108,21.831 17.108 L 14.175 17.108 14.151 17.012 C 14.108 16.841,14.069 10.651,14.101 9.195 L 14.133 7.776 27.580 7.776 L 41.026 7.776 41.015 34.773 M57.056 7.971 C 57.117 8.418,57.086 16.767,57.023 16.919 C 56.938 17.122,57.218 17.112,52.200 17.099 L 47.632 17.087 47.524 16.985 C 47.462 16.928,46.678 15.411,45.707 13.476 C 44.768 11.601,43.985 10.048,43.968 10.025 C 43.911 9.949,42.927 7.967,42.898 7.871 L 42.869 7.776 49.949 7.776 L 57.029 7.776 57.056 7.971 M263.741 25.378 C 263.628 25.467,263.299 25.701,263.010 25.899 C 262.721 26.097,261.397 27.005,260.067 27.917 C 258.738 28.829,256.941 30.055,256.074 30.642 C 253.179 32.602,252.763 32.905,252.639 33.141 C 252.576 33.263,252.549 63.323,252.612 63.387 C 252.644 63.419,263.737 63.439,264.050 63.408 L 264.313 63.381 264.302 44.311 L 264.292 25.242 264.120 25.229 C 263.974 25.218,263.916 25.241,263.741 25.378 " stroke="none" fill="#000000" fill-rule="evenodd">
            </path>
            </g>
            </svg>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-gray-900 border-gray-800 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
      </div>
    </nav>
    
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
    <div class="flex flex-col flex-wrap  ">
        <div class="flex justify-around bg-gray-400">
            <div><a href="#">Home</a></div>
            <div><a href="#">About</a></div>
            <div><a href="#">Products</a></div>
            <div><a href="#">Contact</a></div>
        </div>
    </div>
</body>
</html>