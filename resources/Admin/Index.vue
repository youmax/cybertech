<template>
  <div>
    {{ `${$page.app.name} Home page` }}
  </div>
</template>

<script>
import Layout from "@/Shared/Layout";

export default {
  components:{
    Layout
  },
  layout: Layout,

  metaInfo() { 
    return {
      title: `Dashboard`
    }
  },
};
</script>