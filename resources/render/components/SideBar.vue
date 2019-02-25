<template>
  <v-navigation-drawer
    id="app-drawer"
    v-model="inputValue"
    app
    dark
    floating
    persistent
    mobile-break-point="991"
    width="260"
  >
    <v-layout
      class="fill-height"
      tag="v-list"
      column
    >
      <v-list-tile avatar>
        <v-list-tile-avatar
          color="white"
        >
          <v-img
            :src="logo"
            height="34"
            contain
          />
        </v-list-tile-avatar>
        <v-list-tile-title class="title">
          Vuetify MD
        </v-list-tile-title>
      </v-list-tile>
      <v-divider/>
      
      <v-list-tile
        v-for="(link, i) in links"
        :key="i"
        :to="link.to"
        :active-class="$store.getters['layout/colorState']"
        avatar
        class="v-list-item"
      >
        <v-list-tile-action>
          <v-icon>{{ link.icon }}</v-icon>
        </v-list-tile-action>
        <v-list-tile-title
          v-text="link.text"
        />
      </v-list-tile>
    </v-layout>
  </v-navigation-drawer>
</template>

<script>
export default {
  data: () => ({
    logo: 'https://via.placeholder.com/150',
    links: [
      {
        to: '/',
        icon: 'dashboard',
        text: 'Dashboard'
      },
      {
        to: '/user-profile',
        icon: 'person',
        text: 'User Profile'
      },
      {
        to: '/community',
        icon: 'group_work',
        text: 'Community'
      },
      {
        to: '/notifications',
        icon: 'notifications',
        text: 'Notifications'
      }
    ],
    responsive: false,
  }),
  computed: {
    inputValue: {
      get () {
        return this.$store.getters['layout/drawerState'];
      },
      set (val) {
        this.$store.dispatch('layout/setDrawer', val) 
      }
    },
  },
  mounted () {
    this.onResponsiveInverted()
    window.addEventListener('resize', this.onResponsiveInverted)
  },
  beforeDestroy () {
    window.removeEventListener('resize', this.onResponsiveInverted)
  },
  methods: {
    onResponsiveInverted () {
      if (window.innerWidth < 991) {
        this.responsive = true
      } else {
        this.responsive = false
      }
    }
  }
}
</script>

<style scoped lang="scss">
 #app-drawer {
    .v-image__image--contain {
      top: 9px;
      height: 60%;
    }
  }
</style>
