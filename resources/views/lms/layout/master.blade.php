<!DOCTYPE html>
<html lang="en">

<head>
    @stack('before-style')
    @include('lms.include.head')
    @stack('after-style')
</head>

<!-- body start -->

<body
    class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark"
  >
    <!-- preloader -->
    <div
      class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700"
    >
      <!-- spinner -->
      <div
        class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"
      ></div>
      <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
        <img src="./assets/images/pre.png" alt="Preloader" class="h-10 w-10 block" >
      </div>
    </div>
    <!-- theme fixed shadow -->
    <div>
      <div class="fixed-shadow left-[-250px]"></div>
      <div class="fixed-shadow right-[-250px]"></div>
    </div>

    <!-- theme controller -->
    <div
      class="fixed top-[100px] 2xl:top-[300px] transition-all duration-300 right-[-50px] hover:right-0 z-xl"
    >
      <button
        class="theme-controller w-90px h-10 bg-primaryColor dark:bg-whiteColor-dark rounded-l-lg2 text-whiteColor px-10px flex items-center dark:shadow-theme-controller"
      >
        <!-- dark -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mr-10px w-5 block dark:hidden"
          viewBox="0 0 512 512"
        >
          <path
            d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="32"
          ></path>
        </svg>
        <span class="text-base block dark:hidden">Dark</span>
        <!-- light -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="hidden mr-10px w-5 dark:block"
          viewBox="0 0 512 512"
        >
          <path
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-miterlimit="10"
            stroke-width="32"
            d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"
          ></path>
          <circle
            cx="256"
            cy="256"
            r="80"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-miterlimit="10"
            stroke-width="32"
          ></circle>
        </svg>
        <span class="text-base hidden dark:block">Light</span>
      </button>
    </div>
    <!-- scroll up button -->
    <div>
      <button
        class="scroll-up w-50px h-50px leading-50px text-center text-primaryColor bg-white hover:text-whiteColor hover:bg-primaryColor rounded-full fixed right-5 bottom-[60px] shadow-scroll-up z-medium text-xl dark:text-whiteColor dark:bg-primaryColor dark:hover:text-whiteColor-dark hidden"
      >
        <i class="icofont-rounded-up"></i>
      </button>
    </div>
    <!--======= Header area start =======-->
        <!-- Topbar Start -->
        @include('lms.include.navbar')
            @yield('content')
    
        @include('lms.include.footer')
      

        @stack('before-script')
        @include('lms.include.script')
        @stack('after-script')


      
</body>

</html>
