import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import Default from './layout/wrapper/master.vue'
import Auth from './layout/wrapper/AuthMaster.vue'
import Admin from './layout/wrapper/ADMIN.vue'
import Client from './layout/wrapper/MasterClient.vue'
import Toaster from "@meforma/vue-toaster";


const app = createApp(App)
app.use(Toaster, {
    position: "top-right",
  });
app.use(router)
app.component("default-layout", Default);
app.component("auth-layout", Auth);
app.component("admin-layout", Admin);
app.component("client-layout", Client);
app.mount("#app")
