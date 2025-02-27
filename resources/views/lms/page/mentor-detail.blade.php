@extends('lms.layout.master')

@push('after-style')

@endpush


@section('content')
<main class="bg-transparent">
  <!-- banner section -->
  <section>
    <!-- banner section -->
    <div
      class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-y-visible py-50px md:py-20 lg:py-100px 2xl:pb-150px 2xl:pt-40.5"
    >
      <!-- animated icons -->
      <div>
        <img
          class="absolute left-0 bottom-0 md:left-[14px] lg:left-[50px] lg:bottom-[21px] 2xl:left-[165px] 2xl:bottom-[60px] animate-move-var z-10"
          src="./assets/images/herobanner/herobanner__1.png"
          alt=""
        ><img
          class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
          src="./assets/images/herobanner/herobanner__2.png"
          alt=""
        ><img
          class="absolute right-[30px] top-0 md:right-10 lg:right-[575px] 2xl:top-20 animate-move-var2 opacity-50 hidden md:block"
          src="./assets/images/herobanner/herobanner__3.png"
          alt=""
        >

        <img
          class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
          src="./assets/images/herobanner/herobanner__5.png"
          alt=""
        >
      </div>
      <div class="container">
        <div class="text-center">
          <h1
            class="text-3xl md:text-size-40 2xl:text-size-55 font-bold text-blackColor dark:text-blackColor-dark mb-7 md:mb-6 pt-3"
          >
            instructor page
          </h1>
          <ul class="flex gap-1 justify-center">
            <li>
              <a
                href="index.html"
                class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                >Home <i class="icofont-simple-right"></i
              ></a>
            </li>
            <li>
              <span
                class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                >Blog page</span
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- testimonial section -->
  <section class="py-100px">
    <div class="container">
      <!-- about section  -->
      <div class="grid grid-cols-1 lg:grid-cols-12 pt-30px gap-x-30px">
        <!-- about left -->
        <div
          class="lg:col-start-1 lg:col-span-4 relative z-0 mb-30px lg:mb-0 pb-0 md:pb-30px xl:pb-0 overflow-visible"
          data-aos="fade-up"
        >
          <div class="tilt">
            <img
              src="./assets/images/team/team__4.png"
              alt=""
              class="w-full"
            >

            <img
              class="absolute top-0 left-[-30px] animate-move-hor z-[-1]"
              src="./assets/images/about/about_4.png"
              alt=""
            >
          </div>
        </div>
        <!-- about right -->
        <div data-aos="fade-up" class="lg:col-start-5 lg:col-span-8">
          <div
            class="flex justify-between items-center flex-wrap md:flex-nowrap"
          >
            <div>
              <h3
                class="text-size-25 md:text-size-40 lg:text-3xl 2xl:text-size-40 leading-34px md:leading-13.5 lg:leading-11 2xl:leading-13.5 font-bold text-blackColor dark:text-blackColor-dark"
              >
                Hiliary Ouse
              </h3>
              <p
                class="text-sm md:text-base leading-7 text-contentColor dark:text-contentColor-dark"
              >
                Teches Interior marketer
              </p>
            </div>
            <div>
              <p class="text-blackColor dark:text-blackColor-dark">
                Review:
              </p>
              <div>
                <i class="icofont-star text-size-15 text-yellow"></i>
                <i class="icofont-star text-size-15 text-yellow"></i>
                <i class="icofont-star text-size-15 text-yellow"></i>
                <i class="icofont-star text-size-15 text-yellow"></i>
                <i class="icofont-star text-size-15 text-yellow"></i>
                <span class="text-xs text-lightGrey6">(44)</span>
              </div>
            </div>
            <div>
              <p class="text-blackColor dark:text-blackColor-dark">
                Follow Us:
              </p>
              <ul
                class="flex gap-13px text-base text-contentColor dark:text-contentColor-dark"
              >
                <li>
                  <a class="hover:text-primaryColor" href="#"
                    ><i class="icofont-facebook"></i
                  ></a>
                </li>
                <li>
                  <a class="hover:text-primaryColor" href="#"
                    ><i class="icofont-twitter"></i
                  ></a>
                </li>
                <li>
                  <a class="hover:text-primaryColor" href="#"
                    ><i class="icofont-instagram"></i
                  ></a>
                </li>
                <li>
                  <a class="hover:text-primaryColor" href="#"
                    ><i class="icofont-youtube-play"></i
                  ></a>
                </li>
              </ul>
            </div>
            <div>
              <a
                href="#"
                class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-10 py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
              >
                Follow
              </a>
            </div>
          </div>

          <div
            class="pt-7 mt-30px border-t border-borderColor dark:border-borderColor-dark"
          >
            <h4
              class="text-xl text-blackColor dark:text-blackColor-dark font-semibold mb-1"
            >
              Short Bio
            </h4>
            <p
              class="leading-7 text-contentColor dark:text-contentColor-dark"
            >
              Only a quid me old mucker squiffy tomfoolery grub cheers ruddy
              cor blimey guvnor in my flat, up the duff Eaton car boot up
              the kyver pardon you A bit of how's your father David skive
              off sloshed, don't get shirty with me chip shop vagabond
              crikey bugger Queen's English chap. Matie boy nancy boy bite
              your arm off up the kyver old no biggie fantastic boot, David
              have it show off show off pick your nose and blow off lost the
              plot porkies bits and bobs only a quid bugger all mate,
              absolutely bladdered bamboozled it's your round don't get
              shirty with me down the pub well.
            </p>
          </div>

          <!-- other courses -->
          <div class="mt-10" data-aos="fade-up">
            <!-- other courses heading -->
            <div class="mb-10px">
              <h4
                class="text-3xl font-bold text-blackColor dark:text-blackColor-dark leading-1.2"
              >
                Online Course
              </h4>
            </div>
            <div data-aos="fade-up" class="sm:-mx-15px">
              <!-- Swiper -->
              <div class="swiper other-courses">
                <div class="swiper-wrapper">
                  <!-- card 1 -->
                  <div class="swiper-slide">
                    <div class="w-full group grid-item filter1 filter3">
                      <div class="tab-content-wrapper sm:px-15px mb-30px">
                        <div
                          class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                        >
                          <!-- card image -->
                          <div class="relative mb-4">
                            <a
                              href="course.html"
                              class="w-full overflow-hidden rounded"
                            >
                              <img
                                src="./assets/images/grid/grid_1.png"
                                alt=""
                                class="w-full transition-all duration-300 group-hover:scale-110"
                              >
                            </a>
                            <div
                              class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                            >
                              <div>
                                <p
                                  class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold"
                                >
                                  Data & Tech
                                </p>
                              </div>
                              <a
                                class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                href="#"
                                ><i
                                  class="icofont-heart-alt text-base py-1 px-2"
                                ></i
                              ></a>
                            </div>
                          </div>
                          <!-- card content -->
                          <div>
                            <div class="grid grid-cols-2 mb-15px">
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >23 Lesson</span
                                  >
                                </div>
                              </div>
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >1 hr 30 min</span
                                  >
                                </div>
                              </div>
                            </div>
                            <a
                              href="course-details.html"
                              class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            >
                              Foundation course to under stand about
                              softwere
                            </a>
                            <!-- price -->
                            <div
                              class="text-lg font-semibold text-primaryColor font-inter mb-4"
                            >
                              $32.00
                              <del
                                class="text-sm text-lightGrey4 font-semibold"
                                >/ $67.00</del
                              >
                              <span class="ml-6"
                                ><del
                                  class="text-base font-semibold text-secondaryColor3"
                                  >Free</del
                                ></span
                              >
                            </div>
                            <!-- author and rating-->
                            <div
                              class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                            >
                              <div>
                                <a
                                  href="instructor-details.html"
                                  class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                  ><img
                                    class="w-[30px] h-[30px] rounded-full mr-15px"
                                    src="./assets/images/grid/grid_small_1.jpg"
                                    alt=""
                                  >
                                  <span class="flex">Micle john</span>
                                </a>
                              </div>
                              <div class="text-start md:text-end">
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <span class="text-xs text-lightGrey6"
                                  >(44)</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- card 2 -->
                  <div class="swiper-slide">
                    <div class="w-full group grid-item filter1 filter3">
                      <div class="tab-content-wrapper sm:px-15px mb-30px">
                        <div
                          class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                        >
                          <!-- card image -->
                          <div class="relative mb-4">
                            <a
                              href="course.html"
                              class="w-full overflow-hidden rounded"
                            >
                              <img
                                src="./assets/images/grid/grid_2.png"
                                alt=""
                                class="w-full transition-all duration-300 group-hover:scale-110"
                              >
                            </a>
                            <div
                              class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                            >
                              <div>
                                <p
                                  class="text-xs text-whiteColor px-4 py-[3px] bg-yellow rounded font-semibold"
                                >
                                  Data & Tech
                                </p>
                              </div>
                              <a
                                class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                href="#"
                                ><i
                                  class="icofont-heart-alt text-base py-1 px-2"
                                ></i
                              ></a>
                            </div>
                          </div>
                          <!-- card content -->
                          <div>
                            <div class="grid grid-cols-2 mb-15px">
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >23 Lesson</span
                                  >
                                </div>
                              </div>
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >1 hr 30 min</span
                                  >
                                </div>
                              </div>
                            </div>
                            <a
                              href="course-details.html"
                              class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            >
                              Foundation course to under stand about
                              softwere
                            </a>
                            <!-- price -->
                            <div
                              class="text-lg font-semibold text-primaryColor font-inter mb-4"
                            >
                              $32.00
                              <del
                                class="text-sm text-lightGrey4 font-semibold"
                                >/ $67.00</del
                              >
                              <span class="ml-6"
                                ><del
                                  class="text-base font-semibold text-secondaryColor3"
                                  >Free</del
                                ></span
                              >
                            </div>
                            <!-- author and rating-->
                            <div
                              class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                            >
                              <div>
                                <a
                                  href="instructor-details.html"
                                  class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                  ><img
                                    class="w-[30px] h-[30px] rounded-full mr-15px"
                                    src="./assets/images/grid/grid_small_1.jpg"
                                    alt=""
                                  >
                                  <span class="flex">Micle john</span>
                                </a>
                              </div>
                              <div class="text-start md:text-end">
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <span class="text-xs text-lightGrey6"
                                  >(44)</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- card 3 -->
                  <div class="swiper-slide">
                    <div class="w-full group grid-item filter1 filter3">
                      <div class="tab-content-wrapper sm:px-15px mb-30px">
                        <div
                          class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                        >
                          <!-- card image -->
                          <div class="relative mb-4">
                            <a
                              href="course.html"
                              class="w-full overflow-hidden rounded"
                            >
                              <img
                                src="./assets/images/grid/grid_3.png"
                                alt=""
                                class="w-full transition-all duration-300 group-hover:scale-110"
                              >
                            </a>
                            <div
                              class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                            >
                              <div>
                                <p
                                  class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold"
                                >
                                  Data & Tech
                                </p>
                              </div>
                              <a
                                class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                href="#"
                                ><i
                                  class="icofont-heart-alt text-base py-1 px-2"
                                ></i
                              ></a>
                            </div>
                          </div>
                          <!-- card content -->
                          <div>
                            <div class="grid grid-cols-2 mb-15px">
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >23 Lesson</span
                                  >
                                </div>
                              </div>
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >1 hr 30 min</span
                                  >
                                </div>
                              </div>
                            </div>
                            <a
                              href="course-details.html"
                              class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            >
                              Foundation course to under stand about
                              softwere
                            </a>
                            <!-- price -->
                            <div
                              class="text-lg font-semibold text-primaryColor font-inter mb-4"
                            >
                              $32.00
                              <del
                                class="text-sm text-lightGrey4 font-semibold"
                                >/ $67.00</del
                              >
                              <span class="ml-6"
                                ><del
                                  class="text-base font-semibold text-secondaryColor3"
                                  >Free</del
                                ></span
                              >
                            </div>
                            <!-- author and rating-->
                            <div
                              class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                            >
                              <div>
                                <a
                                  href="instructor-details.html"
                                  class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                  ><img
                                    class="w-[30px] h-[30px] rounded-full mr-15px"
                                    src="./assets/images/grid/grid_small_1.jpg"
                                    alt=""
                                  >
                                  <span class="flex">Micle john</span>
                                </a>
                              </div>
                              <div class="text-start md:text-end">
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <span class="text-xs text-lightGrey6"
                                  >(44)</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- card 4 -->
                  <div class="swiper-slide">
                    <div class="w-full group grid-item filter1 filter3">
                      <div class="tab-content-wrapper sm:px-15px mb-30px">
                        <div
                          class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                        >
                          <!-- card image -->
                          <div class="relative mb-4">
                            <a
                              href="course.html"
                              class="w-full overflow-hidden rounded"
                            >
                              <img
                                src="./assets/images/grid/grid_4.png"
                                alt=""
                                class="w-full transition-all duration-300 group-hover:scale-110"
                              >
                            </a>
                            <div
                              class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                            >
                              <div>
                                <p
                                  class="text-xs text-whiteColor px-4 py-[3px] bg-greencolor2 rounded font-semibold"
                                >
                                  Data & Tech
                                </p>
                              </div>
                              <a
                                class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                href="#"
                                ><i
                                  class="icofont-heart-alt text-base py-1 px-2"
                                ></i
                              ></a>
                            </div>
                          </div>
                          <!-- card content -->
                          <div>
                            <div class="grid grid-cols-2 mb-15px">
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >23 Lesson</span
                                  >
                                </div>
                              </div>
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >1 hr 30 min</span
                                  >
                                </div>
                              </div>
                            </div>
                            <a
                              href="course-details.html"
                              class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            >
                              Foundation course to under stand about
                              softwere
                            </a>
                            <!-- price -->
                            <div
                              class="text-lg font-semibold text-primaryColor font-inter mb-4"
                            >
                              $32.00
                              <del
                                class="text-sm text-lightGrey4 font-semibold"
                                >/ $67.00</del
                              >
                              <span class="ml-6"
                                ><del
                                  class="text-base font-semibold text-secondaryColor3"
                                  >Free</del
                                ></span
                              >
                            </div>
                            <!-- author and rating-->
                            <div
                              class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                            >
                              <div>
                                <a
                                  href="instructor-details.html"
                                  class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                  ><img
                                    class="w-[30px] h-[30px] rounded-full mr-15px"
                                    src="./assets/images/grid/grid_small_1.jpg"
                                    alt=""
                                  >
                                  <span class="flex">Micle john</span>
                                </a>
                              </div>
                              <div class="text-start md:text-end">
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <span class="text-xs text-lightGrey6"
                                  >(44)</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- card 5 -->
                  <div class="swiper-slide">
                    <div class="w-full group grid-item filter1 filter3">
                      <div class="tab-content-wrapper sm:px-15px mb-30px">
                        <div
                          class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                        >
                          <!-- card image -->
                          <div class="relative mb-4">
                            <a
                              href="course.html"
                              class="w-full overflow-hidden rounded"
                            >
                              <img
                                src="./assets/images/grid/kid_5.jpg"
                                alt=""
                                class="w-full transition-all duration-300 group-hover:scale-110"
                              >
                            </a>
                            <div
                              class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                            >
                              <div>
                                <p
                                  class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold"
                                >
                                  Data & Tech
                                </p>
                              </div>
                              <a
                                class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                href="#"
                                ><i
                                  class="icofont-heart-alt text-base py-1 px-2"
                                ></i
                              ></a>
                            </div>
                          </div>
                          <!-- card content -->
                          <div>
                            <div class="grid grid-cols-2 mb-15px">
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >23 Lesson</span
                                  >
                                </div>
                              </div>
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >1 hr 30 min</span
                                  >
                                </div>
                              </div>
                            </div>
                            <a
                              href="course-details.html"
                              class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            >
                              Foundation course to under stand about
                              softwere
                            </a>
                            <!-- price -->
                            <div
                              class="text-lg font-semibold text-primaryColor font-inter mb-4"
                            >
                              $32.00
                              <del
                                class="text-sm text-lightGrey4 font-semibold"
                                >/ $67.00</del
                              >
                              <span class="ml-6"
                                ><del
                                  class="text-base font-semibold text-secondaryColor3"
                                  >Free</del
                                ></span
                              >
                            </div>
                            <!-- author and rating-->
                            <div
                              class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                            >
                              <div>
                                <a
                                  href="instructor-details.html"
                                  class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                  ><img
                                    class="w-[30px] h-[30px] rounded-full mr-15px"
                                    src="./assets/images/grid/grid_small_1.jpg"
                                    alt=""
                                  >
                                  <span class="flex">Micle john</span>
                                </a>
                              </div>
                              <div class="text-start md:text-end">
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <span class="text-xs text-lightGrey6"
                                  >(44)</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- card 6 -->
                  <div class="swiper-slide">
                    <div class="w-full group grid-item filter1 filter3">
                      <div class="tab-content-wrapper sm:px-15px mb-30px">
                        <div
                          class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                        >
                          <!-- card image -->
                          <div class="relative mb-4">
                            <a
                              href="course.html"
                              class="w-full overflow-hidden rounded"
                            >
                              <img
                                src="./assets/images/grid/kid_6.jpg"
                                alt=""
                                class="w-full transition-all duration-300 group-hover:scale-110"
                              >
                            </a>
                            <div
                              class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                            >
                              <div>
                                <p
                                  class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold"
                                >
                                  Mnided
                                </p>
                              </div>
                              <a
                                class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                href="#"
                                ><i
                                  class="icofont-heart-alt text-base py-1 px-2"
                                ></i
                              ></a>
                            </div>
                          </div>
                          <!-- card content -->
                          <div>
                            <div class="grid grid-cols-2 mb-15px">
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >23 Lesson</span
                                  >
                                </div>
                              </div>
                              <div class="flex items-center">
                                <div>
                                  <i
                                    class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                  ></i>
                                </div>
                                <div>
                                  <span
                                    class="text-sm text-black dark:text-blackColor-dark"
                                    >1 hr 30 min</span
                                  >
                                </div>
                              </div>
                            </div>
                            <a
                              href="course-details.html"
                              class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            >
                              Foundation course to under stand about
                              softwere
                            </a>
                            <!-- price -->
                            <div
                              class="text-lg font-semibold text-primaryColor font-inter mb-4"
                            >
                              $32.00
                              <del
                                class="text-sm text-lightGrey4 font-semibold"
                                >/ $67.00</del
                              >
                              <span class="ml-6"
                                ><del
                                  class="text-base font-semibold text-secondaryColor3"
                                  >Free</del
                                ></span
                              >
                            </div>
                            <!-- author and rating-->
                            <div
                              class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                            >
                              <div>
                                <a
                                  href="instructor-details.html"
                                  class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                  ><img
                                    class="w-[30px] h-[30px] rounded-full mr-15px"
                                    src="./assets/images/grid/grid_small_1.jpg"
                                    alt=""
                                  >
                                  <span class="flex">Micle john</span>
                                </a>
                              </div>
                              <div class="text-start md:text-end">
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <i
                                  class="icofont-star text-size-15 text-yellow"
                                ></i>
                                <span class="text-xs text-lightGrey6"
                                  >(44)</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection



@push('after-script')

@endpush
