<template>
  <b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
    <b-img :src="image" rounded="circle" slot="aside" width="50" alt="placeholder" />
    <b-card>
      <slot></slot>
    </b-card>
  </b-media>
</template>

<script>
export default {
  props: {
    writtenByMe: Boolean,
    image: String
  },
  data() {
    return {
      content: "abc"
    };
  },
  mounted() {
    // console.log("el valor de writtenByMe:", this.writtenByMe);
  }
};
</script>

