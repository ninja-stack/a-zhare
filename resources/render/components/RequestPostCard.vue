<template>
  <v-flex xs12 sm12 pt-2>
    <v-card>
      <v-sheet
        class="v-sheet--offset mx-auto"
        color="#66bb6a"
        elevation="12"
        max-width="calc(100% - 32px)"
        margin-top="20"
      >
        <v-card-title primary-title class="ma-4">
          <div>
            <span class="red--text">Request</span>
            <h3 class="white--text headline mb-0">Tokyo Blockchain Community</h3>
          </div>
        </v-card-title>
      </v-sheet>
  
      <v-card-text class="pt-0">
        <div>{{post.content}}</div>
        <v-img
        src="https://dummyimage.com/600x400/000/fff"
        aspect-ratio="2.75"
        ></v-img>
      
        <v-card-actions>
          <v-list-tile class="grow">
            <v-list-tile-avatar >
              <v-icon class="mr-1" color="red">fas fa-gift</v-icon>
            </v-list-tile-avatar>
            <v-list-tile-content>
              <v-list-tile-title>Free C# ebook</v-list-tile-title>
            </v-list-tile-content>
            <v-layout
              align-center
              justify-end
            >
              <v-icon class="mr-1">fas fa-comment</v-icon>
              <span class="subheading mr-2">256</span>
              <v-icon class="mr-1">fas fa-heart</v-icon>
              <span class="subheading">45</span>
            </v-layout>
          </v-list-tile>
        </v-card-actions>
      </v-card-text>
    </v-card>
  </v-flex>
</template>

<script>
  export default {
    name: 'request-post-card',
    props: [
      'post'
    ]
  };
</script>

<style scoped lang="scss">
  .v-sheet--offset {
    top: -24px;
    position: relative;
  }
</style>
