<?php
	$aside = $_GET['aside'];
?>
<aside class="w-64 mx-auto mb-4 pr-4" aria-label="Sidebar">
		<div class="overflow-y-auto py-4 px-4 bg-gray-100 rounded dark:bg-gray-800">
			<ul class="space-y-2">
			 	<li>
					<h3 class="flex items-center p-2 text-base font-semibold text-gray-900 rounded-lg dark:text-white">
						<i class="fa-solid fa-user"></i>
						<span class="ml-4">Manage Membership</span>
					</h3>
			 	</li>
			</ul>
			<ul class="pt-4 mt-4 space-y-2 border-t border-gray-300 dark:border-gray-600">
				<li>
					<a href="create-member.php?name=member&aside=create-member" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 <?php if($aside == "create-member") echo "md:text-blue-700 dark:text-white"; else echo "dark:hover:text-white dark:text-gray-400"?> hover:bg-gray-200 dark:hover:bg-gray-700 group">
						<i class="fa-solid fa-plus"></i>
						<span class="ml-4">Create Member</span>
					</a>
				</li>
				<li>
					<a href="search-member.php?name=member&aside=search-member" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 <?php if($aside == "search-member") echo "md:text-blue-700 dark:text-white"; else echo "dark:hover:text-white dark:text-gray-400"?> hover:bg-gray-200 dark:hover:bg-gray-700 group">
						<i class="fa-solid fa-magnifying-glass"></i>
						<span class="ml-4">Search Member</span>
					</a>
				</li>
				<li>
					<a class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-white dark:text-gray-400 group cursor-pointer" data-modal-toggle="export-modal">
						<i class="fa-solid fa-file-export"></i>
						<span class="ml-3">Export Member</span>
					</a>
				</li>
			</ul>
		</div>
	</aside>

	<div id="export-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    	<div class="relative w-full h-full max-w-md p-4 md:h-auto">
        	<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            	<button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="export-modal">
                	<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
            	</button>
            	<div class="px-6 py-6 lg:px-8">
                	<h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-white">What would you like to export?</h3>
                	<form class="space-y-6" action="#">									
						<div class="grid xl:grid-cols-2 xl:gap-6">
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="id" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
									<label for="id" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Member ID</label>
								</div>
							</div>
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="name" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="name" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Member Name</label>
								</div>
							</div>
						</div>
						
						<div class="grid xl:grid-cols-2 xl:gap-6">
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="ic" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="ic" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">NRIC</label>
								</div>
							</div>
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="citizen" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="citizen" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Citizenship</label>
								</div>
							</div>
						</div>
						
						<div class="grid xl:grid-cols-2 xl:gap-6">
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="age" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="age" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Age</label>
								</div>
							</div>
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="gender" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="gender" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gender</label>
								</div>
							</div>
						</div>
						
						<div class="grid xl:grid-cols-2 xl:gap-6">
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="dob" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="dob" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date of Birth</label>
								</div>
							</div>
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="contact" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="contact" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contact Number</label>
								</div>
							</div>
						</div>
						
						<div class="grid xl:grid-cols-2 xl:gap-6">
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="job" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="job" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Occupation</label>
								</div>
							</div>
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="address" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="address" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
								</div>
							</div>
						</div>
						
						<div class="grid xl:grid-cols-2 xl:gap-6">
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="member" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="member" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Member Type</label>
								</div>
							</div>
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="accept-date" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="accept-date" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date of Admission</label>
								</div>
							</div>
						</div>
						
						<div class="grid xl:grid-cols-2 xl:gap-6">
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="recommender-id" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="recommender-id" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recommender ID</label>
								</div>
							</div>
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="recommender" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="recommender" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recommender Name</label>
								</div>
							</div>
						</div>
						<div class="grid xl:grid-cols-2 xl:gap-6">
							<div class="relative z-0 w-full group">
								<div class="flex items-center">
									<input id="remarks" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="remarks" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remarks</label>
								</div>
							</div>
						</div>
                    				
                    	<button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Export</button>
                	</form>
            	</div>
        	</div>
    	</div>
	</div> 