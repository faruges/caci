<template>
    <Head title="Welcome"/>

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.user"  class="text-sm text-gray-700 underline">
<!--                Dashboard-->
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 underline">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Entrar
                </Link>
            </template>
        </div>

        <div>
            <div class="flex flex-col items-center justify-center mt-32">
                <!-- Product Card -->
                <div class="flex flex-col shadow-md cursor-pointer w-96 hover:-translate-y-1 duration-300">
                    <!-- Preview -->
                    <div class="inline relative group h-48">
                        <!-- Thumbnail -->
                        <Link :href="'/'">
                            <img :href="'/'" class="absolute rounded-t object-cover h-full w-full"
                                 src="assets/pages/img/login/cdmx3.svg"
                                 alt="Product Preview"/>

                        </Link>




                        <!-- Hover Bar -->
                        <div class="flex flex-row absolute justify-end
                    h-16 w-full bottom-0 px-3 space-x-2
                    bg-none opacity-0 group-hover:opacity-100
                    group-hover:bg-gradient-to-t from-black/20 via-gray-800/20 to-transparent
                    transition-all ease-in-out duration-200 delay-100">

                            <!-- Add to Bookmarks Button -->
<!--                            <button class="bg-gray-50/10 rounded-full-->
<!--                        px-1 h-9 w-9 my-auto hover:bg-gray-50/20-->
<!--                        transition-colors duration-200">-->
<!--                                <i class="mdi mdi-playlist-plus text-xl text-gray-200-->
<!--                            hover:text-white transition-all duration-200"-->
<!--                                   title="Add to Bookmarks"></i>-->
<!--                            </button>-->

                            <!-- Add to Favorites Button -->
<!--                            <button class="bg-gray-50/10 rounded-full-->
<!--                        px-1 h-9 w-9 my-auto hover:bg-gray-50/20-->
<!--                        transition-colors duration-200">-->
<!--                                <i class="mdi mdi-heart text-xl text-gray-200 p-1-->
<!--                            hover:text-white transition-all duration-200"-->
<!--                                   title="Add to Favorites"></i>-->
<!--                            </button>-->
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="flex flex-col bg-white rounded-b p-3">
                        <!-- Title -->
                        <div class="text-sm font-semibold ">
                          Hola somos el CACI, te tienes que registrar, si no tienes una cuenta da click en <br> (Crear cuenta)
                        </div>

                        <!-- Author - Category -->


                        <!-- Price -->
                        <div class="text-sm text-gray-600 font-bold mt-4 mb-1">
                            CACI
                        </div>

                        <!-- Body -->
                        <div class="flex flex-row mt-2">
                            <!-- Detail Column -->
                            <div class="flex flex-col flex-auto">
                                <!-- Rating -->
                                <div class="flex flex-row group">
                                    <i class="mdi mdi-star text-xs text-amber-400
                            hover:text-amber-500 transition-all duration-200"
                                       title="Worst"></i>

                                    <i class="mdi mdi-star text-xs text-amber-400
                            hover:text-amber-500 transition-all duration-200"
                                       title="Bad"></i>

                                    <i class="mdi mdi-star text-xs text-amber-400
                            hover:text-amber-500 transition-all duration-200"
                                       title="Not Bad"></i>

                                    <i class="mdi mdi-star text-xs text-amber-400
                            hover:text-amber-500 transition-all duration-200"
                                       title="Good"></i>

                                    <i class="mdi mdi-star text-xs text-amber-400
                            hover:text-amber-500 transition-all duration-200"
                                       title="Awesome"></i>


                                </div>

                                <!-- Statistic -->

                            </div>

                            <!-- Button Column -->
                            <div class="flex flex-row flex-auto justify-end">
                                <!-- Cart Button -->
                                <a v-if="canRegister" :href="route('register')" class="flex text-xs border px-3 my-auto py-2 mr-2
                        border-amber-500 group hover:bg-amber-500
                        rounded-xss
                        transition-all duration-200">
                                Crear una cuenta
                                    <!-- Icon -->
                                    <i class="mdi mdi-cart-outline text-amber-700
                            group-hover:text-white delay-100"></i>
                                </a>

                                <!-- Preview Link Button -->
                                <a :href="route('login')" class="flex text-xs border px-3 my-auto py-2
                        border-amber-500 group hover:bg-amber-500
                        rounded-xss
                        transition-all duration-200">

                                    <!-- Icon -->
                                    <i class="mdi mdi-eye-outline text-amber-700
                            group-hover:text-white delay-100"></i>

                                    <!-- Text -->
                                    <div class="text-xxs text-amber-700 font-semibold ml-2
                            group-hover:text-white delay-100">
                                    Ingresar
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notes -->

            </div>
        </div>


    </div>
</template>

<style scoped>
.bg-gray-100 {
    background-color: #f7fafc;
    background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
    border-color: #edf2f7;
    border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
    color: #a0aec0;
    color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
    color: #718096;
    color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
    color: #4a5568;
    color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
    color: #1a202c;
    color: rgba(26, 32, 44, var(--tw-text-opacity));
}

/*@media (prefers-color-scheme: dark) {*/
/*    .dark\:bg-gray-800 {*/
/*        background-color: #2d3748;*/
/*        background-color: rgba(45, 55, 72, var(--tw-bg-opacity));*/
/*    }*/

/*    .dark\:bg-gray-900 {*/
/*        background-color: #1a202c;*/
/*        background-color: rgba(26, 32, 44, var(--tw-bg-opacity));*/
/*    }*/

/*    .dark\:border-gray-700 {*/
/*        border-color: #4a5568;*/
/*        border-color: rgba(74, 85, 104, var(--tw-border-opacity));*/
/*    }*/

/*    .dark\:text-white {*/
/*        color: #fff;*/
/*        color: rgba(255, 255, 255, var(--tw-text-opacity));*/
/*    }*/

/*    .dark\:text-gray-400 {*/
/*        color: #cbd5e0;*/
/*        color: rgba(203, 213, 224, var(--tw-text-opacity));*/
/*    }*/
/*}*/

.text-xxs {
    font-size: 0.70rem;
    line-height: 0.90rem;
}

.rounded-xss {
    border-radius: 2px !important;
}
</style>

<script>
import {defineComponent} from 'vue'
import {Head, Link} from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        Head,
        Link,
    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    }
})
</script>
