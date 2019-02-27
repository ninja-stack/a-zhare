<template>
  <div>
    <navigation-menu name="DASHBOARD"/>
    <v-content>
      <v-container grid-list-md >
        <v-layout row wrap>
          <v-flex xs12 v-if="$store.getters['posts/isError']">
            <p>No post</p>
          </v-flex>
          <v-flex xs12  ma-2 v-else v-for="post in $store.getters['posts/posts']" :key="post.id">
            <request-post-card v-if="post.type == 'REQUEST'" :post="post"/>
            <content-post-card :post="post" v-else/>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
  </div>
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
    },
    async mounted () {
      const token = localStorage.getItem('token');
      await this.$store.dispatch('posts/getAllCommunityPost', token);
    },
  };
</script>

<style scoped lang="scss">

</style>
