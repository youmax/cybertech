<template>
  <v-app id="inspire">
    <sidebar />
    <v-app-bar :clipped-left="$vuetify.breakpoint.lgAndUp" app color="blue darken-3" dark>
      <v-app-bar-nav-icon @click.stop="toggle()"></v-app-bar-nav-icon>
      <v-toolbar-title style="width: 300px" class="ml-0 pl-4">
        <span class="hidden-sm-and-down">Admin Dashboard</span>
      </v-toolbar-title>
      <v-text-field
        flat
        solo-inverted
        hide-details
        prepend-inner-icon="mdi-magnify"
        label="Search"
        class="hidden-sm-and-down"
      ></v-text-field>
      <v-spacer></v-spacer>
      <v-btn icon>
        <v-icon>mdi-apps</v-icon>
      </v-btn>
      <v-btn icon>
        <v-icon>mdi-bell</v-icon>
      </v-btn>
    </v-app-bar>

    <v-content>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <slot />
        </v-row>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
import Sidebar from "@/Shared/Sidebar";
import { mapState, mapGetters, mapActions } from "vuex";
export default {
  components: {
    Sidebar
  },
  props: {
    source: String
  },
  metaInfo() {
    return {
      titleTemplate: title =>
        title ? `${this.$page.app.name} - ${title}` : `${this.$page.app.name}`
    };
  },
  data: () => ({

  }),
  created(){
    this.initInertia(this.$page, this.$inertia);
  },
  methods: {
    ...mapActions({
      toggle: "header/toggle",
      initInertia : 'initInertia'
    })
  }
};
</script>