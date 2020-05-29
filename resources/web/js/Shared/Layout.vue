<template>
  <div>
    <navbar-component />
    <main>
      <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh;"
      >
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          v-bind:style="`background-image:url(${$page.banner})`"
        >
          <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <h1 class="text-white font-semibold text-5xl">大規模探索及保護您的敏感資料</h1>
              <p class="mt-4 text-lg text-gray-300">為您提供全面的安全諮詢</p>
              <a href="#contactus" class="btn-indigo py-4 px-8 text-white font-bold mt-8">開始使用</a>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px; transform: translateZ(0px);"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="fill-current text-gray-300"
              points="2560 0 2560 100 0 100"
            />
          </svg>
        </div>
      </div>
      <slot />
    </main>
    <footer-component />
  </div>
</template>

<script>
import NavbarComponent from "@/Shared/Navbar";
import FooterComponent from "@/Shared/Footer";
import Dropdown from "@/Shared/Dropdown";

export default {
  components: {
    Dropdown,
    NavbarComponent,
    FooterComponent,
  },
  data() {
    return {
      open: false
    };
  }
};
</script>