<template>
  <v-container fluid>
    <navigation-menu name="PROFILE_OWNER"/>
    <v-content>
      <v-layout row wrap>
        <post-card-input/>
        <div>
          <request-post-card/>
          <content-post-card/>
        </div>
      </v-layout>
    </v-content>
  </v-container>
</template>

<script>
  import NavigationMenu from '../components/NavigationMenu';
  import PostCardInput from '../components/PostCardInput';
  import ContentPostCard from '../components/ContentPostCard';
  import RequestPostCard from '../components/RequestPostCard';
  export default {
    components: {
      NavigationMenu,
      PostCardInput,
      ContentPostCard,
      RequestPostCard
    },
    data: () => ({
      drawer: null
    }),
    props: {
      source: String
    }
  }
</script>

<style scoped lang="scss">

</style>
