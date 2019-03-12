<template>
  <v-container fluid>
    <navigation-menu name="SEARCH COMMUNITY"/>
    <v-content>
      <v-container fill-height fluid grid-list-xl>
        <v-layout row wrap>
           <v-flex xs12 pt-0>
            <v-form>
              <v-text-field
                flat
                prepend-inner-icon="search"
                v-model="query"
                label="Search"
              ></v-text-field>
              <v-btn @click="submit" color="info">submit</v-btn>
            </v-form>
          </v-flex>
          <v-flex xs12>

            <v-alert
              :value="$store.getters['search-community/isSuccess']"
              type="success"
            >
              {{ $store.getters['search-community/successMessage'] }}
            </v-alert>

            
            <v-data-table
              :headers="headers"
              :items="$store.getters['search-community/communities']"
              :expand="true"
              :total-items="-1"
              :hide-actions="true"
              :disable-initial-sort="true"
              item-key="name"
            >
              <template slot="items" slot-scope="props">
                <tr @click="props.expanded = !props.expanded">
                  <td>{{ props.item.name }}</td>
                  <td class="text-xs-right">{{ props.item.created_at }}</td>
                  <td class="text-xs-right">{{ props.item.owner.name }}</td>
                  <td class="text-xs-right">
                    <v-btn color="success" @click="join(props.item.id)">
                      <v-icon left>add</v-icon>Join
                    </v-btn>
                  </td>
                </tr>
              </template>
              <template slot="expand" slot-scope="props">
                <v-card flat>
                  <v-card-text>{{props.item.description}}</v-card-text>
                </v-card>
              </template>
            </v-data-table>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
  </v-container>
</template>

<script>
  import NavigationMenu from '../components/NavigationMenu';

  export default {
    components: {
      NavigationMenu
    },
    data: () => ({
      query: '',

      expand: false,
        headers: [
          {
            text: 'Name',
            align: 'left',
            value: 'name'
          },
          { text: 'Created', value: 'created' },
          { text: 'Owner', value: 'owner' },
          { text: 'Action', value: 'action' },
        ]
    }),
    mounted() {
      this.onload(this.query);
    },
    methods: {
      async onload(query) {
        await this.$store.dispatch('search-community/search', query);
      },
      async join(id) {
        const token = localStorage.getItem('token');
        await this.$store.dispatch('search-community/join', {id, token});
      },
      submit () {
        const query = this.query;
        this.onload(query);
      }
    }
  }

</script>

<style scoped lang="scss">

</style>

