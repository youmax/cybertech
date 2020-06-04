<template>
  <layout>
    <div class="text-center container pt-40 mx-auto h-screen" style="margin-bottom: -4rem;">
      <div class="flex flex-col">
        <h1 class="text-black font-bold text-5xl mb-10">{{ title }}</h1>
        <h3 class="text-black font-bold text-3xl">{{ description }}</h3>
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from "@/Shared/Layout";

export default {
  components:{
    Layout
  },
  metaInfo: { title: "Error" },
  props: {
    status: Number
  },
  computed: {
    title() {
      return {
        503: "503: Service Unavailable",
        500: "500: Server Error",
        404: "404: Page Not Found",
        403: "403: Forbidden"
      }[this.status] || "Oops...";
    },
    description() {
      return {
        503: "Sorry, we are doing some maintenance. Please check back soon.",
        500: "Whoops, something went wrong on our servers.",
        404: "Sorry, the page you are looking for could not be found.",
        403: "Sorry, you are forbidden from accessing this page."
      }[this.status] || "Sorry, something went wrong on our servers.";
    }
  }
};
</script>