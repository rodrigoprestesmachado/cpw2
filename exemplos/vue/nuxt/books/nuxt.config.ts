export default defineNuxtConfig({
    devtools: { enabled: true },

    css: [
        'bulma/css/bulma.css',
        '@fortawesome/fontawesome-free/css/all.css'
    ],

    components: [
        {
            path: '~/components',
            pathPrefix: false,
        },
    ],

    modules: ["@samk-dev/nuxt-vcalendar"]
});