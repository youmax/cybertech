<template>
  <div>
    <app-header />
    <div
      class="bg-cover bg-center h-auto text-white py-24 px-10 object-fill"
      :style="`background-image:url(${$page.banner})`"
    >
      <div class="flex flex-col lg:w-1/2 bg-gray-700 text-white px-2 py-4 justify-center">
        <p class="font-bold text-md uppercase mb-2 pl-4">產品服務</p>
        <p class="text-3xl font-bold mb-4 pl-8">大規模探索及保護您的敏感資料</p>
        <p class="text-2xl mb-4 leading-none pl-12">為您提供全面的安全諮詢</p>
        <a
          href="#"
          class="mx-auto bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-purple-300 hover:text-gray-800"
        >開始使用</a>
      </div>
    </div>
    <main>
      <slot />
    </main>
    <app-footer />
  </div>
</template>

<script>
import AppHeader from "@/Shared/AppHeader";
import AppFooter from "@/Shared/AppFooter";
import Dropdown from "@/Shared/Dropdown";

export default {
  components: {
    Dropdown,
    AppHeader,
    AppFooter
  },
  data() {
    return {
      open: false
    };
  },
};
</script>