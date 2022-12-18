<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { Navbar, NavbarLogo, NavbarCollapse, NavbarLink } from "flowbite-vue";
import Slider from "@vueform/slider";
</script>


<template>
  <section class="container">
    <div class="flex mb-6">
      <div class="mr-[33px]">
        <label for="sort" class="mr-[15px]">Сортировать:</label>
        <select
          name=""
          id="sort"
          class="w-[236px] border border-solid border-[#E0E0E0] rounded-md"
        >
          <option value="" selected>Новые</option>
          <option value="">Старые</option>
        </select>
      </div>
      <div>
        <label for="sort" class="mr-[15px]">Отобразить:</label>
        <select
          name=""
          id="sort"
          class="w-[236px] border border-solid border-[#E0E0E0] rounded-md"
        >
          <option value="" selected>Все</option>
          <option value="">5-10</option>
          <option value="">10-15</option>
        </select>
      </div>
    </div>
    <div class="flex justify-between">
      <!-- preloader -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 animate-pulse">
        <div class="mb-6 mr-6" v-for="n in 9" :key="n">
          <div class="w-[312px] h-[267px] bg-gray-400 mb-4"></div>
          <div class="h-4 bg-gray-400 rounded w-[100px] mb-4"></div>
          <div class="h-4 bg-gray-400 rounded w-[50px]"></div>
        </div>
      </div>
      <!-- sort-menu -->
      <div
        class="
          w-[312px]
          flex
          justify-center
          border border-solid border-[#F2F2F2]
          rounded-md
        "
      >
        <div class="w-[248px] flex flex-col">
          <div class="mt-6 mb-6 w-[248px] relative">
            <input
              type="text"
              placeholder="Search product"
              class="bg-[rgba(255_159_13_/0.1)] border-0 w-[248px]"
              v-model="search"
              @keydown.enter="
                $wire.searching(textSearch);
                textSearch = '';
              "
            />
            <button
              class="
                bg-[#FF9F0D]
                w-[40px]
                h-[40px]
                absolute
                top-0
                right-0
                z-50
                flex
                justify-center
                items-center
              "
              @click="
                $wire.searching(textSearch);
                textSearch = '';
                $dispatch('foo');
              "
            >
              <img :src="'images/MagnifyingGlass.svg'" alt="" class="" />
            </button>
          </div>
          <div class="mb-6">
            <h2
              class="text-xl font-['Helvetica'] text-[#333333] font-bold mb-6"
            >
              Category
            </h2>
            <div class="flex flex-col" x-data="{ checked: [] }">
              <!-- @foreach ($categories as $category)
              <div class="flex items-center mb-4">
                <input
                  type="checkbox"
                  id="{{ $category->title }}"
                  value="{{ $category->id }}"
                  class="mr-2"
                  x-model="checked"
                  @change="$wire.check(checked)"
                />
                <label
                  for="{{ $category->title }}"
                  >{{ $category->title }}</label
                >
              </div>
              @endforeach -->
            </div>
          </div>
          <div class="mb-6">
            <h2
              class="text-xl font-['Helvetica'] text-[#333333] font-bold mb-4"
            >
              Filter By Price
            </h2>

            <Slider
              v-model="value"
              :max="8000"
              :step="10"
              :tooltips="false"
              :lazy="false"
              class="slider-yellow"
            />
            <div class="flex justify-between">
              <p class="text-base font-['Inter'] text-[#1E1E1E] font-[300]">
                From <span>{{ value[0] }}</span
                >₽ to <span>{{ value[1] }}</span
                >₽
              </p>
              <p class="text-base font-['Inter'] text-[#0D0D0D] font-[300]">
                Filter
              </p>
            </div>
          </div>
          <!-- Latest products -->
          <div>
            <h2
              class="text-xl font-['Helvetica'] text-[#333333] font-bold mb-6"
            >
              Latest Products
            </h2>
            <div class="flex flex-col w-[252px]">
              <div class="flex mb-[18px]">
                <img
                  :src="'images/latestitem1.png'"
                  alt=""
                  class="mr-4 w-[70px] h-[65px]"
                />
                <div class="flex flex-col mb-[18px]">
                  <h3 class="text-base font-['Helvetica'] text-[#4F4F4F] mb-2">
                    Pizza
                  </h3>
                  <img src="" alt="" class="mb-1" />
                  <p class="text-sm font-['Helvetica'] text-[#4F4F4F]">
                    $35.00
                  </p>
                </div>
              </div>
              <div class="flex mb-[18px]">
                <img
                  :src="'images/latestitem1.png'"
                  alt=""
                  class="mr-4 w-[70px] h-[65px]"
                />
                <div class="flex flex-col">
                  <h3 class="text-base font-['Helvetica'] text-[#4F4F4F] mb-2">
                    Pizza
                  </h3>
                  <img src="" alt="" class="mb-1" />
                  <p class="text-sm font-['Helvetica'] text-[#4F4F4F]">
                    $35.00
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      search: "",
      value: [0, 8000],
    };
  },
  methods: {},
};
</script>

<style src="@vueform/slider/themes/default.css"></style>