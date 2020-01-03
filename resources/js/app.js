require("./bootstrap");

import Vue from "vue";
import Vuex from "vuex";
import BootstrapVue from "bootstrap-vue";

Vue.use(BootstrapVue);
Vue.use(Vuex);

Vue.component(
    "contact-form-component",
    require("./components/ContactFormComponent.vue").default
);

Vue.component(
    "profile-form-component",
    require("./components/ProfileFormComponent.vue").default
);

Vue.component(
    "status-component",
    require("./components/StatusComponent.vue").default
);

Vue.component(
    "messenger-component",
    require("./components/MessengerComponent.vue").default
);

Vue.component(
    "message-conversation-component",
    require("./components/MessageConversationComponent.vue").default
);

Vue.component(
    "contact-component",
    require("./components/ContactComponent.vue").default
);

Vue.component(
    "contact-list-component",
    require("./components/ContactListComponent.vue").default
);

Vue.component(
    "active-conversation-component",
    require("./components/ActiveConversationComponent.vue").default
);

const store = new Vuex.Store({
    state: {
        conversations: [],
        messages: [],
        selectedConversation: null,
        querySearch: ""
    },
    mutations: {
        newMessagesList(state, messages) {
            state.messages = messages;
        },
        addMessages(state, message) {
            state.messages.push(message);
        },
        selectConversation(state, conversation) {
            state.selectedConversation = conversation;
        },
        newQuerySearch(state, newValue) {
            state.querySearch = newValue;
        },
        newConversationsList(state, conversations) {
            state.conversations = conversations;
        }
    },
    actions: {
        getMessages(context, conversation) {
            axios
                .get(`/api/messages?contact_id=${conversation.contact_id}`)
                .then(response => {
                    context.commit("selectConversation", conversation);
                    context.commit("newMessagesList", response.data);
                });
        },
        getConversations(context, conversation) {
            axios.get("/api/conversations").then(response => {
                context.commit("newConversationsList", response.data);
            });
        }
    },
    getters: {
        conversationsFiltered(state) {
            return state.conversations.filter(conversation =>
                conversation.contact_name
                    .toLowerCase()
                    .includes(state.querySearch.toLowerCase())
            );
        }
    }
});

const app = new Vue({
    el: "#app",
    store,
    methods: {
        logout() {
            document.getElementById("logout-form").submit();
        }
    }
});
