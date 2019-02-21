<template>
  <v-container fluid>
    <navigation-menu name="Dashboard"/>
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
  import RequestPostCard from '../components/RequestPostCard';
  import ContentPostCard from '../components/ContentPostCard';
  import PostCardInput from '../components/PostCardInput';
  import NavigationMenu from '../components/NavigationMenu';

  export default {
    components: {
      NavigationMenu,
      PostCardInput,
      ContentPostCard,
      RequestPostCard
    }
  };
</script>

<style scoped lang="scss">

</style>
