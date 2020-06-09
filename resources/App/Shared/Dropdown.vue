<template>
  <a class="btn btn-nav" v-on:mouseover="mouseover" v-on:mouseleave="mouseleave">
    <div class="relative">
      <span>{{ genLabel }}</span>
      <icon name="arrow" v-bind:class="[show?'rotate-180':'rotate-0']" />
      <transition
        enter-active-class="transition ease-out duration-100"
        enter-class="transform opacity-0 scale-95"
        enter-to-class="transform opacity-100 scale-100"
        leave-active-class="transition ease-in duration-75"
        leave-class="transform opacity-100 scale-100"
        leave-to-class="transform opacity-0 scale-95"
      >
        <div v-show="show" class="absolute right-0 mt-4 origin-top-right shadow-lg">
          <div class="px-2 py-2 text-gray-700 rounded-sm shadow bg-white">
            <icon name="white-arrow-up" />
            <a
              :href="item.link"
              class="block bg-transparent px-4 py-2 whitespace-no-wrap text-left text-sm hover:cursor-pointer hover:text-orange-500"
              v-for="(item,index) in items"
            >{{ item.text }}</a>
          </div>
        </div>
      </transition>
    </div>
  </a>
</template>
<script>
import Icon from "@/Shared/Icon";
export default {
  components: {
    Icon
  },
  props: {
    items: {
      type: Array,
      default: []
    },
    selectedIndex: {
      type: Number,
      default: 0
    },
    label: {
      type: String,
      default: null
    }
  },
  data() {
    return {
      show: false
    };
  },
  computed: {
    genLabel() {
      if (this.label) return this.label;
      if (this.items.length < 1) return "";
      if (this.selectedIndex > this.items.length) return "";
      return this.items[this.selectedIndex].text;
    }
  },
  methods: {
    mouseover() {
      this.show = true;
    },
    mouseleave() {
      this.show = false;
    }
  }
};
</script>