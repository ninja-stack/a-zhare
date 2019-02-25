<template>
	<v-list three-line>
		<template v-for="(chat, index) in chats">

			<v-list-tile 
				v-if="chat.type"
				:key="index"
				avatar
				@click=""
				class="ma-2"
				style="background: #00bcd4; border-radius: 15px;"
			>
				<v-list-tile-avatar>
					<img :src="chat.avatar">
				</v-list-tile-avatar>

				<v-list-tile-content>
					<v-list-tile-sub-title v-html="chat.subtitle"></v-list-tile-sub-title>
				</v-list-tile-content>

			</v-list-tile>

			<v-list-tile 
				v-else
				:key="index"
				avatar
				@click=""
				class="ma-2"
				style="background: #dee4ed; border-radius: 15px;"
			>
				<v-list-tile-content>
					<v-list-tile-sub-title>
						<v-container fluid pa-0>
						<v-layout column>
							<v-flex xs12 text-xs-right>
								{{chat.subtitle}}
							</v-flex>
						</v-layout>
						</v-container>
					</v-list-tile-sub-title>
				</v-list-tile-content>

				<v-list-tile-avatar>
					<img :src="chat.avatar">
				</v-list-tile-avatar>

			</v-list-tile>
		</template>
	</v-list>
</template>

<script>
  export default {
		name: "chat-detail-chat-panel",
		data: () => ({
			chats: [
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg',
					subtitle: "I'll be in your neighborhood doing errands this weekend. Do you want to hang out?",
					type: true,
				},
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg',
					subtitle: "Wish I could come, but I'm out of town this weekend.",
					type: false,
				},
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg',
					subtitle: "Do you have Paris recommendations? Have you ever been?",
					type: true,
				},
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg',
					subtitle: "Have any ideas about what we should get Heidi for her birthday?",
					type: false,
				},
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg',
					subtitle: "We should eat this: Grate, Squash, Corn, and tomatillo Tacos.",
					type: true,
				},	
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg',
					subtitle: "We should eat this: Grate, Squash, Corn, and tomatillo Tacos.",
					type: false,
				},
				{
					avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg',
					subtitle: "We should eat this: Grate, Squash, Corn, and tomatillo Tacos.",
					type: true,
				}
			]
		})
  };
</script>

<style scoped lang="scss">

</style>
