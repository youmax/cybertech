<template>
  <header class="w-full bg-gray-800 text-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
    <div
      class="flex flex-col max-w-screen-xl px-4 py-2 lg:px-8 mx-auto md:items-center md:justify-between md:flex-row"
    >
      <div class="p-4 flex flex-row items-center justify-between">
        <!-- Logo -->
        <a
          href="#"
          class="text-lg font-semibold tracking-widest text-white uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"
        >Creative Ego</a>
        <!-- toggle button-->
        <button
          class="md:hidden rounded-lg focus:outline-none focus:shadow-outline"
          @click="open=!open"
        >
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path
              v-show="!open"
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
              clip-rule="evenodd"
            />
            <path
              v-show="open"
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            />
          </svg>
        </button>
      </div>
      <nav
        v-bind:class="[open?'flex':'hidden']"
        class="flex-col flex-grow pb-4 md:pb-0 md:flex md:justify-end md:flex-row"
      >
        <a class="btn btn-nav" href="#">聯繫我們</a>
        <dropdown />
        <a
          class="btn bg-purple-800 py-3 px-6 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800"
          href="#"
        >登入</a>
      </nav>
    </div>
    <nav class="bg-gray-300 text-gray-900 px-4 lg:px-16 flex-col flex-grow py-2 md:py-0 md:flex justify-start md:flex-row text-center">
      <a class="btn btn-nav" href="#">產品</a>
      <a class="btn btn-nav" href="#">定價</a>
      <a class="btn btn-nav" href="#">了解我們</a>
    </nav>
  </header>
</template>
<script>
import Dropdown from "@/Shared/Dropdown";
export default {
  components: {
    Dropdown
  },
  data() {
    return {
      open: false,
      open2: false
    };
  }
};
</script>