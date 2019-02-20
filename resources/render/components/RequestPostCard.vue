<template>
  <v-flex xs12 sm12 pt-2>
    <v-card color="#ECEFF1">
      <v-card-title primary-title>
        <div>
          <span class="red--text">Tokyo Blockchain Community</span>
          <h3 class="headline mb-0">Blockchain Seminar</h3>
          <div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</div>
        </div>
      </v-card-title>
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
          </v-layout>
        </v-list-tile>
      </v-card-actions>
    </v-card>
  </v-flex>
</template>

<script>
  export default {
    name: 'request-post-card',
    props: [
    ]
  };
</script>

<style scoped lang="scss">

</style>
