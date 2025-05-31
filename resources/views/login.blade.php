<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>YourBank Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0f0f0f] text-white font-sans">

  <!-- Navbar -->
  <nav class="flex items-center justify-between px-8 py-4 bg-[#0f0f0f] shadow-md">
    <div class="flex items-center space-x-2">
      <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-6 h-6" />
      <span class="text-lg font-bold">VeraBanK</span>
    </div>
    <div class="flex items-center space-x-6 text-sm">
      <a href="home" class="hover:text-lime-400">Home</a>
      <a href="#" class="hover:text-lime-400">Careers</a>
      <a href="#" class="hover:text-lime-400">About</a>
      <a href="#" class="hover:text-lime-400">Security</a>
    </div>
    <div class="flex items-center space-x-4">
  <a href="{{ url('/signup') }}"
     class="transition-all duration-300 text-sm px-4 py-1 rounded-full hover:text-lime-400 {{ request()->is('signup') ? 'bg-lime-400 text-black' : '' }}">
     Sign Up
  </a>
  <a href="{{ url('/login') }}"
     class="transition-all duration-300 text-sm px-4 py-1 rounded-full hover:text-lime-400 {{ request()->is('login') ? 'bg-lime-400 text-black' : '' }}">
     Login
  </a>
</div>

  </nav>

  <!-- Login Card -->
  <div class="flex justify-center items-center min-h-screen px-4">
    <div class="bg-[#121212] rounded-xl p-8 max-w-md w-full shadow-lg border border-gray-800">
      <h2 class="text-2xl font-bold text-center text-lime-400 mb-2">Login</h2>
      <p class="text-center text-sm text-gray-400 mb-6">Welcome back! Please log in to access your account.</p>

      <form class="space-y-4">
        <input
          type="email"
          placeholder="Enter your Email"
          class="w-full bg-[#1a1a1a] text-white border border-gray-700 rounded-full px-4 py-2 outline-none focus:ring-2 focus:ring-lime-400"
        />
        <input
          type="password"
          placeholder="Enter your Password"
          class="w-full bg-[#1a1a1a] text-white border border-gray-700 rounded-full px-4 py-2 outline-none focus:ring-2 focus:ring-lime-400"
        />
        <div class="text-right">
          <a href="#" class="text-sm text-lime-400 hover:underline">Forgot Password?</a>
        </div>
        <button
          type="submit"
          class="w-full bg-lime-400 text-black font-semibold rounded-full py-2 hover:bg-lime-300"
        >
          Login
        </button>
        <button
          type="button"
          class="w-full bg-[#1a1a1a] border border-gray-700 text-white rounded-full py-2 hover:bg-gray-800"
        >
          Sign Up
        </button>
      </form>

      <div class="flex items-center justify-center my-4 space-x-2">
        <hr class="flex-grow border-gray-700" />
        <span class="text-sm text-gray-500">Or Continue with</span>
        <hr class="flex-grow border-gray-700" />
      </div>

      <div class="flex justify-center space-x-4">
        <button class="p-2 bg-[#1a1a1a] rounded-full hover:bg-gray-800">
          <img src="{{ asset('assets/google-icon.png') }}" alt="Google" class="w-6 h-6" />
        </button>
        <button class="p-2 bg-[#1a1a1a] rounded-full hover:bg-gray-800">
          <img src="{{ asset('assets/facebook-icon.png') }}" alt="Facebook" class="w-6 h-6" />
        </button>
        <button class="p-2 bg-[#1a1a1a] rounded-full hover:bg-gray-800">
          <img src="{{ asset('assets/apple-icon.png') }}" alt="Apple" class="w-6 h-6" />
        </button>
      </div>
    </div>
  </div>

  <!-- Testimonials Section -->
