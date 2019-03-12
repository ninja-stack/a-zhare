<template>
  <v-card color="white">
    <v-layout>
      <v-flex xs12>
        <v-card-title primary-title>
          <div>
            <span class="grey--text">{{ post.title }}</span>
          </div>
        </v-card-title>
        <v-card-text class="subheading">
          <p>{{post.content}}</p>
          <p><v-icon class="mr-1">fas fa-gift</v-icon> {{ post.rewards }}</p>
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
      <v-icon class="mr-1">fas fa-users</v-icon>
      <span>0/50</span>
      <v-spacer></v-spacer>
      <v-btn :to="`${url}/${post.id}`" color="success">{{button}}</v-btn>
    </v-card-actions>
  </v-card>
</template>

<script>
  export default {
    name: 'request-post-card',
    props: [
      'post',
      'button',
      'url'
    ]
  };
</script>

<style scoped lang="scss">
  .v-sheet--offset {
    top: -24px;
    position: relative;
  }
</style>
