<template>
<div class="relative bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
      <div class="lg:w-0 lg:flex-1">
        <a href="#" class="flex">
          <b>Lave</b>Cart
        </a>
      </div>
      <div class="-mr-2 -my-2 md:hidden">
        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <!-- Heroicon name: menu -->
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <div class="hidden md:flex items-center justify-end space-x-8 md:flex-1 lg:w-0">

        <a href="#" class="relative flex">
          <svg style="width: 30px; color: green;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
          </svg>
          <span class="absolute right left-5 rounded-full bg-red-600 w-5 h-5 top right pt-0 m-0 text-white font-mono  leading-tight text-center">5</span>
        </a>

        <span class="inline-flex rounded-md shadow-sm">
          <a href="#" class="whitespace-no-wrap inline-flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
            Sign in
          </a>
        </span>

      </div>
    </div>
  </div>

  <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
  <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
    <div class="rounded-lg shadow-lg">
      <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
        <div class="pt-5 pb-6 px-5 space-y-6">
          <div class="flex items-center justify-between">
            <div>
              <b>Lave</b>Cart
            </div>
            <div class="-mr-2 flex">
              <a href="#" class="relative flex mr-2">
                <svg style="width: 30px; color: green;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                </svg>
                <span class="absolute right left-5 rounded-full bg-red-600 w-5 h-5 top right pt-0 m-0 text-white font-mono  leading-tight text-center">5</span>
              </a>
              <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <!-- Heroicon name: x -->
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="py-6 px-5 space-y-6">
          <div class="space-y-6">
            <span class="w-full flex rounded-md shadow-sm">
              <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                Sign up
              </a>
            </span>
            <p class="text-center text-base leading-6 font-medium text-gray-500">
              Existing customer?
              <a href="#" class="text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
                Sign in
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</template>
<script>
export default {
}
</script>