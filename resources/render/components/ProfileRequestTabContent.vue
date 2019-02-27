<template>
  <v-card flat>
    <request-post-card v-for="post in posts" :key="post.id" :post="post" />
  </v-card>
</template>

<script>
import RequestPostCard from '../components/RequestPostCard';
export default {
  name: 'profile-request-tab-content',
  components: {
    RequestPostCard
  },
  props: [
    'posts'
  ]
}
</script>

<style lang="scss">

</style>
