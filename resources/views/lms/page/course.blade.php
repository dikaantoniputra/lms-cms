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
              Featured Courses
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
                  >Featured Course</span
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- courses section -->
    <div>
      <div class="container tab py-10 md:py-50px lg:py-60px 2xl:py-100px">
        <!-- courses header -->
        <div
          class="courses-header flex justify-between items-center flex-wrap px-13px py-10px border border-borderColor dark:border-borderColor-dark mb-30px gap-y-5"
          data-aos="fade-up"
        >
          <div>
            <p class="text-blackColor dark:text-blackColor-dark">
              Showing 1–12 of 54 Results
            </p>
          </div>
          <div class="flex items-center">
            <div
              class="tab-links transition-all duraton-300 text-contentColor dark:text-contentColor-dark flex gap-11px"
            >
              <button class="inline-block hover:text-primaryColor active">
                <i class="icofont-layout"></i>
              </button>
              <button class="inline-block hover:text-primaryColor">
                <i class="icofont-listine-dots"></i>
              </button>
            </div>
            <div class="pl-50px sm:pl-20 pr-10px">
              <select
               
                
                class="text-blackColor bg-whiteColor py-3px pr-2 pl-3 rounded-md outline-none border-4 border-transparent focus:border-blue-light box-border"
              >
                <option value="Short by New">Short by New</option>
                <option value="Short by New">Short by New</option>
                <option value="One">One</option>
                <option value="Tow">Tow</option>
                <option value="Three">Three</option>
              </select>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-30px">
          <!-- courses sidebar -->
          <div class="md:col-start-1 md:col-span-4 lg:col-span-3">
            <div class="flex flex-col">
              <!-- search input -->
              <div
                class="pt-30px pr-15px pl-10px pb-23px 2xl:pt-10 2xl:pr-25px 2xl:pl-5 2xl:pb-33px mb-30px border border-borderColor dark:border-borderColor-dark"
                data-aos="fade-up"
              >
                <h4
                  class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold leading-30px mb-25px"
                >
                  Search here
                </h4>
                <form
                  class="w-full px-4 py-15px text-sm text-contentColor bg-lightGrey10 dark:bg-lightGrey10-dark dark:text-contentColor-dark flex justify-center items-center leading-26px"
                >
                  <input
                    type="text"
                    placeholder="Search Produce"
                    class="placeholder:text-placeholder bg-transparent focus:outline-none placeholder:opacity-80 w-full"
                  >
                  <button type="submit">
                    <i class="icofont-search-1 text-base"></i>
                  </button>
                </form>
              </div>
              <!-- categories -->
              <div
                class="pt-30px pr-15px pl-10px pb-23px 2xl:pt-10 2xl:pr-25px 2xl:pl-5 2xl:pb-33px mb-30px border border-borderColor dark:border-borderColor-dark"
                data-aos="fade-up"
              >
                <h4
                  class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold leading-30px mb-25px"
                >
                  categories
                </h4>
                <ul class="flex flex-col gap-y-4">
                  <li
                    class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300"
                  >
                    <a href="#">Mobile Set</a> <a href="#">03</a>
                  </li>
                  <li
                    class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300"
                  >
                    <a href="#">Mobile Set</a> <a href="#">03</a>
                  </li>
                  <li
                    class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300"
                  >
                    <a href="#">Raxila Dish nonyte</a> <a href="#">09</a>
                  </li>
                  <li
                    class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300"
                  >
                    <a href="#">Fresh Vegetable</a> <a href="#">01</a>
                  </li>
                  <li
                    class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300"
                  >
                    <a href="#">Fruites</a> <a href="#">00</a>
                  </li>
                  <li
                    class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300"
                  >
                    <a href="#">Gesuriesey</a> <a href="#">26</a>
                  </li>
                </ul>
              </div>
              <!-- tags -->
              <div
                class="pt-30px pr-15px pl-10px pb-23px 2xl:pt-10 2xl:pr-25px 2xl:pl-5 2xl:pb-33px mb-30px border border-borderColor dark:border-borderColor-dark"
                data-aos="fade-up"
              >
                <h4
                  class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold leading-30px mb-25px"
                >
                  Tag
                </h4>
                <ul class="flex flex-col gap-y-23px">
                  <li
                    class="text-primaryColor text-size-15 font-medium dark:text-contentColor-dark flex justify-between leading-26px group"
                  >
                    <a href="#" class="w-full flex items-center gap-11px"
                      ><span
                        class="w-14px h-15px border border-primaryColor bg-primaryColor group-hover:border-primaryColor group-hover:bg-primaryColor"
                      ></span>
                      <span>Mechanic</span></a
                    >
                  </li>
                  <li
                    class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:hover:text-primaryColor dark:text-contentColor-dark flex justify-between leading-26px group"
                  >
                    <a href="#" class="w-full flex items-center gap-11px"
                      ><span
                        class="w-14px h-15px border border-darkdeep6 group-hover:border-primaryColor group-hover:bg-primaryColor"
                      ></span>
                      <span>English</span></a
                    >
                  </li>
                  <li
                    class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:hover:text-primaryColor dark:text-contentColor-dark flex justify-between leading-26px group"
                  >
                    <a href="#" class="w-full flex items-center gap-11px"
                      ><span
                        class="w-14px h-15px border border-darkdeep6 group-hover:border-primaryColor group-hover:bg-primaryColor"
                      ></span>
                      <span>Computer Science</span></a
                    >
                  </li>
                  <li
                    class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:hover:text-primaryColor dark:text-contentColor-dark flex justify-between leading-26px group"
                  >
                    <a href="#" class="w-full flex items-center gap-11px"
                      ><span
                        class="w-14px h-15px border border-darkdeep6 group-hover:border-primaryColor group-hover:bg-primaryColor"
                      ></span>
                      <span>Data & Tech</span></a
                    >
                  </li>
                  <li
                    class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:hover:text-primaryColor dark:text-contentColor-dark flex justify-between leading-26px group"
                  >
                    <a href="#" class="w-full flex items-center gap-11px"
                      ><span
                        class="w-14px h-15px border border-darkdeep6 group-hover:border-primaryColor group-hover:bg-primaryColor"
                      ></span>
                      <span>Ux Desgin</span></a
                    >
                  </li>
                </ul>
              </div>
              <!-- skills -->
              <div
                class="pt-30px pr-15px pl-10px pb-23px 2xl:pt-10 2xl:pr-25px 2xl:pl-5 2xl:pb-33px mb-30px border border-borderColor dark:border-borderColor-dark"
                data-aos="fade-up"
              >
                <h4
                  class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold leading-30px mb-25px"
                >
                  Skill Level
                </h4>
                <ul class="flex flex-col gap-y-10px">
                  <li
                    class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:text-contentColor-darkdark:hover:text-primaryColor flex justify-between leading-26px"
                  >
                    <a href="#" class="w-full"> All </a>
                  </li>
                  <li
                    class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:text-contentColor-darkdark:hover:text-primaryColor flex justify-between leading-26px"
                  >
                    <a href="#" class="w-full"> Fullstack </a>
                  </li>
                  <li
                    class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:text-contentColor-darkdark:hover:text-primaryColor flex justify-between leading-26px"
                  >
                    <a href="#" class="w-full"> English Learn </a>
                  </li>
                  <li
                    class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:text-contentColor-darkdark:hover:text-primaryColor flex justify-between leading-26px"
                  >
                    <a href="#" class="w-full"> Intermediate </a>
                  </li>
                  <li
                    class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:text-contentColor-darkdark:hover:text-primaryColor flex justify-between leading-26px"
                  >
                    <a href="#" class="w-full"> Wordpress </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- courses main -->
          <div
            class="md:col-start-5 md:col-span-8 lg:col-start-4 lg:col-span-9 space-y-[30px]"
          >
            <div class="tab-contents">
              <!-- grid ordered cards -->
              <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-30px"
              >
                <!-- card 1 -->
                <div class="group">
                  <div class="tab-content-wrapper" data-aos="fade-up">
                    <div
                      class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                    >
                      <!-- card image -->
                      <div class="relative mb-4">
                        <a
                          href="course-details.html"
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
                              Data &amp; Tech
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
                          class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                        >
                          Foundation course to under stand about softwere
                        </a>
                        <!-- price -->
                        <div
                          class="text-lg font-semibold text-primaryColor font-inter mb-4"
                        >
                          $32.00
                          <del class="text-sm text-lightGrey4 font-semibold"
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
                            <span class="text-xs text-lightGrey6">(44)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- card 2 -->
                <div class="group">
                  <div class="tab-content-wrapper" data-aos="fade-up">
                    <div
                      class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                    >
                      <!-- card image -->
                      <div class="relative mb-4">
                        <a
                          href="course-details.html"
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
                              class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold"
                            >
                              Mechanical
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
                                >29 Lesson</span
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
                                >2 hr 10 min</span
                              >
                            </div>
                          </div>
                        </div>
                        <a
                          href="course-details.html"
                          class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                        >
                          Nidnies course to under stand about softwere
                        </a>
                        <!-- price -->
                        <div
                          class="text-lg font-semibold text-primaryColor font-inter mb-4"
                        >
                          $32.00
                          <del class="text-sm text-lightGrey4 font-semibold"
                            >/ $67.00</del
                          >
                          <span class="ml-6"
                            ><del
                              class="text-base font-semibold text-greencolor"
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
                                src="./assets/images/grid/grid_small_2.jpg"
                                alt=""
                              >Rinis Jhon
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
                            <span class="text-xs text-lightGrey6">(44)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- card 3 -->
                <div class="group">
                  <div class="tab-content-wrapper" data-aos="fade-up">
                    <div
                      class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                    >
                      <!-- card image -->
                      <div class="relative mb-4">
                        <a
                          href="course-details.html"
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
                              class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold"
                            >
                              Development
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
                              >
                                25 Lesson</span
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
                              >
                                1 hr 40 min</span
                              >
                            </div>
                          </div>
                        </div>
                        <a
                          href="course-details.html"
                          class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                        >
                          Minws course to under stand about solution
                        </a>
                        <!-- price -->
                        <div
                          class="text-lg font-semibold text-primaryColor font-inter mb-4"
                        >
                          $40.00
                          <del class="text-sm text-lightGrey4 font-semibold"
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
                                src="./assets/images/grid/grid_small_3.jpg"
                                alt=""
                              >Micle John
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
                            <span class="text-xs text-lightGrey6">(44)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- card 4 -->
                <div class="group">
                  <div class="tab-content-wrapper" data-aos="fade-up">
                    <div
                      class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                    >
                      <!-- card image -->
                      <div class="relative mb-4">
                        <a
                          href="course-details.html"
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
                              Ui &amp; UX Design
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
                              >
                                36 Lesson</span
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
                                >3 hr 40 min</span
                              >
                            </div>
                          </div>
                        </div>
                        <a
                          href="course-details.html"
                          class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                        >
                          Design course to under stand about solution
                        </a>
                        <!-- price -->
                        <div
                          class="text-lg font-semibold text-primaryColor font-inter mb-4"
                        >
                          $40.00
                          <del class="text-sm text-lightGrey4 font-semibold"
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
                                src="./assets/images/grid/grid_small_4.jpg"
                                alt=""
                              >
                              <span class="flex flex-shrink-0"
                                >Micle Robin</span
                              >
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
                            <span class="text-xs text-lightGrey6">(44)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- card 5 -->
                <div class="group">
                  <div class="tab-content-wrapper" data-aos="fade-up">
                    <div
                      class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                    >
                      <!-- card image -->
                      <div class="relative mb-4">
                        <a
                          href="course-details.html"
                          class="w-full overflow-hidden rounded"
                        >
                          <img
                            src="./assets/images/grid/grid_5.png"
                            alt=""
                            class="w-full transition-all duration-300 group-hover:scale-110"
                          >
                        </a>
                        <div
                          class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                        >
                          <div>
                            <p
                              class="text-xs text-whiteColor px-4 py-[3px] bg-orange rounded font-semibold"
                            >
                              Data &amp; Tech
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
                                >36 Lesson</span
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
                                >3 hr 40 min</span
                              >
                            </div>
                          </div>
                        </div>
                        <a
                          href="course-details.html"
                          class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                        >
                          Data course to under stand about solution
                        </a>
                        <!-- price -->
                        <div
                          class="text-lg font-semibold text-primaryColor font-inter mb-4"
                        >
                          $40.00
                          <del class="text-sm text-lightGrey4 font-semibold"
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
                              <span class="flex flex-shrink-0"
                                >Micle Robin</span
                              >
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
                            <span class="text-xs text-lightGrey6">(44)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- card 6 -->
                <div class="group">
                  <div class="tab-content-wrapper" data-aos="fade-up">
                    <div
                      class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                    >
                      <!-- card image -->
                      <div class="relative mb-4">
                        <a
                          href="course-details.html"
                          class="w-full overflow-hidden rounded"
                        >
                          <img
                            src="./assets/images/grid/grid_6.png"
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
                              Big Data
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
                              >
                                30 Lesson</span
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
                                >3 hr 40 min</span
                              >
                            </div>
                          </div>
                        </div>
                        <a
                          href="course-details.html"
                          class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                        >
                          Big data to under stand about solution pacage
                        </a>
                        <!-- price -->
                        <div
                          class="text-lg font-semibold text-primaryColor font-inter mb-4"
                        >
                          $40.00
                          <del class="text-sm text-lightGrey4 font-semibold"
                            >/ $67.00</del
                          >
                          <span class="ml-6"
                            ><del
                              class="text-base font-semibold text-secondaryColor3"
                            >
                              Free</del
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
                              <span class="flex flex-shrink-0"
                                >Micle Robin</span
                              >
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
                            <span class="text-xs text-lightGrey6">(44)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- card 7 -->
                <div class="group">
                  <div class="tab-content-wrapper" data-aos="fade-up">
                    <div
                      class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                    >
                      <!-- card image -->
                      <div class="relative mb-4">
                        <a
                          href="course-details.html"
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
                              Data &amp; Tech
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
                          class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                        >
                          Foundation course to under stand about softwere
                        </a>
                        <!-- price -->
                        <div
                          class="text-lg font-semibold text-primaryColor font-inter mb-4"
                        >
                          $32.00
                          <del class="text-sm text-lightGrey4 font-semibold"
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
                            <span class="text-xs text-lightGrey6">(44)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- card 8 -->
                <div class="group">
                  <div class="tab-content-wrapper" data-aos="fade-up">
                    <div
                      class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                    >
                      <!-- card image -->
                      <div class="relative mb-4">
                        <a
                          href="course-details.html"
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
                              class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold"
                            >
                              Mechanical
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
                                >29 Lesson</span
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
                                >2 hr 10 min</span
                              >
                            </div>
                          </div>
                        </div>
                        <a
                          href="course-details.html"
                          class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                        >
                          Nidnies course to under stand about softwere
                        </a>
                        <!-- price -->
                        <div
                          class="text-lg font-semibold text-primaryColor font-inter mb-4"
                        >
                          $32.00
                          <del class="text-sm text-lightGrey4 font-semibold"
                            >/ $67.00</del
                          >
                          <span class="ml-6"
                            ><del
                              class="text-base font-semibold text-greencolor"
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
                                src="./assets/images/grid/grid_small_2.jpg"
                                alt=""
                              >Rinis Jhon
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
                            <span class="text-xs text-lightGrey6">(44)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- card 9 -->
                <div class="group">
                  <div class="tab-content-wrapper" data-aos="fade-up">
                    <div
                      class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                    >
                      <!-- card image -->
                      <div class="relative mb-4">
                        <a
                          href="course-details.html"
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
                              class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold"
                            >
                              Development
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
                              >
                                25 Lesson</span
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
                              >
                                1 hr 40 min</span
                              >
                            </div>
                          </div>
                        </div>
                        <a
                          href="course-details.html"
                          class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                        >
                          Minws course to under stand about solution
                        </a>
                        <!-- price -->
                        <div
                          class="text-lg font-semibold text-primaryColor font-inter mb-4"
                        >
                          $40.00
                          <del class="text-sm text-lightGrey4 font-semibold"
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
                                src="./assets/images/grid/grid_small_3.jpg"
                                alt=""
                              >Micle John
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
                            <span class="text-xs text-lightGrey6">(44)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- list ordered cards -->
              <div class="hidden opacity-0 transition-all duration-300">
                <div class="flex flex-col gap-30px">
                  <!-- card 1 -->
                  <div class="w-full group grid-item rounded">
                    <div class="tab-content-wrapper" data-aos="fade-up">
                      <div
                        class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded"
                      >
                        <!-- card image -->
                        <div class="relative overflow-hidden w-full md:w-2/5">
                          <a
                            href="course-details.html"
                            class="w-full overflow-hidden rounded"
                          >
                            <img
                              src="./assets/images/grid/grid_1.png"
                              alt=""
                              class="w-full transition-all duration-300 group-hover:scale-110 block"
                            >
                          </a>

                          <div
                            class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                          >
                            <div>
                              <p
                                class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold capitalize"
                              >
                                Data &amp; Tech
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
                        <div class="w-full md:w-3/5">
                          <div class="pl-0 lg:pl-30px">
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
                              class="text-size-26 leading-30px font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            >
                              Become a product Manager learn the skills &amp;
                              job.
                            </a>
                            <!-- price -->
                            <div
                              class="text-lg font-semibold text-black-brerry-light font-inter mb-4"
                            >
                              $32.00
                              <del
                                class="text-sm text-lightGrey4 font-semibold"
                                >/ $67.00</del
                              >
                              <span
                                class="ml-6 text-base font-semibold text-greencolor2"
                                >Free.</span
                              >
                            </div>
                            <!-- bottom -->
                            <div
                              class="flex flex-wrap justify-between sm:flex-nowrap items-center gap-y-2 pt-15px border-t border-borderColor"
                            >
                              <!-- author and rating-->
                              <div class="flex items-center flex-wrap">
                                <div>
                                  <a
                                    href="instructor-details.html"
                                    class="text-sm font-medium font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                    ><img
                                      class="w-[30px] h-[30px] rounded-full mr-15px"
                                      src="./assets/images/grid/grid_small_1.jpg"
                                      alt=""
                                    >
                                    <span class="flex">Micle john</span>
                                  </a>
                                </div>
                                <div class="text-start md:text-end ml-35px">
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

                              <div>
                                <a
                                  class="text-sm lg:text-base text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                  href="course-details.html"
                                  >Know Details
                                  <i class="icofont-arrow-right"></i
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- card 2 -->
                  <div class="w-full group grid-item rounded">
                    <div class="tab-content-wrapper" data-aos="fade-up">
                      <div
                        class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded"
                      >
                        <!-- card image -->
                        <div class="relative overflow-hidden w-full md:w-2/5">
                          <a
                            href="course-details.html"
                            class="w-full overflow-hidden rounded"
                          >
                            <img
                              src="./assets/images/grid/grid_3.png"
                              alt=""
                              class="w-full transition-all duration-300 group-hover:scale-110 block"
                            >
                          </a>
                          <div
                            class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                          >
                            <div>
                              <p
                                class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold capitalize"
                              >
                                gridDevelopment
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
                        <div class="w-full md:w-3/5">
                          <div class="pl-0 lg:pl-30px">
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
                              class="text-size-26 leading-30px font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            >
                              Strategy law and with for organization
                              Foundation
                            </a>
                            <!-- price -->
                            <div
                              class="text-lg font-semibold text-black-brerry-light font-inter mb-4"
                            >
                              $32.00
                              <del
                                class="text-sm text-lightGrey4 font-semibold"
                                >/ $67.00</del
                              >
                              <span
                                class="ml-6 text-base font-semibold text-greencolor2"
                                >Free.</span
                              >
                            </div>
                            <!-- bottom -->
                            <div
                              class="flex flex-wrap justify-between sm:flex-nowrap items-center gap-y-2 pt-15px border-t border-borderColor"
                            >
                              <!-- author and rating-->
                              <div class="flex items-center flex-wrap">
                                <div>
                                  <a
                                    href="instructor-details.html"
                                    class="text-sm font-medium font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                    ><img
                                      class="w-[30px] h-[30px] rounded-full mr-15px"
                                      src="./assets/images/grid/grid_small_1.jpg"
                                      alt=""
                                    >
                                    <span class="flex">Micle john</span>
                                  </a>
                                </div>
                                <div class="text-start md:text-end ml-35px">
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

                              <div>
                                <a
                                  class="text-sm lg:text-base text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                  href="course-details.html"
                                  >Know Details
                                  <i class="icofont-arrow-right"></i
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- card 3 -->
                  <div class="w-full group grid-item rounded">
                    <div class="tab-content-wrapper" data-aos="fade-up">
                      <div
                        class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded"
                      >
                        <!-- card image -->
                        <div class="relative overflow-hidden w-full md:w-2/5">
                          <a
                            href="course.html"
                            class="w-full overflow-hidden"
                          >
                            <img
                              src="./assets/images/grid/grid_2.png"
                              alt=""
                              class="w-full transition-all duration-300 group-hover:scale-110 block"
                            >
                          </a>
                          <div
                            class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                          >
                            <div>
                              <p
                                class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold capitalize"
                              >
                                gridMechanical
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
                        <div class="w-full md:w-3/5">
                          <div class="pl-0 lg:pl-30px">
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
                              class="text-size-26 leading-30px font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            >
                              Foundation course to under stand about softwere
                            </a>
                            <!-- price -->
                            <div
                              class="text-lg font-semibold text-black-brerry-light font-inter mb-4"
                            >
                              $32.00
                              <del
                                class="text-sm text-lightGrey4 font-semibold"
                                >/ $67.00</del
                              >
                              <span
                                class="ml-6 text-base font-semibold text-greencolor2"
                                >Free.</span
                              >
                            </div>
                            <!-- bottom -->
                            <div
                              class="flex flex-wrap justify-between sm:flex-nowrap items-center gap-y-2 pt-15px border-t border-borderColor"
                            >
                              <!-- author and rating-->
                              <div class="flex items-center flex-wrap">
                                <div>
                                  <a
                                    href="instructor-details.html"
                                    class="text-sm font-medium font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                    ><img
                                      class="w-[30px] h-[30px] rounded-full mr-15px"
                                      src="./assets/images/grid/grid_small_1.jpg"
                                      alt=""
                                    >
                                    <span class="flex">Micle john</span>
                                  </a>
                                </div>
                                <div class="text-start md:text-end ml-35px">
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

                              <div>
                                <a
                                  class="text-sm lg:text-base text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                  href="course-details.html"
                                  >Know Details
                                  <i class="icofont-arrow-right"></i
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- card 4 -->
                  <div class="w-full group grid-item rounded">
                    <div class="tab-content-wrapper" data-aos="fade-up">
                      <div
                        class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded"
                      >
                        <!-- card image -->
                        <div class="relative overflow-hidden w-full md:w-2/5">
                          <a
                            href="course-details.html"
                            class="w-full overflow-hidden rounded"
                          >
                            <img
                              src="./assets/images/grid/grid_4.png"
                              alt=""
                              class="w-full transition-all duration-300 group-hover:scale-110 block"
                            >
                          </a>
                          <div
                            class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                          >
                            <div>
                              <p
                                class="text-xs text-whiteColor px-4 py-[3px] bg-greencolor2 rounded font-semibold capitalize"
                              >
                                Ui & UX Design
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
                        <div class="w-full md:w-3/5">
                          <div class="pl-0 lg:pl-30px">
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
                              class="text-size-26 leading-30px font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            >
                              The business Intelligence analyst with Course &
                              2024
                            </a>
                            <!-- price -->
                            <div
                              class="text-lg font-semibold text-black-brerry-light font-inter mb-4"
                            >
                              $32.00
                              <del
                                class="text-sm text-lightGrey4 font-semibold"
                                >/ $67.00</del
                              >
                              <span
                                class="ml-6 text-base font-semibold text-greencolor2"
                                >Free.</span
                              >
                            </div>
                            <!-- bottom -->
                            <div
                              class="flex flex-wrap justify-between sm:flex-nowrap items-center gap-y-2 pt-15px border-t border-borderColor"
                            >
                              <!-- author and rating-->
                              <div class="flex items-center flex-wrap">
                                <div>
                                  <a
                                    href="instructor-details.html"
                                    class="text-sm font-medium font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                    ><img
                                      class="w-[30px] h-[30px] rounded-full mr-15px"
                                      src="./assets/images/grid/grid_small_1.jpg"
                                      alt=""
                                    >
                                    <span class="flex">Micle john</span>
                                  </a>
                                </div>
                                <div class="text-start md:text-end ml-35px">
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

                              <div>
                                <a
                                  class="text-sm lg:text-base text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                  href="course-details.html"
                                  >Know Details
                                  <i class="icofont-arrow-right"></i
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- card 5 -->
                  <div class="w-full group grid-item rounded">
                    <div class="tab-content-wrapper" data-aos="fade-up">
                      <div
                        class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded"
                      >
                        <!-- card image -->
                        <div class="relative overflow-hidden w-full md:w-2/5">
                          <a
                            href="course.html"
                            class="w-full overflow-hidden"
                          >
                            <img
                              src="./assets/images/grid/grid_5.png"
                              alt=""
                              class="w-full transition-all duration-300 group-hover:scale-110 block"
                            >
                          </a>
                          <div
                            class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                          >
                            <div>
                              <p
                                class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold capitalize"
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
                        <div class="w-full md:w-3/5">
                          <div class="pl-0 lg:pl-30px">
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
                              class="text-size-26 leading-30px font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                            >
                              Become a product Manager learn the skills & job.
                            </a>
                            <!-- price -->
                            <div
                              class="text-lg font-semibold text-black-brerry-light font-inter mb-4"
                            >
                              $32.00
                              <del
                                class="text-sm text-lightGrey4 font-semibold"
                                >/ $67.00</del
                              >
                              <span
                                class="ml-6 text-base font-semibold text-greencolor2"
                                >Free.</span
                              >
                            </div>
                            <!-- bottom -->
                            <div
                              class="flex flex-wrap justify-between sm:flex-nowrap items-center gap-y-2 pt-15px border-t border-borderColor"
                            >
                              <!-- author and rating-->
                              <div class="flex items-center flex-wrap">
                                <div>
                                  <a
                                    href="instructor-details.html"
                                    class="text-sm font-medium font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                    ><img
                                      class="w-[30px] h-[30px] rounded-full mr-15px"
                                      src="./assets/images/grid/grid_small_1.jpg"
                                      alt=""
                                    >
                                    <span class="flex">Micle john</span>
                                  </a>
                                </div>
                                <div class="text-start md:text-end ml-35px">
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

                              <div>
                                <a
                                  class="text-sm lg:text-base text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                  href="course-details.html"
                                  >Know Details
                                  <i class="icofont-arrow-right"></i
                                ></a>
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
            <!-- pagination -->
            <div>
              <ul
                class="flex items-center justify-center gap-15px mt-60px mb-30px"
              >
                <li>
                  <a
                    href="#"
                    class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-blackColor2 hover:text-whiteColor bg-whitegrey1 hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor cursor-not-allowed"
                    ><i class="icofont-double-left"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="#"
                    class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-whiteColor hover:text-whiteColor bg-primaryColor hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-primaryColor dark:hover:bg-primaryColor"
                    >1</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-blackColor2 hover:text-whiteColor bg-whitegrey1 hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor"
                    >2</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-blackColor2 hover:text-whiteColor bg-whitegrey1 hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor"
                    >3</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-blackColor2 hover:text-whiteColor bg-whitegrey1 hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor"
                    ><i class="icofont-double-right"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
@endsection

@push('after-script')

@endpush
