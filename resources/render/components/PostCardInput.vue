<template>
  <v-flex xs12>
    <v-card>
      <v-form>
        <v-textarea></v-textarea>
      </v-form>
      <v-card-actions>
        <v-spacer></v-spacer>
        <v-btn flat class="primary">Submit</v-btn>
      </v-card-actions>
    </v-card>
  </v-flex>
</template>

<script>
  export default {
    name: 'post-card-input',
    props: [
    ]
  };
</script>

<style scoped lang="scss">

</style>