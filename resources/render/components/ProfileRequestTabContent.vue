<template>
  <div>
    <request-post-card v-for="post in posts" :key="post.id" :post="post" :button="'View Applicant'" :url="'/applicants'"/>
  </div>
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
