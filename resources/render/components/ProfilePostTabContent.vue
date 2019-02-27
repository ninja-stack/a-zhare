<template>
  <v-card flat >
    <content-post-card v-for="post in posts" :key="post.id" :post="post" />
  </v-card>
</template>

<script>
import ContentPostCard from '../components/ContentPostCard';
export default {
  name: 'profile-post-tab-content',
  components: {
    ContentPostCard
  },
  props: [
    'posts'
  ]
}
</script>

<style lang="scss">

</style>
