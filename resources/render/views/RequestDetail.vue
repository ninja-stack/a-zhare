<template>
  <v-container fluid>
    <navigation-menu name="REQUEST DETAIL"/>
    <v-content>
      <v-container fill-height fluid grid-list-xl>
        <v-layout row wrap>
          <request-detail-responder-list />
        </v-layout>
      </v-container>
    </v-content>
  </v-container>
</template>

<script>
  import NavigationMenu from '../components/NavigationMenu';
  import RequestPostCard from '../components/RequestPostCard';
  import RequestDetailResponderList from '../components/RequestDetailResponderList';
  export default {
    components: {
      NavigationMenu,
      RequestPostCard,
      RequestDetailResponderList
    }
  }
</script>

<style scoped lang="scss">

</style>
