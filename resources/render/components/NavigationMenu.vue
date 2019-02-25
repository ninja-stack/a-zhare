<template>
  <div>
    <side-bar/>
    <v-toolbar
      id="toolbar"
      app
      flat
      prominent
    >
      <div class="v-toolbar-title">
        <v-toolbar-title class="tertiary--text font-weight-light">
          <v-btn
            v-if="responsive"
            class="default v-btn--simple"
            dark
            icon
            @click.stop="onClickBtn"
          >
          <v-icon color="blue-grey darken-2">view_list</v-icon>
          </v-btn>
          {{name}}
        </v-toolbar-title>
      </div>

      <v-spacer />
      <v-toolbar-items>
        <v-btn icon>
          <v-menu
            bottom
            left
            content-class="dropdown-menu"
            transition="slide-y-transition">
            <router-link
              v-ripple
              slot="activator"
              class="toolbar-items"
              to="/"
            >
              <v-badge
                color="error"
                overlap
              >
                <template slot="badge">
                  {{ notifications.length }}
                </template>
                <v-icon color="tertiary">notifications</v-icon>
              </v-badge>
            </router-link>
            <v-card>
              <v-list dense>
                <v-list-tile
                  v-for="notification in notifications"
                  :key="notification"
                  @click="onClick"
                >
                  <v-list-tile-title
                    v-text="notification"
                  />
                </v-list-tile>
              </v-list>
            </v-card>
          </v-menu>
        </v-btn>
        <v-btn icon>
          <router-link
            v-ripple
            class="toolbar-items"
            to="/user-profile"
          >
            <v-icon color="tertiary">account_circle</v-icon>
          </router-link>
        </v-btn>
      </v-toolbar-items>
    </v-toolbar>
  </div>
</template>

<script>
  import SideBar from './SideBar';

  export default {
    components: {
      SideBar
    },
    name: 'navigation-menu',
    props: ['name'],
    data: () => ({
      notifications: [
        'Mike, John responded to your email',
        'You have 5 new tasks',
        'You\'re now a friend with Andrew',
        'Another Notification',
        'Another One'
      ],
      responsive: false,
      responsiveInput: false
    }),
    mounted () {
      this.onResponsiveInverted()
      window.addEventListener('resize', this.onResponsiveInverted)
    },
    beforeDestroy () {
      window.removeEventListener('resize', this.onResponsiveInverted)
    },
    methods: {
      onClickBtn () {
        this.$store.dispatch('layout/setDrawer', !this.$store.getters['layout/drawerState']) 
      },
      onClick () {
        //
      },
      onResponsiveInverted () {
        if (window.innerWidth < 991) {
          this.responsive = true
          this.responsiveInput = false
        } else {
          this.responsive = false
          this.responsiveInput = true
        }
      }
    }
  };
</script>

<style scoped lang="scss">
#toolbar a {
  text-decoration: none;
  color: gray;
}
</style>
