<template>
  <nav
    class="bg-gray-800 text-white fixed top-0 z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
  >
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
      <div
        class="w-full relative flex justify-between lg:w-auto lg:static lg:block item-center"
      >
        <!-- logo -->
        <a class="flex items-center flex-shrink-0 text-white mr-6" href="/">
          <svg
            class="fill-current h-8 w-8 mr-2"
            width="54"
            height="54"
            viewBox="0 0 54 54"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"
            />
          </svg>
          <span class="font-semibold text-xl tracking-tight">{{ $page.app.name }}</span>
        </a>
        <!-- logo -->
        <!-- toggle button-->
        <button
          class="absolute right-0 mr-2 rounded focus:outline-none cursor-pointer outline-none lg:hidden"
          v-on:click="toggleNavbar()"
        >
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path
              v-show="!show"
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
              clip-rule="evenodd"
            />
            <path
              v-show="show"
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            />
          </svg>
        </button>
        <!-- toggle button -->
      </div>
      <div
        class="lg:flex flex-grow items-center justify-end"
        v-bind:class="{'hidden': !show, 'block': show}"
      >
        <a class="btn-nav lg:mx-2" href="#products">產品</a>
        <a class="btn-nav lg:mx-2" href="#aboutus">關於我們</a>
        <a class="btn-nav lg:mx-2" href="#contactus">聯繫我們</a>
        <dropdown />
        <a class="btn-indigo lg:mx-2" href="#">登入</a>
      </div>
    </div>
  </nav>
</template>
<script>
import Dropdown from "@/Shared/Dropdown";
export default {
  components: {
    Dropdown
  },
  data() {
    return {
      show: false
    };
  },
  methods: {
    toggleNavbar: function() {
      this.show = !this.show;
    }
  }
};
</script>