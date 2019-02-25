<template>
  <v-container fluid>
    <navigation-menu name="COMMUNITY_NAME"/>
    <v-content>
      <v-container fill-height fluid grid-list-xl>
        <v-layout row wrap>
          <post-card-input/>
          <div>
            <request-post-card/>
            <content-post-card/>
          </div>
      </v-layout>
      </v-container>
    </v-content>
  </v-container>
</template>

<script>
  import NavigationMenu from '../components/NavigationMenu';
  import PostCardInput from '../components/PostCardInput';
  import RequestPostCard from '../components/RequestPostCard';
  import ContentPostCard from '../components/ContentPostCard';

  export default {
    components: {
      ContentPostCard,
      RequestPostCard,
      PostCardInput,
      NavigationMenu
    }
  };
</script>

<style scoped lang="scss">

</style>
