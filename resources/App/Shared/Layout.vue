<template>
  <div>
    <navbar-component />
    <main>
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
    FooterComponent
  },
  data() {
    return {
      open: false
    };
  }
};
</script>