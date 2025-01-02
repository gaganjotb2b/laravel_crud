
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    @vite("resources/css/app.css")
</head>
<body>
  
       
<nav class="bg-black">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <!-- Logo -->
      <!-- <div class="flex-shrink-0">
        <a href="#" class="text-white text-lg font-semibold">Logo</a>
      </div> -->

      <!-- Desktop Links -->
      <div class="hidden sm:flex sm:space-x-4">
      <a href="/" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home Page</a>
        <a href="/admin/addProduct" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Add Products</a>
        <a href="/admin/productList" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">View Products</a>
        <!-- <a href="#" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">About</a>
        <a href="#" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Admin</a> -->
      </div>

      <!-- Mobile Menu Button -->
      <div class="sm:hidden">
        <button id="menu-toggle" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-300 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
          <span class="sr-only">Open main menu</span>
          <!-- Icon for Menu -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
          <!-- Icon for Close -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="sm:hidden hidden">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <a href="#" class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Home</a>
      <a href="#" class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Contact</a>
      <a href="#" class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">About</a>
      <a href="#" class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Admin</a>
    </div>
  </div>
</nav>



</body>
</html>