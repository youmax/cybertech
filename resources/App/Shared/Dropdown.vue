<template>
  <a @click="show=!show" class="btn btn-nav">
    <div class="relative">
      <span>中文</span>
      <svg
        fill="currentColor"
        viewBox="0 0 20 20"
        v-bind:class="[ show ? 'rotate-180' : 'rotate-0' ]"
        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"
      >
        <path
          fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd"
        />
      </svg>
      <transition
        enter-active-class="transition ease-out duration-100"
        enter-class="transform opacity-0 scale-95"
        enter-to-class="transform opacity-100 scale-100"
        leave-active-class="transition ease-in duration-75"
        leave-class="transform opacity-100 scale-100"
        leave-to-class="transform opacity-0 scale-95"
      >
        <div
          v-show="show"
          class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48"
        >
          <div class="px-2 py-2 text-gray-700 rounded-md shadow bg-white">
            <svg
              class="block fill-current text-white w-4 h-4 absolute right-0 top-0 mr-4 -mt-3 z-0"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
            >
              <path
                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"
              />
            </svg>
            <a href="?locale=" class="btn btn-nav">英文</a>
            <a href="?locale=" class="btn btn-nav">中文</a>
          </div>
        </div>
      </transition>
    </div>
  </a>
</template>

<script>
export default {
  data() {
    return {
      show: false
    };
  },
  mounted() {
    document.addEventListener("keydown", e => {
      if (e.keyCode === 27) {
        this.show = false;
      }
    });
  }
};
</script>