<template>
  <div>
    <navbar-component />
    <main class="overflow-y-auto" scroll-region>
      <slot />
    </main>
    <footer-component />
  </div>
</template>

<script>
import NavbarComponent from "@/Navbar";
import FooterComponent from "@/Footer";
import Dropdown from "@/Shared/Dropdown";

export default {
  components: {
    Dropdown,
    NavbarComponent,
    FooterComponent
  },
  data() {
    return {
      open: false
    };
  }
};
</script>