<template>
  <nav
    class="bg-gray-800 text-white fixed top-0 z-50 w-full flex flex-wrap items-center justify-between px-4 md:px-8 py-4 navbar-expand-lg"
  >
    <div class="container mx-auto flex flex-wrap items-center justify-between">
      <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block item-center">
        <!-- logo -->
        <a class="flex items-center flex-shrink-0 text-white mr-6" href="/">
          <img src="/storage/logo.png" alt="Cyber Technology Logo" />
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
        <a class="btn-nav" href="/#contactus">聯絡銷售人員</a>
        <dropdown :items="supports" :label="'支援'" />
        <dropdown :items="languages" :selectedIndex="0" />
        <dropdown :items="accounts" :label="'我的帳戶'" />
        <a
          class="btn bg-orange-180 text-sm px-2 py-2 rounded-sm font-bold hidden md:block md:ml-2"
          :href="route('user.login')"
        >登入主控台</a>
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
      show: false,
      languages:[
        {text:"中文", link:"?locale=cn"},
        {text:"English", link:"?locale=en"}
      ],
      supports:[
        {text:"支援中心", link:"/#contactus"},
        {text:"知識中心", link:"/#contactus"}
      ],
      accounts:[
        {text:"管理主控台", link:"/#contactus"},
        {text:"帳戶設定", link:"/#contactus"}
      ]
    };
  },
  methods: {
    toggleNavbar: function() {
      this.show = !this.show;
    }
  }
};
</script>