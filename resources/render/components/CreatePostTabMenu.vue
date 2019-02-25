<template>
	<v-tab-item
		key="post"
	>
		<v-card flat>
			<v-form
				ref="form"
				v-model="valid"
				lazy-validation
			>
				<v-textarea
				outline
				name="content"
				label="What do you want to share?"
				v-model="post"
				:rules="postRules"></v-textarea>

				<v-flex>
					<v-select
						v-model="value"
						:items="items"
						attach
						chips
						label="Choose Community"
						multiple
					></v-select>
				</v-flex>

				<v-card-actions>
					<v-btn 
					:disabled="!valid"
					color="success"
					@click="validate">
						Submit
					</v-btn>
				</v-card-actions>
			</v-form>
		</v-card>
	</v-tab-item>
</template>

<script>
export default {
	name:"create-post-tab-menu",
	data: () => ({
		valid: true,
		post: '',
		postRules: [
			v => !!v || 'Content is required'
		],
		items: ['foo', 'bar', 'fizz', 'buzz'],
		value: ['foo', 'bar', 'fizz', 'buzz'],
	}),
		methods: {
      validate () {
        if (this.$refs.form.validate()) {
          this.snackbar = true
        }
			},
		}
}
</script>

<style lang="scss">

</style>
