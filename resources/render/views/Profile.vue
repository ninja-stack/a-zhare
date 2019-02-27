<template>
  <v-container fluid>
    <navigation-menu name="PROFILE_OWNER"/>
    <v-content>
      <v-container fill-height fluid grid-list-xl>
        <v-layout row wrap>
          <v-flex>
            <v-tabs left color="darkslategray" dark icons-and-text>
              <v-tabs-slider color="blue"></v-tabs-slider>
              <v-tab key="post">
                Posts
                <v-icon>far fa-clipboard</v-icon>
              </v-tab>

              <v-tab key="request">
                Requests
                <v-icon>fas fa-share-square</v-icon>
              </v-tab>

              <v-tab key="medal">
                Medals
                <v-icon color="white">
                  fas fa-trophy
                </v-icon>
              </v-tab>

              <v-tab-item key="posts">
                <profile-post-tab-content :posts="$store.getters['posts/contentPosts']" />
              </v-tab-item>

              <v-tab-item  key="requests">
                <profile-request-tab-content :posts="$store.getters['posts/requestPosts']" />
              </v-tab-item>
              
              <v-tab-item  key="medals">
                <profile-medal-tab-content />
              </v-tab-item>
            </v-tabs>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
  </v-container>
</template>

<script>
  import NavigationMenu from '../components/NavigationMenu';
  import ProfilePostTabContent from '../components/ProfilePostTabContent';
  import ProfileRequestTabContent from '../components/ProfileRequestTabContent';
  import ProfileMedalTabContent from '../components/ProfileMedalTabContent';
  export default {
    components: {
      NavigationMenu,
      ProfilePostTabContent,
      ProfileRequestTabContent,
      ProfileMedalTabContent
    },
    data: () => ({
      drawer: null
    }),
    props: {
      source: String
    },
    async mounted () {
      const token = localStorage.getItem('token');
      await this.$store.dispatch('posts/getProfilePosts', token);
      console.log(this.$store.getters['posts/requestPosts']);
    }
  }
</script>

<style scoped lang="scss">

</style>
