<template>
  <v-flex xs9 sm9>
		<v-card>
			<v-toolbar color="cyan" dark>
				<v-toolbar-title>{{ name }}</v-toolbar-title>
			</v-toolbar>
		
			<chat-detail-chat-panel />
			<post-card-input/>
		</v-card>
	</v-flex>
</template>

<script>
	import PostCardInput from '../components/PostCardInput';
	import ChatDetailChatPanel from '../components/ChatDetailChatPanel';


  export default {
		name: 'chat-detail',
		components: {
			PostCardInput,
			ChatDetailChatPanel,
		},
		props: [
			'name'
		]
  }
</script>

<style scoped>

</style>
