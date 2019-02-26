<template>
  <v-card flat>
    <request-post-card/>
    <request-post-card/>
  </v-card>
</template>

<script>
import RequestPostCard from '../components/RequestPostCard';
export default {
  name: 'profile-request-tab-content',
  components: {
    RequestPostCard
  }
}
</script>

<style lang="scss">

</style>
