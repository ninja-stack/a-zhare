<template>
  <v-flex xs6 sm3>
		<v-card>
			<v-toolbar color="cyan" dark>
				<v-text-field
					label="Search"
				></v-text-field>

				<v-spacer></v-spacer>

				<v-btn icon>
					<v-icon>search</v-icon>
				</v-btn>
			</v-toolbar>

			<v-list three-line>
				<template v-for="(chatlist, index) in chatlists">
					<v-divider
						v-if="chatlist.divider"
						:key="index"
						:inset="chatlist.inset"
					></v-divider>

					<v-list-tile
						v-else
						:key="chatlist.title"
						avatar
						@click=""
					>
						<v-list-tile-avatar>
							<img :src="chatlist.avatar">
						</v-list-tile-avatar>

						<v-list-tile-content>
							<v-list-tile-title v-html="chatlist.title"></v-list-tile-title>
							<v-list-tile-sub-title v-html="chatlist.subtitle"></v-list-tile-sub-title>
						</v-list-tile-content>

						<v-badge overlap>
							<span slot="badge">3</span>
						</v-badge>
					</v-list-tile>
				</template>
			</v-list>
		</v-card>
	</v-flex>
</template>

<script>
  export default {
		name: 'chat-list',
		data: () => ({
			chatlists: [
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg',
					title: 'Brunch this weekend?',
					subtitle: "<span class='text--primary'>Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?"
				},
				{ divider: true, inset: true },
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg',
					title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
					subtitle: "<span class='text--primary'>to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend."
				},
				{ divider: true, inset: true },
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg',
					title: 'Oui oui',
					subtitle: "<span class='text--primary'>Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?"
				},
				{ divider: true, inset: true },
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg',
					title: 'Birthday gift',
					subtitle: "<span class='text--primary'>Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?"
				},
				{ divider: true, inset: true },
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg',
					title: 'Recipe to try',
					subtitle: "<span class='text--primary'>Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos."
				},
				{ divider: true, inset: true },
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg',
					title: 'Recipe to try 2',
					subtitle: "<span class='text--primary'>Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos."
				},
				{ divider: true, inset: true },
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg',
					title: 'Recipe to try 3',
					subtitle: "<span class='text--primary'>Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos."
				}
			]
      })
  }
</script>

<style scoped>

</style>
