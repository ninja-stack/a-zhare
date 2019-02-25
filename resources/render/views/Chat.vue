<template>
  <v-container fluid class='ma-0 pa-0'>
    <navigation-menu name="CHAT"/>
    <v-content>
      <v-container fill-height fluid grid-list-xl>
        <v-layout row wrap>
          <chat-list />
				  <chat-detail name="Kelvin"/>
        </v-layout>
      </v-container>
    </v-content>
  </v-container>
</template>

<script>
  import NavigationMenu from '../components/NavigationMenu';
	import ChatList from '../components/ChatList';
	import ChatDetail from '../components/ChatDetail';
  export default {
    components: {
			NavigationMenu,
			ChatList,
			ChatDetail,
		},
		props: {
      source: String
    }
  }
</script>

<style scoped lang="scss">

</style>
