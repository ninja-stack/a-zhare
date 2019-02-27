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
          <v-chip label outline color="info">REQUEST</v-chip>
          <v-icon class="mr-1" color="#E65100">fas fa-gift</v-icon>
          <span>Free C# ebook</span>
          <v-spacer></v-spacer>
          <v-btn color="success">Apply</v-btn>
    </v-card-actions>
  </v-card>
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
