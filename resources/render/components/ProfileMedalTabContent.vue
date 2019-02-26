<template>
  <v-card flat>
    <v-layout>
      <profile-medal text="10100 Post" type="gold"/>
      <profile-medal text="100 Request support" type="silver"/>
      <profile-medal text="100 Request support" type="silver"/>
      <profile-medal text="100 Request support" type="bronze"/>
    </v-layout>
  </v-card>
</template>

<script>
import ProfileMedal from '../components/ProfileMedal';
export default {
  name: 'profile-medal-tab-content',
  components: {
    ProfileMedal
  }
}
</script>

<style lang="scss">

</style>
