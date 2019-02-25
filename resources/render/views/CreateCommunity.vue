<template>
  <v-container fluid>
    <navigation-menu name="CREATE COMMUNITY"/>
    <v-content>
      <v-container fill-height fluid grid-list-xl>
        <v-layout row wrap>
          <create-community-form />
        </v-layout>
      </v-container>
    </v-content>
  </v-container>
</template>

<script>
  import NavigationMenu from '../components/NavigationMenu';
  import CreateCommunityForm from '../components/CreateCommunityForm';

  export default {
    components: {
      NavigationMenu,
      CreateCommunityForm
    }
  }
</script>

<style scoped lang="scss">

</style>