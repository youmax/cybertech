<template>
  <div>
    <app-header />
    <div
      class="bg-cover bg-center h-auto text-white py-24 px-10 object-fill"
      :style="`background-image:url(${$page.banner})`"
    >
      <div class="md:w-1/2 lg:pl-10">
        <p class="font-bold text-sm uppercase">Services</p>
        <p class="text-3xl font-bold">Multimedia products</p>
        <p class="text-2xl mb-10 leading-none">Atractive designs for your brand</p>
        <a
          href="#"
          class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800"
        >Contact us</a>
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