<section class="bg-[#0f0f0f] text-white py-16 px-6">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-bold mb-4">Our <span class="text-lime-400">Testimonials</span></h2>
    <p class="text-gray-400 mb-8">
      Discover how VeraBanK has transformed lives with innovative digital solutions and personalized customer service.
      See why our clients trust us for a secure and prosperous financial journey.
    </p>

    <!-- Toggle Buttons -->
    <div class="flex justify-center gap-4 mb-8">
      <button class="bg-lime-400 text-black px-6 py-2 rounded-full font-semibold">For Individuals</button>
      <button class="bg-[#1a1a1a] text-white px-6 py-2 rounded-full border border-gray-700 hover:bg-gray-800">For Businesses</button>
    </div>

    <!-- Testimonials Carousel -->
    <div class="flex items-center justify-between space-x-4 overflow-x-auto scrollbar-hide px-2">
      <!-- Left Arrow -->
      <button class="p-2 bg-[#1a1a1a] rounded-full hover:bg-gray-700">
        <svg class="w-6 h-6 text-lime-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
        </svg>
      </button>

      <!-- Testimonial Cards -->
      <div class="flex space-x-6 justify-center overflow-x-auto max-w-full">
        <div class="bg-[#121212] border border-gray-800 p-6 rounded-xl w-80 text-sm text-gray-300">
          <p class="text-lime-400 text-2xl mb-2">“</p>
          <p class="mb-4">VeraBanK has been my trusted financial partner for years. Their personalized service and innovative digital banking solutions have made managing my finances a breeze.</p>
          <p class="text-lime-400 font-semibold">Abel</p>
        </div>

        <div class="bg-[#121212] border border-gray-800 p-6 rounded-xl w-80 text-sm text-gray-300">
          <p class="text-lime-400 text-2xl mb-2">“</p>
          <p class="mb-4">I recently started my own business, and VeraBanK has been instrumental in helping me set up my business accounts and secure the financing I needed.</p>
          <p class="text-lime-400 font-semibold">Adit</p>
        </div>

        <div class="bg-[#121212] border border-gray-800 p-6 rounded-xl w-80 text-sm text-gray-300">
          <p class="text-lime-400 text-2xl mb-2">“</p>
          <p class="mb-4">I love the convenience of VeraBanK’s mobile banking app. It allows me to stay on top of my finances and make transactions anytime.</p>
          <p class="text-lime-400 font-semibold">Rivaldi</p>
        </div>
      </div>

      <!-- Right Arrow -->
      <button class="p-2 bg-[#1a1a1a] rounded-full hover:bg-gray-700">
        <svg class="w-6 h-6 text-lime-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
        </svg>
      </button>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-[#0f0f0f] text-white py-12 px-6">
  <div class="max-w-6xl mx-auto flex flex-col items-center space-y-6">
    <div class="flex items-center space-x-2">
      <img src="{{ asset('assets/logo.png') }}" alt="YourBank Logo" class="w-6 h-6" />
      <span class="text-lg font-bold">VeraBanK</span>
    </div>

    <!--<div class="flex space-x-6 text-sm text-gray-400">
      <a href="home" class="hover:text-lime-400">Home</a>
      <a href="#" class="hover:text-lime-400">Careers</a>
      <a href="#" class="hover:text-lime-400">About</a>
      <a href="#" class="hover:text-lime-400">Security</a>
    </div>-->

    <div class="text-sm text-gray-400 text-center">
      <p>📧 rizkyvera20@gmail.com</p>
      <p>📞 +62 81 227 542 911</p>
      <p>📍 ENDONESAHHHH</p>
    </div>

    <div class="flex space-x-4 mt-4">
      <a href="#"><img src="{{ asset('assets/button-fb.png') }}" alt="Facebook" class="w-6 h-6"/></a>
      <a href="#"><img src="{{ asset('assets/button-twitter.png') }}" alt="Twitter" class="w-6 h-6"/></a>
      <a href="#"><img src="{{ asset('assets/button-linkedin.png') }}" alt="LinkedIn" class="w-6 h-6"/></a>
    </div>

    <div class="text-xs text-gray-600 mt-6">
      <p>© VeraBanK. All Rights Reserved</p>
      <div class="space-x-2">
        <a href="#" class="hover:underline">Privacy Policy</a> |
        <a href="#" class="hover:underline">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>


</body>
</html>
