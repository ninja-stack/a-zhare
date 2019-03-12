<template>
  <v-card color="white">
    <v-layout>
      <v-flex xs12>
        <v-card-text class="subheading">
          <p style="white-space: pre;">
          {{post.content}}
          </p>
        </v-card-text>
      </v-flex>
    </v-layout>
    <v-divider></v-divider>
    <v-card-actions>
      <v-list-tile-avatar>
        <v-img src="https://via.placeholder.com/150"></v-img>
      </v-list-tile-avatar>
      <v-list-tile-content>
        {{ post.poster.name }}
      </v-list-tile-content>
      <v-spacer></v-spacer>
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
