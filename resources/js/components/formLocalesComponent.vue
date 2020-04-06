<template>
    <v-app>
            <v-card
            height="100%"
            class="overflow-hidden"
            >
            <v-navigation-drawer
                :color="color"
                :expand-on-hover="expandOnHover"
                :mini-variant="miniVariant"
                :right="right"
                absolute
                dark
            >
                <v-list
                dense
                nav
                class="py-0"
                >
                <v-list-item two-line :class="miniVariant && 'px-0'">
                    <v-list-item-avatar>
                    <img src="https://randomuser.me/api/portraits/men/81.jpg">
                    </v-list-item-avatar>

                    <v-list-item-content>
                    <v-list-item-title>Datacenter</v-list-item-title>
                    <v-list-item-subtitle>Uriel G</v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>

                <v-divider></v-divider>

                <v-list-item
                    v-for="item in items"
                    :key="item.title"
                    link
                >
                    <v-list-item-icon>
                    <v-icon>{{ item.icon }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                    <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                </v-list>
            </v-navigation-drawer>
            </v-card>
    </v-app>
</template>

<script>
    export default {
    // Vuetify components provide
    // a theme variable that is
    // used to determine dark
    // inject: ['theme'],

    data: () => ({
        items: [
          { title: 'Dashboard', icon: 'mdi-view-dashboard' },
          { title: 'Photos', icon: 'mdi-image' },
          { title: 'About', icon: 'mdi-help-box' },
        ],
        color: 'teal',
        right: false,
        miniVariant: true,
        expandOnHover: true,
        background: false,
    }),

    mounted () {
    //   this.types = Object.keys(this.$refs.skeleton.rootTypes)
    },
  }
</script>
