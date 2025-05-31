<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up - VeraBanK</title>
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

  <!-- Sign Up Card -->
  <div class="flex justify-center items-center min-h-screen px-4">
    <div class="bg-[#121212] rounded-xl p-8 max-w-md w-full shadow-lg border border-gray-800">
      <h2 class="text-2xl font-bold text-center text-lime-400 mb-2">Create an Account</h2>
      <p class="text-center text-sm text-gray-400 mb-6">Join VeraBanK and start managing your finances smarter.</p>

      <form class="space-y-4">
        <input
          type="text"
          placeholder="Full Name"
          class="w-full bg-[#1a1a1a] text-white border border-gray-700 rounded-full px-4 py-2 outline-none focus:ring-2 focus:ring-lime-400"
        />
        <input
          type="email"
          placeholder="Email Address"
          class="w-full bg-[#1a1a1a] text-white border border-gray-700 rounded-full px-4 py-2 outline-none focus:ring-2 focus:ring-lime-400"
        />
        <input
          type="password"
          placeholder="Password"
          class="w-full bg-[#1a1a1a] text-white border border-gray-700 rounded-full px-4 py-2 outline-none focus:ring-2 focus:ring-lime-400"
        />
        <input
          type="password"
          placeholder="Confirm Password"
          class="w-full bg-[#1a1a1a] text-white border border-gray-700 rounded-full px-4 py-2 outline-none focus:ring-2 focus:ring-lime-400"
        />

        <button
          type="submit"
          class="w-full bg-lime-400 text-black font-semibold rounded-full py-2 hover:bg-lime-300"
        >
          Sign Up
        </button>
      </form>

      <div class="flex items-center justify-center my-4 space-x-2">
        <hr class="flex-grow border-gray-700" />
        <span class="text-sm text-gray-500">Or Sign Up with</span>
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

      <p class="text-center text-sm text-gray-400 mt-6">
        Already have an account?
        <a href="login" class="text-lime-400 hover:underline">Login here</a>
      </p>
    </div>
  </div>

</body>
</html>
