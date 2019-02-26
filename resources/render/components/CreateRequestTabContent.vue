<template>
  <v-card flat>
    <v-form
      ref="form"
      v-model="validRequest"
      lazy-validation
    >
      <v-card-text>
      <v-text-field
        label="Title"
        placeholder="Input your title"
        v-model="title"
        :rules="titleRules"
      ></v-text-field>

      <v-textarea
        name="input-7-4"
        label="Description"
        v-model="description"
        :rules="descriptionRules"
      ></v-textarea>

      <v-text-field
        label="Count"
        placeholder="Input your count"
        v-model="count"
        :rules="countRules"
      ></v-text-field>

      <v-layout row>
        <v-flex xs6>
          <v-menu
            ref="dateFromMenu"
            v-model="dateFromMenu"
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
              :rules="dateFromRules"
            ></v-text-field>
            <v-date-picker
              v-model="dateFrom" no-title
              @input="dateFromMenu = false"
            ></v-date-picker>
          </v-menu>
        </v-flex>

        <v-flex xs6>
          <v-menu
            ref="dateToMenu"
            v-model="dateToMenu"
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
              :rules="dateToRules"
            ></v-text-field>
            <v-date-picker
              v-model="dateTo" no-title
              @input="dateToMenu = false"
            />
          </v-menu>
        </v-flex>
      </v-layout>

      <v-text-field
        label="Reward"
        placeholder="Input your reward"
      ></v-text-field>
      </v-card-text>

      <v-card-actions>
        <v-btn
          :disabled="!validRequest"
          color="success"
          @click="validateRequest"
        >
          Submit
        </v-btn>
      </v-card-actions>
    </v-form>
  </v-card>
</template>

<script>
  export default {
    name: 'create-request-tab-content',
    data() {
      return {
        validRequest: true,
        dateTo: new Date().toISOString().substr(0, 10),
        dateFrom: new Date().toISOString().substr(0, 10),
        dateFromMenu: false,
        dateToMenu: false,
        title: '',
        titleRules: [
          v => !!v || 'Title is required'
        ],
        description: '',
        descriptionRules: [
          v => !!v || 'Description is required'
        ],
        count: '',
        countRules: [
          v => !!v || 'Count is required'
        ],
        dateFromRules: [
          v => !!v || 'Date from is required'
        ],
        dateToRules: [
          v => !!v || 'Date to is required'
        ]
      };
    },
    methods: {
      validateRequest() {
        this.$refs.form.validate();
      }
    }
  };
  ``;
</script>

<style scoped lang="scss">

</style>
