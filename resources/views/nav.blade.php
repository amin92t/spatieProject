<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
          
            <!-- منو -->
            <div class="hidden md:flex space-x-4 space-x-reverse">
                <a href="" class="text-gray-700 hover:text-indigo-500 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                    نقش‌ها
                </a>
                <a href="" class="text-gray-700 hover:text-indigo-500 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                    دسترسی‌ها
                </a>
                <a href="" class="text-gray-700 hover:text-indigo-500 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                    کاربران
                </a>
               
            </div>
            <!-- منوی موبایل -->
            <div class="md:hidden">
                <button class="text-gray-700 hover:text-indigo-500 focus:outline-none focus:text-indigo-500" aria-label="منوی موبایل" onclick="toggleMobileMenu()">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    </button>
            </div>
        </div>
    </div>
    <!-- منوی موبایل -->
    <div class="hidden md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-indigo-500">
                نقش‌ها
            </a>
            <a href="" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-indigo-500">
                دسترسی‌ها
            </a>
            <a href="" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-indigo-500">
                کاربران
            </a>
          
        </div>
    </div>
</header>