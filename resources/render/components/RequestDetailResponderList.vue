<template>
  <v-flex>
    <v-card>
      <v-toolbar color="#424242" dark>
        <v-toolbar-title>Request responder list</v-toolbar-title>
      </v-toolbar>
      <v-list>
        <v-list-tile
          v-for="item in items"
          :key="item.title"
          avatar
        >
          <v-list-tile-avatar>
            <img :src="item.avatar">
          </v-list-tile-avatar>

          <v-list-tile-content>
            <v-list-tile-title v-text="item.title"></v-list-tile-title>
          </v-list-tile-content>

          <v-list-tile-action>
            <v-btn v-if="item.accept_status" color="#424242" dark>Accepted</v-btn>
            <v-btn v-else>Accept</v-btn>
          </v-list-tile-action>

        </v-list-tile>
      </v-list>
    </v-card>
  </v-flex>
</template>
 
<script>
export default {
  name:"request-detail-responder-list",
  data () {
    return {
      items: [
        { accept_status: true, title: 'Jason Oner', avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg' },
        { title: 'Travis Howard', avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg' },
        { title: 'Ali Connors', avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg' },
        { title: 'Cindy Baker', avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg' }
      ]
    }
  }
}
</script>
 
<style lang="scss" scoped>
 
</style>
 