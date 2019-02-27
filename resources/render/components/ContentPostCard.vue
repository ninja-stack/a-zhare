<template>
  <v-card color="white">
    <v-layout>
      <v-flex xs3>
        <v-img
          src="https://cdn.vuetifyjs.com/images/cards/foster.jpg"
          contain
          aspect-ratio="1"
        ></v-img>
      </v-flex>
      <v-flex xs9>
        <v-card-title primary-title>
          <div>
            <span class="grey--text">Tokyo Blockchain Community</span>
            <h3 class="headline mb-0">Blockchain Seminar</h3>
          </div>
        </v-card-title>
        <v-card-text class="subheading">
          {{post.content}}
        </v-card-text>
      </v-flex>
    </v-layout>
    <v-divider></v-divider>
    <v-card-actions>
      <v-spacer></v-spacer>
      <v-icon class="mr-1">fas fa-comment</v-icon>
      <span class="subheading mr-2">256</span>
      <v-icon class="mr-1">fas fa-heart</v-icon>
      <span class="subheading">45</span>
    </v-card-actions>
  </v-card>
</template>

<script>
  export default {
    name: 'content-post-card',
    props: [
      'post'
    ]
  };
</script>

<style scoped lang="scss">
  .v-sheet--offset {
    top: -1%;
    right: -1%;
    position: absolute;
    text-align: center;
    align-items: center;
  }
</style>
