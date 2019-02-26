<template>
  <v-container fluid>
    <navigation-menu name="COMMUNITY_NAME"/>
    <v-content>
      <v-container fill-height fluid grid-list-xl>
        <v-layout row wrap>
          <div v-if="$store.getters['posts/isError']">
            <p>No such community</p>
          </div>
          <div v-else v-for="post in $store.getters['posts/posts']" :key="post.id">
            <request-post-card v-if="post.type == 'REQUEST'" :post="post"/>
            <content-post-card :post="post" v-else/>
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
    },
    async mounted () {
      const slug = this.$route.params.slug;
      await this.onload(slug);
    },
    beforeRouteUpdate (to, from, next) {
      const slug = to.params.slug;
      this.onload(slug);
      next();
    },
    methods: {
      async onload(slug) {
        await this.$store.dispatch('posts/getPosts', slug);
        const posts = this.$store.getters['posts/posts'];
      }
    }
  };
</script>

<style scoped lang="scss">

</style>
