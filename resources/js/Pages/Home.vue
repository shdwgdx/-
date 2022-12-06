<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
</script>

<template>
  <Head
    ><link
      href="https://fonts.googleapis.com/css?family=Inter:regular,700"
      rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Great+Vibes:regular"
      rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Marck+Script:regular"
      rel="stylesheet"
  /></Head>
  <section
    class="min-h-[950px] h-full bg-center bg-no-repeat bg-cover"
    style="background-image: url('images/headerbg.png')"
  >
    <div class="container mx-auto pt-11">
      <h1
        class="
          text-center text-2xl
          font-bold font-['Helvetica']
          text-white
          mb-4
        "
      >
        <span class="text-[#FF9F0D]"> Фуд</span>так
      </h1>

      <div class="flex justify-between items-center mb-[161px]">
        <nav class="max-w-[507px] w-full mr-5">
          <ul
            class="
              flex
              justify-between
              text-base
              font-bold font-['Inter']
              last:text-white
            "
          >
            <li class="text-[#FF9F0D]">
              <Link :href="route('home')">Главная</Link>
            </li>
            <li><Link :href="route('menu')">Меню</Link></li>
            <li><Link :href="route('shop')">Магазин</Link></li>
            <li><Link :href="route('about')">О нас</Link></li>
            <li><Link :href="route('contacts')">Контакты</Link></li>
          </ul>
        </nav>

        <div class="flex justify-between items-center w-[99px]">
          <a href="#"
            ><img :src="`images/Search.svg`" alt="Likest" class="w-5 h-5"
          /></a>
          <a href="#"><img :src="`images/Basket.svg`" alt="Backet" /></a>
          <a href="#"><img :src="`images/User.svg`" alt="User" /></a>
        </div>
      </div>
      <div class="flex justify-between mb-[82px]">
        <div class="max-w-[472px] w-full flex flex-col mr-[93px]">
          <h2
            class="
              font-['Marck_Script']
              text-4xl
              font-normal
              text-[#FF9F0D]
              mb-2
            "
          >
            Быстро & Занятно!
          </h2>
          <h3
            class="
              text-[60px]
              leading-[68px]
              font-bold font-['Helvetica']
              text-white
              mb-8
            "
          >
            <span class="text-[#FF9F0D]">Th</span>e Art of speed food Quality
          </h3>
          <p class="text-white text-base font-['Inter'] font-normal mb-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Varius sed
            pharetra dictum neque massa congue
          </p>
          <a
            href="#"
            class="
              flex
              justify-center
              items-center
              w-[190px]
              h-[60px]
              text-base
              font-['Inter']
              text-[#E0DFDF]
              border
              rounded-[30px]
              bg-[#FF9F0D]
            "
            >See Menu</a
          >
        </div>
        <div class="mt-[-152px]">
          <img
            :src="`images/HeroFood.png`"
            alt="HeroFood"
            class="w-[877px] h-[670px] object-scale-down"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  setup() {
    return {};
  },
};
</script>

