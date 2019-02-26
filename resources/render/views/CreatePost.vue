<template>
  <v-container fluid>
    <navigation-menu name="CREATE POST"/>
    <v-content>
      <v-container fill-height fluid grid-list-xl class="pa-0">
        <v-layout>
          <v-flex>
            <v-tabs grow>
              <v-tab key="post">
                Post
              </v-tab>
              <v-tab key="request">
                Request
              </v-tab>
              <v-tab-item key="post">
                <create-post-tab-content/>
              </v-tab-item>
              <v-tab-item key="request">
                <create-request-tab-content/>
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
  import CreatePostTabContent from '../components/CreatePostTabContent';
  import CreateRequestTabContent from '../components/CreateRequestTabContent';

  export default {
    components: {
      NavigationMenu,
      CreateRequestTabContent,
      CreatePostTabContent
    }
  };
</script>

<style scoped lang="scss">

</style>
