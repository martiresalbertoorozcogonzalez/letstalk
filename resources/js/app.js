require("./bootstrap");

import Vue from "vue";
import Vuex from "vuex";
import BootstrapVue from "bootstrap-vue";

Vue.use(BootstrapVue);
Vue.use(Vuex);

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
        messages: []
    },
    mutations: {
        newMessagesList(state, messages) {
            state.messages = messages;
        },
        addMessages(state, message) {
            state.messages.push(message);
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
