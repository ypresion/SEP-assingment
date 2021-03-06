<?php

require_once("../src/controllers/functions.php");

//Handle errors returned by the loginProcess.php
$errors = isset($_REQUEST['errors']) ? $_REQUEST['errors'] : null;
if($errors == 'true') { 
    sleep(1);
    echo <<<EOT
    <script>
    $(document).ready(function(){
    $('#phperror').removeClass("hidden");
    setTimeout(function(){ $('#phperror').addClass("hidden"); }, 10000);
    });
    </script>
EOT;
}
?>

<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden md:block lg:w-1/2 bg-cover rounded-l-lg"
						style="background-image: url('assets/images/login.jpg')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Welcome Back!</h3>
						<form id="loginForm" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="post" data-ajax="false" action="../src/controllers/loginProcess.php">
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="username">
									Username
								</label>
								<input
									class="to-validate w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="username"
									name="username"
									type="text"
									placeholder="Username"
									/>
								<p class="warning text-xs italic text-red-500 hidden">Please enter a valid username.</p>
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
									Password
								</label>
								<input
								class="to-validate w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border  rounded shadow appearance-none focus:outline-none focus:shadow-outline"
								id="password"
								name="password"
								type="password"
								placeholder="******************"
								/>
								<p class="warning text-xs italic text-red-500 hidden">Please enter a valid password.</p>
								<p id="phperror" class="text-xs italic text-red-500 hidden">Incorrect username or password</p>
							</div>
							<div class="mb-4">
                        	<input class="mr-2 leading-tight" type="checkbox" id="checkbox_id" />
                        	<label class="text-sm" for="checkbox_id">
                            	Remember Me
                       		</label>
                    		</div>
							<div class="mb-6 text-center">

								<button class="w-full px-4 text-white bg-gray-800 border-0 py-2 px-10 focus:outline-none hover:bg-gray-600 rounded text-lg" type="submit">Login
								</button>

							</div>
							<hr class="mb-6 border-t" />
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="index.php?page=register"
								>
									Create an Account!
								</a>
							</div>
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="./forgot-password.html"
								>
									Forgot Password?
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="scripts/index.js"></script>

