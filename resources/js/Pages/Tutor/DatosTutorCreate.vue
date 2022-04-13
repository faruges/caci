<template>

    <app-layout title="Datos del tutor">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Formulario para Datos de Tutor
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div>
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                            <div class="mt-8 text-2xl">
                                Bienvenido(a): {{ form.name }}
                            </div>

                        </div>

                        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-3">
                            <div class="p-6">
                                <!--                <div class="flex items-center">-->
                                <!--                    <div class=" ml-12 text-lg text-gray-600 leading-7 font-semibold"><a-->
                                <!--                        href="img/PDF/20_B_AVISO_DE_PRIVACIDAD_SIMPLIFICADO_Tramites_procedimientos_CACI_SAF.pdf">Avisos-->
                                <!--                        de privacidad</a>-->
                                <!--                    </div>-->
                                <!--                </div>-->

                                <div class="ml-12">
                                    <div class="my-2" >
                                        <jet-label for="curp" value="nombre"/>
                                        <jet-input id="name_" type="text" class="mt-1 block w-full" v-model="curp"
                                                   required
                                                   autofocus
                                                   autocomplete="name"/>
                                    </div>
                                    <div class="my-4" >
                                        <jet-label for="curp" value="Apellido Paterno"/>
                                        <jet-input id="Apellido_paterno" type="text" class="mt-1 block w-full" v-model="curp"
                                                   required
                                                   autofocus
                                                   autocomplete="apellido_paterno"/>
                                    </div>

                                    <div class="my-4" >
                                        <jet-label for="curp" value="Apellido Materno"/>
                                        <jet-input id="Apellido_materno" type="text" class="mt-1 block w-full" v-model="curp"
                                                   required
                                                   autofocus
                                                   autocomplete="apellido materno"/>
                                    </div>
                                </div>
                            </div>

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
                                            <jet-input id="name" type="text" class="mt-1 block w-full" v-model="curp"
                                                       required
                                                       autofocus
                                                       autocomplete="name"/>
                                            <jet-button :class="{ 'opacity-25': form.processing }"
                                                        :disabled="form.processing">
                                                Consultar
                                            </jet-button>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import JetLabel from '@/Jetstream/Label.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetButton from '@/Jetstream/Button.vue'

export default defineComponent({
    components: {
        JetLabel,
        JetInput,
        JetButton,
        AppLayout
    },
    data() {
        return {
            form: this.$inertia.form({
                name: 'Juan Charrasquiado',
                informacion_relefante: 'esta es la información relevantre gawgdviqGLIDGQ.JHG DFIUWEGD WHIW FGLIU Glfige.fuiEG EFLIU '

            })
        }
    }
})
</script>
