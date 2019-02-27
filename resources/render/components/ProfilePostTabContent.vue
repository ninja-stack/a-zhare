<template>
  <div>
    <content-post-card v-for="post in posts" :key="post.id" :post="post" />
  </div>
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
