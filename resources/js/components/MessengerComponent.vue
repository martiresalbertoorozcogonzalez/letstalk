<template>
  <b-container fluid style="height: calc(100vh - 56px);">
    <b-row no-gutters>
      <b-col cols="4">
        <contact-list-component @conversationSelected="changeActiveConversation($event)"></contact-list-component>
      </b-col>

      <b-col cols="8">
        <active-conversation-component
          v-if="selectedConversation"
          :contact-id="selectedConversation.contact_id"
          :contact-name="selectedConversation.contact_name"
          :messages="messages"
          @messageCreated="addMessage($event)"
        ></active-conversation-component>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
export default {
  props: {
    userId: Number
  },
  data() {
    return {
      selectedConversation: null,
      messages: []
    };
  },
  mounted() {
    Echo.channel(`users.${this.userId}`).listen("MessageSent", data => {
      console.log(message);
      const message = data.message;
      this.addMessage(message);
    });
  },
  methods: {
    changeActiveConversation(conversation) {
      this.selectedConversation = conversation;
      this.getMessages();
    },
    getMessages() {
      axios
        .get(`/api/messages?contact_id=${this.selectedConversation.contact_id}`)
        .then(response => {
          // console.log(response.data);
          this.messages = response.data;
        });
    },
    addMessage(message) {
      message.writen_by_me = this.userId == message.from_id;
      this.messages.push(message);
    }
  }
};
</script>
