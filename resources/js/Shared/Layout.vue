<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
</script>

<template>
  <Head>
    <link
      href="https://fonts.googleapis.com/css?family=Inter:regular,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Great+Vibes:regular"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Marck+Script:regular"
      rel="stylesheet"
    />
  </Head>
  <header class="bg-[#0D0D0D]">
    <div class="container">
      <div class="navbar">
        <div class="navbar-start">
          <Link :href="route('home')" class="flex items-center">
            <h1
              class="
                text-center text-2xl
                font-bold font-['Helvetica']
                text-white
              "
            >
              Фуд<span class="text-[#FF9F0D]">так</span>
            </h1>
          </Link>
        </div>
        <div class="hidden navbar-center lg:flex">
          <ul
            class="
              flex
              p-4
              mt-4
              flex-row
              space-x-8
              md:mt-0
              bg-[#0D0D0D]
              font-['Inter']
              text-base
              font-bold
            "
          >
            <li>
              <Link
                :href="route('home')"
                class="text-[#FF9F0D]"
                aria-current="page"
                >Главная</Link
              >
            </li>
            <li>
              <Link
                :href="route('menu')"
                class="text-white hover:text-[#FF9F0D]"
                >Меню</Link
              >
            </li>
            <li>
              <Link
                :href="route('shop')"
                class="text-white hover:text-[#FF9F0D]"
                >Магазин</Link
              >
            </li>
            <li>
              <Link
                :href="route('about')"
                class="text-white hover:text-[#FF9F0D]"
                >О нас</Link
              >
            </li>
            <li>
              <Link
                :href="route('contacts')"
                class="
                  block
                  py-2
                  pl-3
                  pr-4
                  md:text-white
                  text-gray-700
                  rounded
                  hover:bg-gray-100
                  md:hover:bg-transparent
                  md:hover:text-[#FF9F0D]
                  md:p-0
                  md:dark:hover:text-white
                  dark:text-gray-400
                  dark:hover:bg-gray-700
                  dark:hover:text-white
                  md:dark:hover:bg-transparent
                  dark:border-gray-700
                "
                >Контакты</Link
              >
            </li>
          </ul>
        </div>
        <div class="navbar-end">
          <div class="flex">
            <div class="dropdown dropdown-end">
              <label tabindex="0" class="btn btn-ghost btn-circle">
                <div class="indicator">
                  <span
                    id="boot-icon"
                    class="bi bi-cart text-xl text-[#FF9F0D] mt-1"
                  ></span>
                  <span
                    class="
                      badge badge-sm
                      bg-[#FF9F0D]
                      indicator-item
                      border-none
                    "
                    >8</span
                  >
                </div>
              </label>
              <div
                tabindex="0"
                class="mt-3 shadow  card card-compact dropdown-content w-52 bg-base-100"
              >
                <div class="card-body">
                  <span class="text-lg font-bold">8 Items</span>
                  <span class="text-info">Subtotal: $999</span>
                  <div class="card-actions">
                    <button class="btn btn-primary btn-block">View cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="dropdown dropdown-end">
              <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                  <img src="https://placeimg.com/80/80/people" />
                </div>
              </label>
              <ul
                tabindex="0"
                class="p-2 mt-3 shadow  menu menu-compact dropdown-content bg-base-100 rounded-box w-52"
              >
                <li>
                  <a>Profile</a>
                </li>
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
              </ul>
            </div>
          </div>
          <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h8m-8 6h16"
                />
              </svg>
            </label>
            <ul
              tabindex="0"
              class="
                p-2
                mt-3
                shadow
                menu menu-compact
                dropdown-content
                rounded-box
                w-52
                bg-[#0D0D0D]
                font-['Inter']
                text-base
                font-bold
              "
            >
              <li>
                <Link :href="route('home')" class="text-[#FF9F0D]"
                  >Главная</Link
                >
              </li>
              <li>
                <Link :href="route('menu')" class="text-white">Меню</Link>
              </li>
              <li>
                <Link :href="route('shop')" class="text-white">Магазин</Link>
              </li>
              <li>
                <Link :href="route('about')" class="text-white">О нас</Link>
              </li>
              <li>
                <Link :href="route('contacts')" class="text-white"
                  >Контакты</Link
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section
      style="background-image: url('images/breadcrumbbg.png')"
      class="
        h-[410px]
        bg-[left_-550px_top]
        xl:bg-left-top
        bg-auto bg-no-repeat
        mb-[120px]
      "
    >
      <div class="container flex justify-center items-center h-[410px]">
        <div class="flex flex-col items-center">
          <div
            class="
              text-5xl
              leading-[56px]
              text-white
              font-['Helvetica']
              mb-[20px]
            "
          >
            {{ title }}
          </div>
          <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
              <li class="inline-flex items-center">
                <Link
                  :href="route('home')"
                  class="
                    inline-flex
                    items-center
                    font-['Inter']
                    text-xl
                    font-medium
                    text-white
                    hover:text-[#FF9F0D]
                    dark:text-gray-400 dark:hover:text-white
                  "
                >
                  <svg
                    class="w-4 h-4 mr-2"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                    ></path>
                  </svg>
                  Главная
                </Link>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg
                    class="w-6 h-6 text-white"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <span
                    class="
                      ml-1
                      text-xl
                      font-medium
                      text-[#FF9F0D]
                      md:ml-2
                      dark:text-gray-400
                    "
                    >{{ breadcrumb }}</span
                  >
                </div>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
    <slot></slot>
  </main>
</template>

<script>
export default {
  setup() {
    return {};
  },
  props: {
    title: String,
    breadcrumb: String,
  },
};
</script>

