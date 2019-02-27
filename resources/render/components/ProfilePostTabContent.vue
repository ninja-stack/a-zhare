<template>
  <v-card flat>
    <content-post-card/>
    <content-post-card/>
  </v-card>
</template>

<script>
import ContentPostCard from '../components/ContentPostCard';
export default {
  name: 'profile-post-tab-content',
  components: {
    ContentPostCard
  }
}
</script>

<style lang="scss">

</style>
