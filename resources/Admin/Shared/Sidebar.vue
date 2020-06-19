<template>
  <v-navigation-drawer v-model="drawer" :clipped="$vuetify.breakpoint.lgAndUp" app>
    <v-list dense>
      <template v-for="item in items">
        <v-list-item :key="item.text" link :href="item.href">
          <v-list-item-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>{{ item.text }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </template>
      <!-- logout button-->
      <v-list-item link v-on:click="logout">
        <v-list-item-action>
          <v-icon>mdi-logout</v-icon>
        </v-list-item-action>
        <v-list-item-content>
          <v-list-item-title>Logout</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <!-- logout button-->
    </v-list>
  </v-navigation-drawer>
</template>

<script>
import { mapState, mapGetters, mapActions } from "vuex";
export default {
  data: () => ({
    items: [
      {
        icon: "mdi-shape",
        text: "Products",
        href: `${route("admin.products.index")}`
      }
    ]
  }),
  computed: {
    ...mapGetters("header", {
      getDrawer: "drawer"
    }),
    drawer: {
      get() {
        return this.getDrawer();
      },
      set(value) {
        this.setDrawer(value);
      }
    }
  },
  methods: {
    ...mapActions({
      setDrawer: "header/setDrawer"
    }),
    logout() {
      this.$inertia.post(route("admin.logout"));
    }
  }
};
</script>