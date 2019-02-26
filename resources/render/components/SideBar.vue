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
      <v-list-tile>
        <v-list-tile-content>
          <v-list-tile-title>Community</v-list-tile-title>
        </v-list-tile-content>

        <v-list-tile-action>
          <router-link to="/create-community">
            <v-btn class="create-btn" small color="success">New</v-btn>
          </router-link>
        </v-list-tile-action>
      </v-list-tile>

        <v-list-tile>
          <v-list-tile-content>
            <v-list-tile-title>Post</v-list-tile-title>
          </v-list-tile-content>

          <v-list-tile-action>
            <router-link to="/new-post">
              <v-btn class="create-btn" small color="success">New</v-btn>
            </router-link>
          </v-list-tile-action>
        </v-list-tile>
      <v-divider/>
      <div
        v-for="(link, i) in links"
        :key="i"
        
      >
        <template v-if="link.to === '/community'" >
          <v-list-group value="true">
            <v-list-tile
              avatar
              class="v-list-item"
              slot="activator"
            >
              <v-list-tile-action>
                <v-icon>{{ link.icon }}</v-icon>
              </v-list-tile-action>
              <v-list-tile-title
                v-text="link.text"
              />
            </v-list-tile>
            
            <v-list-tile 
              v-for="community of $store.getters['layout/getCommunities']" :key="community.id"
              :to="{name: 'community', params: {slug: community.slug}}"
              :active-class="$store.getters['layout/colorState']"
            >
              <v-list-tile-title>
                {{ community.name }}
              </v-list-tile-title>
            </v-list-tile>
          </v-list-group>
        </template>

        <template v-else>
          <v-list-tile
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
        </template>
      </div>
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
        to: '/profile',
        icon: 'person',
        text: 'User Profile'
      },
      {
        to: '/community',
        icon: 'group_work',
        text: 'Community',
        child: {

        }
      },
      {
        to: '/chat',
        icon: 'chat',
        text: 'Chat'
      },
      {
        to: '/logout',
        icon: 'exit_to_app',
        text: 'Logout'
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

  async mounted () {
    this.onResponsiveInverted();
    window.addEventListener('resize', this.onResponsiveInverted);

    const token = localStorage.getItem('token')

    await this.$store.dispatch('layout/getCommunities', token);
    this.isProccesing = false;
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
.create-btn {
  min-width: 50px;
}

a {
  text-decoration: none;
}
</style>
