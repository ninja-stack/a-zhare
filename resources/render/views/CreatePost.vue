<template>
  <v-container fluid>
    <navigation-menu name="CREATE POST"/>
    <v-content>
      <v-container fill-height fluid grid-list-xl class="pa-0">
				<v-layout>
					<v-flex>
						<v-tabs grow >
							<v-tab
								key="post">
								Post
							</v-tab>
							<v-tab
								key="request">
								Request
							</v-tab>
							<create-post-tab-menu />
							<create-request-tab-menu />
						</v-tabs>
					</v-flex>
				</v-layout>
      </v-container>
    </v-content>
  </v-container>
</template>

<script>
	import NavigationMenu from '../components/NavigationMenu';
	import CreatePostTabMenu from '../components/CreatePostTabMenu';
	import CreateRequestTabMenu from '../components/CreateRequestTabMenu';

  export default {
    components: {
			NavigationMenu,
			CreatePostTabMenu,
			CreateRequestTabMenu
		},
		data: vm => ({
			valid: true,
			validRequest: true,
      post: '',
      postRules: [
        v => !!v || 'Content is required'
			],
			items: ['foo', 'bar', 'fizz', 'buzz'],
			value: ['foo', 'bar', 'fizz', 'buzz'],
			date: new Date().toISOString().substr(0, 10),
			dateTo: vm.formatDate(new Date().toISOString().substr(0, 10)),	
			dateFrom: vm.formatDate(new Date().toISOString().substr(0, 10)),	
      date1: false,
			date2: false,
			title:'',
			titleRules:[
				v => !!v || 'Title is required'
			],
			desc:'',
			descRules: [
				v => !!v || 'Description is required'
			],
			count:'',
			countRules:[
				v => !!v || 'Count is required'
			],
			dateFromRules: [
				v => !!v || 'Date from is required'
			],
			dateToRules: [
				v => !!v || 'Date to is required'
			]
		}),
		methods: {
      validate () {
        if (this.$refs.form.validate()) {
          this.snackbar = true
        }
			},
			validateRequest () {
				console.log(this.$refs.formRequest,"as");
        if (this.$refs.formRequest.validate()) {
          this.snackbar = true
        }
			},
			formatDate (date) {
        if (!date) return null

        const [year, month, day] = date.split('-')
        return `${month}/${day}/${year}`
      },
      parseDate (date) {
        if (!date) return null

        const [month, day, year] = date.split('/')
        return `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`
      }
		},
		computed: {
      computedDateFormatted () {
        return this.formatDate(this.date)
      }
    },

    watch: {
      date (val) {
				this.dateFto = this.formatDate(this.date)
				this.dateFrom = this.formatDate(this.date);
      }
    },
  }
</script>

<style scoped lang="scss">

</style>