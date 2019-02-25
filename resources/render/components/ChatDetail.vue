<template>
  <v-flex xs9 sm9>
		<v-card>
			<v-toolbar color="cyan" dark>
				<v-toolbar-title>{{ name }}</v-toolbar-title>
			</v-toolbar>
		
			<chat-detail-chat-panel />
			<chat-input-interface />
		</v-card>
	</v-flex>
</template>

<script>
	import ChatDetailChatPanel from '../components/ChatDetailChatPanel';
	import ChatInputInterface from '../components/ChatInputInterface';

  export default {
		name: 'chat-detail',
		components: {
			ChatDetailChatPanel,
			ChatInputInterface,
		},
		props: [
			'name'
		]
  }
</script>

<style scoped>

</style>
