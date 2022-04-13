
<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-8 text-2xl">
                Bienvenido(a): {{ form.name }}
            </div>

        </div>

        <div v-if="form.lista_datos_tutor.length>0" class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-3">

            <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                <div class="flex items-center">
                    <div class=" ml-12 text-lg text-gray-600 leading-7 font-semibold">
                        Información relevante
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        {{ form.informacion_relefante }}
                    </div>


                </div>
            </div>

            <div class="p-6 border-t border-gray-200">
                <div class="flex items-center">
                    <div class=" ml-12 text-lg text-gray-600 leading-7 font-semibold">
                        Estatus de tramite
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        <div>
                            <jet-label for="curp" value="Ingresa la curp a consultar"/>
                            <jet-input id="name" type="text" class="mt-1 block w-full" v-model="curp" required
                                       autofocus
                                       autocomplete="name"/>
                            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing" >
                                Consultar
                            </jet-button>
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <div v-else class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2" >
            <div class="flex items-center">
                <div class="my-4 ml-12 text-2xl text-teal-700 leading-7 font-semibold">
                    Aun no hay registro de datos de usted
                </div>

            </div>
            <div class=" my-4 text-2xl text-emerald-600 leading-7 font-semibold">
                <button  style="background-color: #ab8d5d;" class=" mx-36  hover:bg-blue-400  py-1 px-2 text-white font-semibold
                 border border-gray-400 rounded shadow" >
                    <a :href="route('datosTutor.create')">
                        ingresa tus Datos
                    </a>

                </button>
<!--                <inertia-link :href="route('datosTutor.create')" class="bg-blue-500 text-white font-bold py-2 px-4 ">-->
<!--                    ingresa tus Datos-->
<!--                </inertia-link>-->

            </div>

        </div>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import JetLabel from '@/Jetstream/Label.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetButton from '@/Jetstream/Button.vue'

export default defineComponent({
    components: {
        JetLabel,
        JetInput,
        JetButton
    },
    data() {
        return {
            form: this.$inertia.form({
                name: 'Fulano de tal',
                informacion_relefante: 'esta es la información relevantre gawgdviqGLIDGQ.JHG ' +
                    'DFIUWEGD WHIW FGLIU Glfige.fuiEG EFLIU ',
                lista_datos_tutor: []

            })
        }
    }
})
</script>
