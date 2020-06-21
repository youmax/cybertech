<template>
  <div id="plekan">
    <Editor></Editor>
    <Arena></Arena>
    <List></List>
  </div>
</template>


<script>
/* eslint-disable */
import Arena from '@/Components/arena';
import List from '@/Components/list';
import Editor from '@/Components/editor';
import store from '@/Store';
export default {
  props: ['rows'],
  data() {
    return {
      store,
    };
  },
  components: {
    Arena,
    List,
    Editor,
  },
  beforeMount() {
    if (this.rows) {
      this.store.init('rows', JSON.parse(JSON.stringify(this.rows)));
    }
  },
  created() {
    this.store.state.vm = this;
  },
  mounted() {
    this.store.state.editorStart();
    this.$plekanEvent.onInit();
  },
};
</script>