<?php
require_once("../src/controllers/functions.php");

//Handle php errors returned by registerProcess.php
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

<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden md:block lg:w-5/12 bg-cover rounded-l-lg"
						style="background-image: url('assets/images/controller.jpg')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
						<form id="registerForm" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="post" data-ajax="false" action="../src/controllers/registerProcess.php">
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
										First Name
									</label>
									<input
										class="to-validate w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="firstName"
										type="text"
										name="first"
										placeholder="First Name"
									/>
									<p class="warning text-xs italic text-red-500 hidden">Please enter your first name.</p>
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
										Last Name
									</label>
									<input
										class="to-validate w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="lastName"
										type="text"
										name="last"
										placeholder="Last Name"
									/>
									<p class="warning text-xs italic text-red-500 hidden">Please enter your last name.</p>
								</div>
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="username">
									Username
								</label>
								<input
									class="to-validate w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="username"
									name="username"
									type="text"
									placeholder="Username"
									min="6"
									max="50"
								/>
								<p class="warning text-xs italic text-red-500 hidden">Please enter your username.</p>
							</div>
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
										Password
									</label>
									<input
										class="to-validate w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="password"
										name="password"
										type="password"
										placeholder="******************"
										min="8"
										max="16"
									/>
									<p class="warning text-xs italic text-red-500 hidden">Please enter a password.</p>
									<p id="no-match" class="text-xs italic text-red-500 hidden">Your passwords do not match.</p>
									<p id="phperror" class="text-xs italic text-red-500 hidden">Username already exists</p>
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
										Confirm
									</label>
									<input
									class="to-validate w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="c_password"
									name="passwordCheck"
									type="password"
									placeholder="******************"
									/>
									<p class="warning text-xs italic text-red-500 hidden">Please re-enter the password.</p>
									
								</div>
							</div>
							<div class="mb-6 text-center">
								
								<button class="w-full px-4 text-white bg-gray-800 border-0 py-2 px-10 focus:outline-none hover:bg-gray-600 rounded text-lg" type="submit">Register
								</button>

							</div>
							<hr class="mb-6 border-t" />
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="#"
								>
									Forgot Password?
								</a>
							</div>
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="login.html"
								>
									Already have an account? Login!
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
