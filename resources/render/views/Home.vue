<template>
  <div>
    <navigation-menu name="Dashboard"/>
    <v-content>
      <v-fade-transition mode="out-in">
        <v-container
          fill-height
          fluid
          grid-list-xl
        >
          <v-layout row wrap>
            <post-card-input/>
            <div>
              <request-post-card/>
              <content-post-card/>
            </div>
          </v-layout>
        </v-container>
      </v-fade-transition>
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
    }
  };
</script>

<style scoped lang="scss">

</style>
