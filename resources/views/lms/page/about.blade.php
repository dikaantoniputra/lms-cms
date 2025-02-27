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
              About Page
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
                  >About Page</span
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- about  section -->
    <section>
      <div class="container py-50px md:py-70px lg:py-20 2xl:py-100px">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-30px">
          <!-- about left -->
          <div data-aos="fade-up">
            <div class="tilt relative overflow-hidden z-0">
              <img
                class="absolute left-0 top-0 lg:top-4 right-0 mx-auto -z-1"
                src="./assets/images/about/about_8.png"
                alt=""
              ><img
                class="w-full"
                src="./assets/images/about/about_14.png"
                alt=""
              >
            </div>
          </div>
          <!-- about right -->
          <div data-aos="fade-up" class="2xl:ml-65px">
            <span
              class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
            >
              About Us
            </span>
            <h3
              class="text-3xl md:text-size-45 leading-10 md:leading-2xl font-bold text-blackColor dark:text-blackColor-dark pb-25px"
            >
              Welcome to the online Learning Center
            </h3>
            <p
              class="text-sm md:text-base leading-7 text-contentColor dark:text-contentColor-dark mb-25px"
            >
              Meet my startup design agency Shape Rex Currently I am working
              at CodeNext as Product Designer.
            </p>
            <p
              class="flex items-center gap-x-4 text-lg text-blackColor dark:text-blackColor-dark mb-25px"
            >
              <img
                loading="lazy"
                src="./assets/images/about/about_15.png"
                alt="about"
              >
              <span
                ><b>10+ Years ExperienceIn</b> this game, Means Product
                Designing</span
              >
            </p>
            <p
              class="text-sm md:text-base leading-7 text-contentColor dark:text-contentColor-dark"
            >
              I love to work in User Experience & User Interface designing.
              Because I love to solve the design problem and find easy and
              better solutions to solve it. I always try my best to make good
              user interface with the best user experience. I have been
              working as a UX Designer
            </p>

            <div class="mt-30px">
              <a
                href="#"
                class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-25px py-15px hover:text-primaryColor hover:bg-whiteColor rounded inline-block mr-6px md:mr-30px dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
              >
                About More <i class="icofont-long-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- overview section -->
    <section>
      <div class="container pb-50px md:pb-70px lg:pb-20 2xl:pb-70px">
        <!-- overview tabs -->
        <div data-aos="fade-up" class="tab">
          <div
            class="tab-links flex flex-wrap md:flex-nowrap mb-10px lg:mb-50px rounded gap-10px lg:gap-35px"
          >
            <button
              class="is-checked relative py-10px px-25px md:py-10px md:px-10 lg:py-15px lg:px-60px font-bold uppercase text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 active"
            >
              About
            </button>

            <button
              class="is-checked relative py-10px px-25px md:py-10px md:px-10 lg:py-15px lg:px-60px font-bold uppercase text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300"
            >
              COURSE
            </button>

            <button
              class="is-checked relative py-10px px-25px md:py-10px md:px-10 lg:py-15px lg:px-60px font-bold uppercase text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300"
            >
              AWARDS
            </button>

            <button
              class="is-checked relative py-10px px-25px md:py-10px md:px-10 lg:py-15px lg:px-60px font-bold uppercase text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300"
            >
              EDUCATION
            </button>
          </div>
          <div class="tab-contents">
            <div>
              <p
                class="text-contentColor dark:text-contentColor-dark mb-25px"
              >
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words look even
                slightly believable. If you are going to use a passage of
                Lorem Ipsum, you need to be sure there isn't anything
                embarrassing hidden in the middle of text. Ipsum generators on
                the Internet tend to repeat predefined chunks as necessary,
                making this the first true generator on the Internet. It uses
                a dictionary of over 200 combined with a handful of model
                sentence structures, to generate Lorem Ipsum which looks
                reasonable. The generated Lorem Ipsum is therefore always free
                from characteristic words etc.
              </p>
              <h4
                class="text-xl font-medium text-blackColor dark:text-blackCol font-thinor-dark dark:text-blackColor-dark"
              >
                World best education site - (Computer engeenering)
              </h4>
              <p
                class="text-contentColor dark:text-contentColor-dark mb-25px"
              >
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which dont look
                even slightly believable. If you are going to useery
              </p>
              <h4
                class="text-xl font-medium text-blackColor dark:text-blackCol font-thinor-dark dark:text-blackColor-dark"
              >
                Web and user interface design - Development
              </h4>
              <p
                class="text-contentColor dark:text-contentColor-dark mb-30px"
              >
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which dont look
                even slightly believable. If you are going to useery
              </p>

              <h4
                class="text-xl font-medium text-blackColor dark:text-blackCol font-thinor-dark dark:text-blackColor-dark"
              >
                Interaction design - Animation
              </h4>
              <p
                class="text-contentColor dark:text-contentColor-dark mb-30px"
              >
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which dont look
                even slightly believable. If you are going to useery
              </p>
            </div>

            <div class="hidden">
              <div class="flex flex-col gap-30px">
                <!-- card 1 -->
                <div class="w-full group grid-item rounded">
                  <div class="tab-content-wrapper">
                    <div
                      class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded"
                    >
                      <!-- card image -->
                      <div class="relative overflow-hidden w-full md:w-2/5">
                        <a href="course.html" class="w-full">
                          <img
                            src="./assets/images/grid/grid_1.png"
                            alt=""
                            class="w-full transition-all duration-300 scale-105 group-hover:scale-110"
                          >
                        </a>
                        <div
                          class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                        >
                          <div>
                            <p
                              class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold capitalize"
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
                        <div class="pl-0 md:pl-5 lg:pl-30px 2xl:pl-90px">
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
                            class="text-xl 2xl:text-size-34 2xl:!leading-9 font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                          >
                            Become a product Manager learn the skills & job.
                          </a>
                          <!-- price -->
                          <div
                            class="text-lg font-semibold text-black-brerry-light font-inter mb-4"
                          >
                            $32.00
                            <del class="text-sm text-lightGrey4 font-semibold"
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
                <!-- card 1 -->
                <div class="w-full group grid-item rounded">
                  <div class="tab-content-wrapper">
                    <div
                      class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded"
                    >
                      <!-- card image -->
                      <div class="relative overflow-hidden w-full md:w-2/5">
                        <a href="course.html" class="w-full">
                          <img
                            src="./assets/images/grid/grid_3.png"
                            alt=""
                            class="w-full transition-all duration-300 scale-105 group-hover:scale-110"
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
                        <div class="pl-0 md:pl-5 lg:pl-30px 2xl:pl-90px">
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
                            class="text-xl 2xl:text-size-34 2xl:!leading-9 font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                          >
                            Strategy law and with for organization Foundation
                          </a>
                          <!-- price -->
                          <div
                            class="text-lg font-semibold text-black-brerry-light font-inter mb-4"
                          >
                            $32.00
                            <del class="text-sm text-lightGrey4 font-semibold"
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
                  <div class="tab-content-wrapper">
                    <div
                      class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded"
                    >
                      <!-- card image -->
                      <div class="relative overflow-hidden w-full md:w-2/5">
                        <a href="course.html" class="w-full">
                          <img
                            src="./assets/images/grid/grid_2.png"
                            alt=""
                            class="w-full transition-all duration-300 scale-105 group-hover:scale-110"
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
                        <div class="pl-0 md:pl-5 lg:pl-30px 2xl:pl-90px">
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
                            class="text-xl 2xl:text-size-34 2xl:!leading-9 font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                          >
                            Foundation course to under stand about softwere
                          </a>
                          <!-- price -->
                          <div
                            class="text-lg font-semibold text-black-brerry-light font-inter mb-4"
                          >
                            $32.00
                            <del class="text-sm text-lightGrey4 font-semibold"
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
            <!-- certifications  -->
            <div class="hidden">
              <div
                class="grid grid-cols-1 lg:grid-cols-2 gap-30px items-center"
              >
                <!-- card 1 -->
                <div
                  class="flex flex-col sm:flex-row gap-x-0 sm:gap-x-10 gap-y-5 sm:gapy-y-0 group p-15px transition-all duration-300 shadow-experience bg-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-whiteColor rounded"
                >
                  <div>
                    <img
                      src="./assets/images/about/award-1.jpg"
                      alt=""
                      class="w-full sm:w-48 md:w-40 lg:w-30 xl:w-148px 2xl:w-130px"
                    >
                  </div>
                  <div>
                    <h4
                      class="transition-all duration-300 text-contentColor group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor-dark"
                    >
                      <a
                        href="event-details.html"
                        class="text-size-15 md:text-lg lg:text-xl 2xl:text-2xl font-semibold hover:text-secondaryColor mr-0 2xl:mr-10 mb-15px"
                        >Forging relationships between national</a
                      >
                    </h4>
                    <div
                      class="transition-all duration-300 text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor-dark"
                    >
                      <a
                        href="event-details.html"
                        class="hover:text-secondaryColor"
                        >Read More <i class="icofont-simple-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- card 2 -->
                <div
                  class="flex flex-col sm:flex-row gap-x-0 sm:gap-x-10 gap-y-5 sm:gapy-y-0 group p-15px transition-all duration-300 shadow-experience bg-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-whiteColor rounded"
                >
                  <div>
                    <img
                      src="./assets/images/about/award-2.jpg"
                      alt=""
                      class="w-full sm:w-48 md:w-40 lg:w-30 xl:w-148px 2xl:w-130px"
                    >
                  </div>
                  <div>
                    <h4
                      class="transition-all duration-300 text-contentColor group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor-dark"
                    >
                      <a
                        href="event-details.html"
                        class="text-size-15 md:text-lg lg:text-xl 2xl:text-2xl font-semibold hover:text-secondaryColor mr-0 2xl:mr-10 mb-15px"
                        >Lorem ipsum dolor sit amet conse ctetur.</a
                      >
                    </h4>
                    <div
                      class="transition-all duration-300 text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor-dark"
                    >
                      <a
                        href="event-details.html"
                        class="hover:text-secondaryColor"
                        >Read More <i class="icofont-simple-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- card 3 -->
                <div
                  class="flex flex-col sm:flex-row gap-x-0 sm:gap-x-10 gap-y-5 sm:gapy-y-0 group p-15px transition-all duration-300 shadow-experience bg-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-whiteColor rounded"
                >
                  <div>
                    <img
                      src="./assets/images/about/award-3.jpg"
                      alt=""
                      class="w-full sm:w-48 md:w-40 lg:w-30 xl:w-148px 2xl:w-130px"
                    >
                  </div>
                  <div>
                    <h4
                      class="transition-all duration-300 text-contentColor group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor-dark"
                    >
                      <a
                        href="event-details.html"
                        class="text-size-15 md:text-lg lg:text-xl 2xl:text-2xl font-semibold hover:text-secondaryColor mr-0 2xl:mr-10 mb-15px"
                        >Forging relationships between national</a
                      >
                    </h4>
                    <div
                      class="transition-all duration-300 text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor-dark"
                    >
                      <a
                        href="event-details.html"
                        class="hover:text-secondaryColor"
                        >Read More <i class="icofont-simple-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- card 4 -->
                <div
                  class="flex flex-col sm:flex-row gap-x-0 sm:gap-x-10 gap-y-5 sm:gapy-y-0 group p-15px transition-all duration-300 shadow-experience bg-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-whiteColor rounded"
                >
                  <div>
                    <img
                      src="./assets/images/about/award-4.jpg"
                      alt=""
                      class="w-full sm:w-48 md:w-40 lg:w-30 xl:w-148px 2xl:w-130px"
                    >
                  </div>
                  <div>
                    <h4
                      class="transition-all duration-300 text-contentColor group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor-dark"
                    >
                      <a
                        href="event-details.html"
                        class="text-size-15 md:text-lg lg:text-xl 2xl:text-2xl font-semibold hover:text-secondaryColor mr-0 2xl:mr-10 mb-15px"
                      >
                        Lorem ipsum dolor sit amet conse ctetur.</a
                      >
                    </h4>
                    <div
                      class="transition-all duration-300 text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor-dark"
                    >
                      <a
                        href="event-details.html"
                        class="hover:text-secondaryColor"
                        >Read More <i class="icofont-simple-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hidden">
              <p
                class="text-contentColor dark:text-contentColor-dark mb-25px"
              ></p>
              <h4
                class="text-xl font-medium text-blackColor dark:text-blackCol font-thinor-dark dark:text-blackColor-dark"
              >
                World best education site - (Computer engeenering)
              </h4>
              <p
                class="text-contentColor dark:text-contentColor-dark mb-25px"
              >
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which dont look
                even slightly believable. If you are going to useery
              </p>
              <h4
                class="text-xl font-medium text-blackColor dark:text-blackCol font-thinor-dark dark:text-blackColor-dark"
              >
                Web and user interface design - Development
              </h4>
              <p
                class="text-contentColor dark:text-contentColor-dark mb-30px"
              >
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which dont look
                even slightly believable. If you are going to useery
              </p>

              <h4
                class="text-xl font-medium text-blackColor dark:text-blackCol font-thinor-dark dark:text-blackColor-dark"
              >
                Interaction design - Animation
              </h4>
              <p
                class="text-contentColor dark:text-contentColor-dark mb-30px"
              >
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which dont look
                even slightly believable. If you are going to useery
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- featured section -->
    <section>
      <div class="pb-100px">
        <div class="container">
          <!-- heading -->
          <div data-aos="fade-up">
            <span
              class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
            >
              Popular Courses
            </span>
            <h3
              class="text-3xl md:text-[35px] lg:text-size-42 leading-[45px] 2xl:leading-[45px] md:leading-[50px] font-bold mb-5 md:mb-10 text-blackColor dark:text-blackColor-dark"
                data-aos="fade-up"
            >
              Choose The Best Package <br >
              For your Learning
            </h3>
          </div>

          <!-- featured cards -->

          <div data-aos="fade-up" class="sm:-mx-15px">
            <!-- Swiper -->
            <div class="swiper featured-courses1">
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
                              src="./assets/images/grid/grid_7.png"
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
                              src="./assets/images/grid/grid_8.png"
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
                              src="./assets/images/grid/grid_9.png"
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
                              src="./assets/images/grid/grid_7.png"
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
                              src="./assets/images/grid/grid_8.png"
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
                              src="./assets/images/grid/grid_9.png"
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
                              src="./assets/images/grid/grid_8.png"
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
                              src="./assets/images/grid/grid_9.png"
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
                              src="./assets/images/grid/grid_7.png"
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
                              src="./assets/images/grid/grid_8.png"
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
                              src="./assets/images/grid/grid_9.png"
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
    </section>
    <!-- Testimonial Section-->
    <section
      class="bg-lightGrey10 dark:bg-lightGrey10-dark relative py-50px md:py-70px lg:py-20 2xl:pt-100px 2xl:pb-110px"
    >
      <div class="container">
        <!-- courses Heading -->
        <div class="mb-5 md:mb-10" data-aos="fade-up">
          <div class="text-center">
            <span
              class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
            >
              Course List
            </span>
          </div>

          <h3
            class="text-3xl md:text-[35px] lg:text-size-38 3xl:text-size-42 leading-10 mf:leading-45px 2xl:leading-50px 3xl:leading-2xl font-bold text-blackColor dark:text-blackColor-dark text-center"
          >
            Client
            <span
              class="relative after:w-full after:h-[7px] z-0 after:bg-secondaryColor after:absolute after:left-0 after:bottom-3 md:after:bottom-5 after:z-[-1]"
              >Testimonial</span
            >
          </h3>
        </div>
        <!-- testimonial slider -->
        <div
          class="testimonial -mx-15px relative bg-lightGrey10 dark:bg-lightGrey10-dark"
          data-aos="fade-up"
        >
          <!-- Swiper -->
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <!-- testimonial 1 -->
              <div class="swiper-slide px-15px">
                <div
                  class="p-5 md:p-10 md:pr-50px md:pb-50px bg-whiteColor dark:bg-whiteColor-dark rounded"
                >
                  <div
                    class="flex justify-between items-center mb-15px lg:mb-30px"
                  >
                    <div class="flex items-center gap-5">
                      <div>
                        <img
                          src="./assets/images/testimonial/testi_1.png"
                          alt=""
                          class="w-58px h-58px rounded-full"
                        >
                      </div>

                      <div>
                        <h5
                          class="text-lg md:text-size-22 text-blackColor dark:text-blackColor-dark font-semibold pb-1"
                        >
                          Mirnsdo Jons
                        </h5>
                        <p class="text-sm text-lightGrey9">Ui/Ux Designer</p>
                      </div>
                    </div>
                    <div class="space-x-1">
                      <i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-lightGrey6"
                      ></i>
                    </div>
                  </div>
                  <div>
                    <p class="text-contentColor dark:text-contentColor-dark">
                      The other hand we denounce with righteou indg ation men
                      who are so beguiled and demoraliz ed by the of the mo
                      ment.Dislike men who are so beguiled and dems ed by the
                      charms of pleas ure of the moment. Lorem
                    </p>
                  </div>
                </div>
              </div>
              <!-- testimonial 2 -->
              <div class="swiper-slide px-15px">
                <div
                  class="p-5 md:p-10 md:pr-50px md:pb-50px bg-whiteColor dark:bg-whiteColor-dark rounded"
                >
                  <div
                    class="flex justify-between items-center mb-15px lg:mb-30px"
                  >
                    <div class="flex items-center gap-5">
                      <div>
                        <img
                          src="./assets/images/testimonial/testi_1.png"
                          alt=""
                          class="w-58px h-58px rounded-full"
                        >
                      </div>

                      <div>
                        <h5
                          class="text-lg md:text-size-22 text-blackColor dark:text-blackColor-dark font-semibold pb-1"
                        >
                          Mirnsdo Jons
                        </h5>
                        <p class="text-sm text-lightGrey9">Ui/Ux Designer</p>
                      </div>
                    </div>
                    <div class="space-x-1">
                      <i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-lightGrey6"
                      ></i>
                    </div>
                  </div>
                  <div>
                    <p class="text-contentColor dark:text-contentColor-dark">
                      The other hand we denounce with righteou indg ation men
                      who are so beguiled and demoraliz ed by the of the mo
                      ment.Dislike men who are so beguiled and dems ed by the
                      charms of pleas ure of the moment. Lorem
                    </p>
                  </div>
                </div>
              </div>
              <!-- testimonial 3 -->
              <div class="swiper-slide px-15px">
                <div
                  class="p-5 md:p-10 md:pr-50px md:pb-50px bg-whiteColor dark:bg-whiteColor-dark rounded"
                >
                  <div
                    class="flex justify-between items-center mb-15px lg:mb-30px"
                  >
                    <div class="flex items-center gap-5">
                      <div>
                        <img
                          src="./assets/images/testimonial/testi_1.png"
                          alt=""
                          class="w-58px h-58px rounded-full"
                        >
                      </div>

                      <div>
                        <h5
                          class="text-lg md:text-size-22 text-blackColor dark:text-blackColor-dark font-semibold pb-1"
                        >
                          Mirnsdo Jons
                        </h5>
                        <p class="text-sm text-lightGrey9">Ui/Ux Designer</p>
                      </div>
                    </div>
                    <div class="space-x-1">
                      <i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-lightGrey6"
                      ></i>
                    </div>
                  </div>
                  <div>
                    <p class="text-contentColor dark:text-contentColor-dark">
                      The other hand we denounce with righteou indg ation men
                      who are so beguiled and demoraliz ed by the of the mo
                      ment.Dislike men who are so beguiled and dems ed by the
                      charms of pleas ure of the moment. Lorem
                    </p>
                  </div>
                </div>
              </div>
              <!-- testimonial 4 -->
              <div class="swiper-slide px-15px">
                <div
                  class="p-5 md:p-10 md:pr-50px md:pb-50px bg-whiteColor dark:bg-whiteColor-dark rounded"
                >
                  <div
                    class="flex justify-between items-center mb-15px lg:mb-30px"
                  >
                    <div class="flex items-center gap-5">
                      <div>
                        <img
                          src="./assets/images/testimonial/testi_1.png"
                          alt=""
                          class="w-58px h-58px rounded-full"
                        >
                      </div>

                      <div>
                        <h5
                          class="text-lg md:text-size-22 text-blackColor dark:text-blackColor-dark font-semibold pb-1"
                        >
                          Mirnsdo Jons
                        </h5>
                        <p class="text-sm text-lightGrey9">Ui/Ux Designer</p>
                      </div>
                    </div>
                    <div class="space-x-1">
                      <i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-lightGrey6"
                      ></i>
                    </div>
                  </div>
                  <div>
                    <p class="text-contentColor dark:text-contentColor-dark">
                      The other hand we denounce with righteou indg ation men
                      who are so beguiled and demoraliz ed by the of the mo
                      ment.Dislike men who are so beguiled and dems ed by the
                      charms of pleas ure of the moment. Lorem
                    </p>
                  </div>
                </div>
              </div>
              <!-- testimonial 5 -->
              <div class="swiper-slide px-15px">
                <div
                  class="p-5 md:p-10 md:pr-50px md:pb-50px bg-whiteColor dark:bg-whiteColor-dark rounded"
                >
                  <div
                    class="flex justify-between items-center mb-15px lg:mb-30px"
                  >
                    <div class="flex items-center gap-5">
                      <div>
                        <img
                          src="./assets/images/testimonial/testi_1.png"
                          alt=""
                          class="w-58px h-58px rounded-full"
                        >
                      </div>

                      <div>
                        <h5
                          class="text-lg md:text-size-22 text-blackColor dark:text-blackColor-dark font-semibold pb-1"
                        >
                          Mirnsdo Jons
                        </h5>
                        <p class="text-sm text-lightGrey9">Ui/Ux Designer</p>
                      </div>
                    </div>
                    <div class="space-x-1">
                      <i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-lightGrey6"
                      ></i>
                    </div>
                  </div>
                  <div>
                    <p class="text-contentColor dark:text-contentColor-dark">
                      The other hand we denounce with righteou indg ation men
                      who are so beguiled and demoraliz ed by the of the mo
                      ment.Dislike men who are so beguiled and dems ed by the
                      charms of pleas ure of the moment. Lorem
                    </p>
                  </div>
                </div>
              </div>
              <!-- testimonial 6 -->
              <div class="swiper-slide px-15px">
                <div
                  class="p-5 md:p-10 md:pr-50px md:pb-50px bg-whiteColor dark:bg-whiteColor-dark rounded"
                >
                  <div
                    class="flex justify-between items-center mb-15px lg:mb-30px"
                  >
                    <div class="flex items-center gap-5">
                      <div>
                        <img
                          src="./assets/images/testimonial/testi_1.png"
                          alt=""
                          class="w-58px h-58px rounded-full"
                        >
                      </div>

                      <div>
                        <h5
                          class="text-lg md:text-size-22 text-blackColor dark:text-blackColor-dark font-semibold pb-1"
                        >
                          Mirnsdo Jons
                        </h5>
                        <p class="text-sm text-lightGrey9">Ui/Ux Designer</p>
                      </div>
                    </div>
                    <div class="space-x-1">
                      <i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-lightGrey6"
                      ></i>
                    </div>
                  </div>
                  <div>
                    <p class="text-contentColor dark:text-contentColor-dark">
                      The other hand we denounce with righteou indg ation men
                      who are so beguiled and demoraliz ed by the of the mo
                      ment.Dislike men who are so beguiled and dems ed by the
                      charms of pleas ure of the moment. Lorem
                    </p>
                  </div>
                </div>
              </div>
              <!-- testimonial 7 -->
              <div class="swiper-slide px-15px">
                <div
                  class="p-5 md:p-10 md:pr-50px md:pb-50px bg-whiteColor dark:bg-whiteColor-dark rounded"
                >
                  <div
                    class="flex justify-between items-center mb-15px lg:mb-30px"
                  >
                    <div class="flex items-center gap-5">
                      <div>
                        <img
                          src="./assets/images/testimonial/testi_1.png"
                          alt=""
                          class="w-58px h-58px rounded-full"
                        >
                      </div>

                      <div>
                        <h5
                          class="text-lg md:text-size-22 text-blackColor dark:text-blackColor-dark font-semibold pb-1"
                        >
                          Mirnsdo Jons
                        </h5>
                        <p class="text-sm text-lightGrey9">Ui/Ux Designer</p>
                      </div>
                    </div>
                    <div class="space-x-1">
                      <i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-lightGrey6"
                      ></i>
                    </div>
                  </div>
                  <div>
                    <p class="text-contentColor dark:text-contentColor-dark">
                      The other hand we denounce with righteou indg ation men
                      who are so beguiled and demoraliz ed by the of the mo
                      ment.Dislike men who are so beguiled and dems ed by the
                      charms of pleas ure of the moment. Lorem
                    </p>
                  </div>
                </div>
              </div>
              <!-- testimonial 8 -->
              <div class="swiper-slide px-15px">
                <div
                  class="p-5 md:p-10 md:pr-50px md:pb-50px bg-whiteColor dark:bg-whiteColor-dark rounded"
                >
                  <div
                    class="flex justify-between items-center mb-15px lg:mb-30px"
                  >
                    <div class="flex items-center gap-5">
                      <div>
                        <img
                          src="./assets/images/testimonial/testi_1.png"
                          alt=""
                          class="w-58px h-58px rounded-full"
                        >
                      </div>

                      <div>
                        <h5
                          class="text-lg md:text-size-22 text-blackColor dark:text-blackColor-dark font-semibold pb-1"
                        >
                          Mirnsdo Jons
                        </h5>
                        <p class="text-sm text-lightGrey9">Ui/Ux Designer</p>
                      </div>
                    </div>
                    <div class="space-x-1">
                      <i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-lightGrey6"
                      ></i>
                    </div>
                  </div>
                  <div>
                    <p class="text-contentColor dark:text-contentColor-dark">
                      The other hand we denounce with righteou indg ation men
                      who are so beguiled and demoraliz ed by the of the mo
                      ment.Dislike men who are so beguiled and dems ed by the
                      charms of pleas ure of the moment. Lorem
                    </p>
                  </div>
                </div>
              </div>
              <!-- testimonial 9 -->
              <div class="swiper-slide px-15px">
                <div
                  class="p-5 md:p-10 md:pr-50px md:pb-50px bg-whiteColor dark:bg-whiteColor-dark rounded"
                >
                  <div
                    class="flex justify-between items-center mb-15px lg:mb-30px"
                  >
                    <div class="flex items-center gap-5">
                      <div>
                        <img
                          src="./assets/images/testimonial/testi_1.png"
                          alt=""
                          class="w-58px h-58px rounded-full"
                        >
                      </div>

                      <div>
                        <h5
                          class="text-lg md:text-size-22 text-blackColor dark:text-blackColor-dark font-semibold pb-1"
                        >
                          Mirnsdo Jons
                        </h5>
                        <p class="text-sm text-lightGrey9">Ui/Ux Designer</p>
                      </div>
                    </div>
                    <div class="space-x-1">
                      <i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-lightGrey6"
                      ></i>
                    </div>
                  </div>
                  <div>
                    <p class="text-contentColor dark:text-contentColor-dark">
                      The other hand we denounce with righteou indg ation men
                      who are so beguiled and demoraliz ed by the of the mo
                      ment.Dislike men who are so beguiled and dems ed by the
                      charms of pleas ure of the moment. Lorem
                    </p>
                  </div>
                </div>
              </div>
              <!-- testimonial 10 -->
              <div class="swiper-slide px-15px">
                <div
                  class="p-5 md:p-10 md:pr-50px md:pb-50px bg-whiteColor dark:bg-whiteColor-dark rounded"
                >
                  <div
                    class="flex justify-between items-center mb-15px lg:mb-30px"
                  >
                    <div class="flex items-center gap-5">
                      <div>
                        <img
                          src="./assets/images/testimonial/testi_1.png"
                          alt=""
                          class="w-58px h-58px rounded-full"
                        >
                      </div>

                      <div>
                        <h5
                          class="text-lg md:text-size-22 text-blackColor dark:text-blackColor-dark font-semibold pb-1"
                        >
                          Mirnsdo Jons
                        </h5>
                        <p class="text-sm text-lightGrey9">Ui/Ux Designer</p>
                      </div>
                    </div>
                    <div class="space-x-1">
                      <i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-yellow"
                      ></i
                      ><i
                        class="icofont-star text-xs md:text-lg text-lightGrey6"
                      ></i>
                    </div>
                  </div>
                  <div>
                    <p class="text-contentColor dark:text-contentColor-dark">
                      The other hand we denounce with righteou indg ation men
                      who are so beguiled and demoraliz ed by the of the mo
                      ment.Dislike men who are so beguiled and dems ed by the
                      charms of pleas ure of the moment. Lorem
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="swiper-button-next translate-x-2 md:translate-x-8 3xl:translate-x-12"
            ></div>
            <div
              class="swiper-button-prev -translate-x-2 md:-translate-x-8 3xl:-translate-x-12"
            ></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Barnds Section-->
    <section class="bg-lightGrey10 dark:bg-lightGrey10-dark">
      <div class="container pb-60px">
        <!-- Brands Heading -->
        <div class="mb-5 md:mb-10" data-aos="fade-up">
          <h3
            class="text-3xl md:text-[35px] lg:text-size-38 3xl:text-size-42 leading-10 mf:leading-45px 2xl:leading-50px 3xl:leading-2xl font-bold text-blackColor dark:text-blackColor-dark text-center"
          >
            Relied on marketers trusted by engineers and <br >
            Beloved by
            <span
              class="relative after:w-full after:h-[7px] z-0 after:bg-secondaryColor after:absolute after:left-0 after:bottom-3 md:after:bottom-5 after:z-[-1]"
              >Executives</span
            >
          </h3>
        </div>
        <!-- brands -->
        <div class="flex flex-wrap justify-center">
          <!-- brand 1 -->
          <div class="basis-1/2 md:basis-1/4 lg:basis-1/5" data-aos="fade-up">
            <a
              href="#"
              class="pt-25px pb-45px text-center w-full flex justify-center"
            >
              <img src="./assets/images/brand/brand_1.png" alt="" >
            </a>
          </div>
          <!-- brand  -->
          <div class="basis-1/2 md:basis-1/4 lg:basis-1/5" data-aos="fade-up">
            <a
              href="#"
              class="pt-25px pb-45px text-center w-full flex justify-center"
            >
              <img src="./assets/images/brand/brand_2.png" alt="" >
            </a>
          </div>
          <!-- brand 3 -->
          <div class="basis-1/2 md:basis-1/4 lg:basis-1/5" data-aos="fade-up">
            <a
              href="#"
              class="pt-25px pb-45px text-center w-full flex justify-center"
            >
              <img src="./assets/images/brand/brand_3.png" alt="" >
            </a>
          </div>
          <!-- brand 4 -->
          <div class="basis-1/2 md:basis-1/4 lg:basis-1/5" data-aos="fade-up">
            <a
              href="#"
              class="pt-25px pb-45px text-center w-full flex justify-center"
            >
              <img src="./assets/images/brand/brand_4.png" alt="" >
            </a>
          </div>
          <!-- brand 5 -->
          <div class="basis-1/2 md:basis-1/4 lg:basis-1/5" data-aos="fade-up">
            <a
              href="#"
              class="pt-25px pb-45px text-center w-full flex justify-center"
            >
              <img src="./assets/images/brand/brand_5.png" alt="" >
            </a>
          </div>
          <!-- brand 6 -->
          <div class="basis-1/2 md:basis-1/4 lg:basis-1/5" data-aos="fade-up">
            <a
              href="#"
              class="pt-25px pb-45px text-center w-full flex justify-center"
            >
              <img src="./assets/images/brand/brand_6.png" alt="" >
            </a>
          </div>
          <!-- brand 7 -->
          <div class="basis-1/2 md:basis-1/4 lg:basis-1/5" data-aos="fade-up">
            <a
              href="#"
              class="pt-25px pb-45px text-center w-full flex justify-center"
            >
              <img src="./assets/images/brand/brand_7.png" alt="" >
            </a>
          </div>
          <!-- brand 8 -->
          <div class="basis-1/2 md:basis-1/4 lg:basis-1/5" data-aos="fade-up">
            <a
              href="#"
              class="pt-25px pb-45px text-center w-full flex justify-center"
            >
              <img src="./assets/images/brand/brand_8.png" alt="" >
            </a>
          </div>
          <!-- brand 9 -->
          <div class="basis-1/2 md:basis-1/4 lg:basis-1/5" data-aos="fade-up">
            <a
              href="#"
              class="pt-25px pb-45px text-center w-full flex justify-center"
            >
              <img src="./assets/images/brand/brand_9.png" alt="" >
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('after-script')

@endpush
