<template>
  <v-flex>
    <v-card>
      <v-toolbar color="#424242" dark>
        <v-toolbar-title>Request responder list</v-toolbar-title>
      </v-toolbar>
      <v-list>
        <v-list-tile
          v-for="applicant of $store.getters['applicants/getApplicants']" :key="applicant.id"
            :to="{name: 'applicants', params: {id: applicant.id}}"
          avatar
        >      
          <v-list-tile-avatar>
            <img src='https://cdn.vuetifyjs.com/images/lists/1.jpg' />
          </v-list-tile-avatar>
        <v-list-tile-title>
          {{ applicant.name }}
        </v-list-tile-title >

        <v-list-tile-action class="mr-3">
          <v-btn color='#424242' dark>Accept</v-btn>
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
  },
  async mounted () {
 
    const token = localStorage.getItem('token')
    const postId='2';

    await this.$store.dispatch('applicants/getApplicants', postId);
    this.isProccesing = false;
  },
}
</script>
 
<style lang="scss" scoped>
 
</style>
 