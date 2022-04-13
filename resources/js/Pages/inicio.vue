<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-8 text-2xl">
                Bienvenido(a): {{ form.name }}
            </div>

        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-3">
            <div class="p-6">
                <div class="flex items-center">
                    <div class=" ml-12 text-lg text-gray-600 leading-7 font-semibold"><a
                        href="img/PDF/20_B_AVISO_DE_PRIVACIDAD_SIMPLIFICADO_Tramites_procedimientos_CACI_SAF.pdf">Avisos
                        de privacidad</a>
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        Atención
                        Estos datos son privados solo la madre, padre o persona tutora es responsable de la información
                        capturada.
                    </div>

                    <a href="img/PDF/20_B_AVISO_DE_PRIVACIDAD_SIMPLIFICADO_Tramites_procedimientos_CACI_SAF.pdf">
                        <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                            <div>Leer mas</div>


                        </div>
                    </a>
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
                            <jet-input id="name" type="text" class="mt-1 block w-full" v-model="curp" required
                                       autofocus
                                       autocomplete="name"/>
                            <jet-button  :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Consultar
                            </jet-button>
                        </div>

                    </div>
                </div>
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
                informacion_relefante: 'esta es la información relevantre gawgdviqGLIDGQ.JHG DFIUWEGD WHIW FGLIU Glfige.fuiEG EFLIU '

            })
        }
    }
})
</script>
