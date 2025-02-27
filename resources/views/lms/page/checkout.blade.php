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
            src="../../assets/images/herobanner/herobanner__1.png"
            alt=""
          ><img
            class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
            src="../../assets/images/herobanner/herobanner__2.png"
            alt=""
          ><img
            class="absolute right-[30px] top-0 md:right-10 lg:right-[575px] 2xl:top-20 animate-move-var2 opacity-50 hidden md:block"
            src="../../assets/images/herobanner/herobanner__3.png"
            alt=""
          >

          <img
            class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
            src="../../assets/images/herobanner/herobanner__5.png"
            alt=""
          >
        </div>
        <div class="container">
          <div class="text-center">
            <h1
              class="text-3xl md:text-size-40 2xl:text-size-55 font-bold text-blackColor dark:text-blackColor-dark mb-7 md:mb-6 pt-3"
            >
              Checkout
            </h1>
            <ul class="flex gap-1 justify-center">
              <li>
                <a
                  href="../../index.html"
                  class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                  >Home <i class="icofont-simple-right"></i
                ></a>
              </li>
              <li>
                <span
                  class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                  >Checkout</span
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- checkout section -->
    <section>
      <div class="container py-50px lg:py-60px 2xl:py-20 3xl:py-100px">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-30px">
          <!-- left -->
          <div>
            <!-- heading -->
            <h4
              class="text-xl text-blackColor dark:text-blackColor-dark font-bold pb-10px mb-5 border-b border-borderColor dark:border-borderColor-dark"
            >
              <span class="leading-1.2">Billing Details</span>
            </h4>
            <form data-aos="fade-up">
              <div
                class="grid grid-cols-1 xl:grid-cols-2 lg:gap-x-30px gap-y-5 mb-5"
              >
                <div>
                  <label
                    class="text-sm text-blackColor dark:text-blackColor-dark mb-5px block"
                    ><span class="leading-1.8">First Name *</span></label
                  >
                  <input
                    type="text"
                    placeholder="First Name"
                    class="w-full h-50px leading-50px px-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-blackColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80"
                  >
                </div>
                <div>
                  <label
                    class="text-sm text-blackColor dark:text-blackColor-dark mb-5px block"
                    ><span class="leading-1.8">Last Name*</span></label
                  >
                  <input
                    type="text"
                    placeholder="Last Name"
                    class="w-full h-50px leading-50px px-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-blackColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80"
                  >
                </div>
              </div>
              <div class="mb-5">
                <label
                  class="text-sm text-blackColor dark:text-blackColor-dark mb-5px block"
                  ><span class="leading-1.8">Company Name</span></label
                >
                <input
                  type="text"
                  placeholder="Company Name"
                  class="w-full h-50px leading-50px px-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-blackColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80"
                >
              </div>
              <div
                class="grid grid-cols-1 xl:grid-cols-2 lg:gap-x-30px gap-y-5 mb-5"
              >
                <div>
                  <label
                    class="text-sm text-blackColor dark:text-blackColor-dark mb-5px block"
                    ><span class="leading-1.8">Email Address*</span></label
                  >
                  <input
                    type="email"
                    placeholder="Your email"
                    class="w-full h-50px leading-50px px-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-blackColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80"
                  >
                </div>
                <div>
                  <label
                    class="text-sm text-blackColor dark:text-blackColor-dark mb-5px block"
                    ><span class="leading-1.8">Phone Number*</span></label
                  >
                  <input
                    type="text"
                    placeholder="Phone Number"
                    class="w-full h-50px leading-50px px-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-blackColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80"
                  >
                </div>
              </div>
              <div class="grid grid-cols-1 gap-y-5 mb-5">
                <div>
                  <label
                    class="text-sm text-blackColor dark:text-blackColor-dark mb-5px block"
                    ><span class="leading-1.8">Address *</span></label
                  >
                  <input
                    type="text"
                    placeholder="Address"
                    class="w-full h-50px leading-50px px-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-blackColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80"
                  >
                </div>
                <div>
                  <label
                    class="text-sm text-blackColor dark:text-blackColor-dark mb-5px block"
                    ><span class="leading-1.8">Town/City *</span></label
                  >
                  <input
                    type="text"
                    placeholder="Town/City"
                    class="w-full h-50px leading-50px px-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-blackColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80"
                  >
                </div>
              </div>
              <div class="grid grid-cols-1 gap-y-5 mb-5">
                <div>
                  <label
                    class="text-sm text-blackColor dark:text-blackColor-dark mb-5px block"
                    ><span class="leading-1.8"
                      >Post Code/Zip Code*</span
                    ></label
                  >
                  <input
                    type="text"
                    placeholder="Post Code/Zip Code"
                    class="w-full h-50px leading-50px px-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-blackColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80"
                  >
                </div>
                <div>
                  <label
                    class="text-sm text-blackColor dark:text-blackColor-dark mb-5px block"
                    ><span class="leading-1.8">Order Notes</span></label
                  >
                  <input
                    type="text"
                    placeholder="Order Notes"
                    class="w-full h-50px leading-50px px-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-blackColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80"
                  >
                </div>
              </div>
            </form>
          </div>
          <!-- right -->
          <div
            class="p-10px lg:p-35px text-blackColor dark:text-blackColor-dark leading-1.8"
          >
            <!-- heading -->
            <h4
              class="text-2xl text-blackColor dark:text-blackColor-dark font-bold mb-5"
            >
              <span class="leading-1.2">Your Order</span>
            </h4>

            <div class="overflow-auto">
              <table
                class="table-fixed w-full border-t border-borderColor2 dark:border-borderColor2-dark font-medium"
              >
                <thead>
                  <tr
                    class="border-b border-borderColor2 dark:border-borderColor2-dark"
                  >
                    <td class="p-10px md:p-15px">Product</td>
                    <td class="p-10px md:p-15px">Total</td>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    class="border-b border-borderColor2 dark:border-borderColor2-dark"
                  >
                    <td class="p-10px md:p-15px">
                      Product Title × <span>1</span>
                    </td>
                    <td class="p-10px md:p-15px">$1,026.00</td>
                  </tr>
                  <tr
                    class="border-b border-borderColor2 dark:border-borderColor2-dark"
                  >
                    <td class="p-10px md:p-15px">Subtotal</td>
                    <td class="p-10px md:p-15px">$1,026.00</td>
                  </tr>
                  <tr
                    class="border-b border-borderColor2 dark:border-borderColor2-dark"
                  >
                    <td class="p-10px md:p-15px">Shipping</td>
                    <td class="p-10px md:p-15px">
                      <div class="flex gap-x-1 items-center">
                        <input
                          type="radio"
                          id="pay-toggle"
                          name="ship"
                          class="cursor-pointer"
                        >
                        <label for="pay-toggle" class="cursor-pointer"
                          >Flat Rate: <span>$03</span></label
                        >
                      </div>
                      <div class="flex gap-x-1 items-center cursor-pointer">
                        <input
                          type="radio"
                          id="free-shipping"
                          name="ship"
                          class="cursor-pointer"
                        >
                        <label for="free-shipping" class="cursor-pointer">
                          Free Shipping</label
                        >
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-10px md:p-15px">Total</td>
                    <td class="p-10px md:p-15px">$ 1.029.00</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- payment method -->
            <div>
              <div class="flex gap-x-2 mb-10px items-center">
                <input
                  type="radio"
                  id="bank"
                  name="ship"
                  class="cursor-pointer"
                >
                <label for="bank" class="cursor-pointer"
                  >Direct Bank Transfer</label
                >
              </div>
              <div class="flex gap-x-2 mb-10px items-center">
                <input
                  type="radio"
                  id="cheque"
                  name="ship"
                  class="cursor-pointer"
                >
                <label for="cheque" class="cursor-pointer"
                  >Cheque Payment</label
                >
              </div>
              <div class="flex gap-x-2 mb-10px items-center">
                <input
                  type="radio"
                  id="cash"
                  name="ship"
                  class="cursor-pointer"
                >
                <label for="cash" class="cursor-pointer"
                  >Cash on Delivery</label
                >
              </div>
              <div class="flex gap-x-2 mb-10px items-center">
                <input
                  type="radio"
                  id="paypal"
                  name="ship"
                  class="cursor-pointer"
                >
                <label for="paypal" class="cursor-pointer">Paypal</label>
              </div>

              <div class="mt-30px">
                <button
                  class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                >
                  Place order
                </button>
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
