<template>
  <v-tab-item
    key="request"
  >
    <v-card flat>
      <v-form
        ref="formRequest"
        v-model="validRequest"
        lazy-validation
      >
        <v-flex>
          <v-text-field
            label="Title"
            placeholder="Input your  title"
            v-model="title"
            :rules="titleRules"
          ></v-text-field>
          
          <v-textarea
            outline
            name="input-7-4"
            label="Decription"
            v-model="desc"
            :rules="descRules"
          ></v-textarea>

          <v-text-field
            label="Count"
            placeholder="Input your count"
            v-model="count"
            :rules="countRules"
          ></v-text-field>
          <v-layout>
            <v-flex xs6>
            <v-menu
              ref="date1"
              v-model="date1"
              :close-on-content-click="false"
              :nudge-right="40"
              lazy
              transition="scale-transition"
              offset-y
              full-width
              max-width="290px"
              min-width="290px"
            >
              <v-text-field
                slot="activator"
                v-model="dateFrom"
                label="Date From"
                hint="MM/DD/YYYY format"
                persistent-hint
                prepend-icon="event"
                @blur="date = parseDate(dateFrom)"
                :rules="dateFromRules"
              ></v-text-field>
              <v-date-picker v-model="date" no-title @input="date1 = false"></v-date-picker>
            </v-menu>
          </v-flex>
            
          <v-flex xs6>
            <v-menu
              ref="date2"
              v-model="date2"
              :close-on-content-click="false"
              :nudge-right="40"
              lazy
              transition="scale-transition"
              offset-y
              full-width
              max-width="290px"
              min-width="290px"
            >
              <v-text-field
                slot="activator"
                v-model="dateTo"
                label="Date To"
                hint="MM/DD/YYYY format"
                persistent-hint
                prepend-icon="event"
                @blur="date = parseDate(dateTo)"
                :rules="dateToRules"
              ></v-text-field>
              <v-date-picker v-model="date" no-title @input="date2 = false"></v-date-picker>
            </v-menu>
          </v-flex>
          </v-layout>

          <v-text-field
            label="Reward"
            placeholder="Input your reward"
          ></v-text-field>

          <v-card-actions>
            <v-btn 
            :disabled="!validRequest"
            color="success"
            @click="validateRequest">
              Submit
            </v-btn>
          </v-card-actions>
        </v-flex>
      </v-form>
    </v-card>
  </v-tab-item>
</template>

<script>
export default {
    name:"create-request-tab-menu",
		data: vm => ({
			validRequest: true,
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
