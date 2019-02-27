<template>
  <v-flex xs3>
    <v-card>
      <v-img v-if="type === 'gold'"
        src="https://i.imgur.com/KcXqQkD.png"
      ></v-img>
      <v-img v-else-if="type === 'silver'"
        src="https://i.imgur.com/CMQhRAP.png"
      ></v-img>
      <v-img v-else
        src="https://i.imgur.com/0ZcyBri.png"
      ></v-img>
      <v-card-text>
        <span class="grey--text">{{ text }}</span>
      </v-card-text>
    </v-card>
  </v-flex>
</template>

<script>
export default {
  name: 'profile-medal',
  props: [
    'text',
    'type'
  ]
}
</script>

<style lang="scss">

</style>
