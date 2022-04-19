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
                                <div class="ml-3 mr-3 ">
                                    <div class="my-2">
                                        <jet-label for="funcion_real" value="Función Real:"/>
                                        <jet-input id="funcion_real" type="text" class="mt-1 block w-full"
                                                   v-model="form.funcion_real"
                                                   required
                                                   placeholder="Función Real"
                                                   autofocus
                                                   autocomplete="funcion_real"/>
                                    </div>
                                    <div class="flex items-center">
                                        <div class=" ml-12 text-lg text-gray-600 leading-7 font-semibold">
                                            Domicilio Laboral
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <jet-label for="domicilio_laboralo"
                                                   value="Domicilio Laboral(Avenida o calle):"/>
                                        <jet-input id="domicilio_laboralo" type="text" class="mt-1 block w-full"
                                                   v-model="domicilio_laboralo"
                                                   required
                                                   placeholder="Domicilio Laboral(Avenida o calle)"
                                                   autofocus
                                                   autocomplete="domicilio_laboralo"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="numero_ext_int"
                                                   value="Número (Exterior, Interior, Lote, Manzana, etc.):"/>
                                        <jet-input id="numero_ext_int" type="text" class="mt-1 block w-full"
                                                   v-model="numero_ext_int"
                                                   required
                                                   placeholder=" Número (Exterior, Interior, Lote, Manzana, etc.)"
                                                   autofocus
                                                   autocomplete="numero_ext_int"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="colonia_lab" value="Colonia:"/>
                                        <jet-input id="colonia_lab" type="text" class="mt-1 block w-full"
                                                   v-model="colonia_lab"
                                                   required
                                                   placeholder="Colonia"
                                                   autofocus
                                                   autocomplete="colonia_lab"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="alcaldia" value="Alcaldía"/>
                                        <jet-input id="alcaldia" type="text" class="mt-1 block w-full"
                                                   v-model="alcaldia"
                                                   required
                                                   placeholder="Alcaldía"
                                                   autofocus
                                                   autocomplete="alcaldia"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="codogo_postal" value="Código Postal"/>
                                        <jet-input id="codogo_postal" type="text" class="mt-1 block w-full"
                                                   v-model="codogo_postal"
                                                   required
                                                   placeholder="Código Postal"
                                                   autofocus
                                                   autocomplete="codogo_postal"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="teléfono_laboral"
                                                   value="Teléfono Laboral"/>
                                        <jet-input id="teléfono_laboral" type="text" class="mt-1 block w-full"
                                                   v-model="teléfono_laboral"
                                                   required
                                                   placeholder="Teléfono Laboral"
                                                   autofocus
                                                   autocomplete="teléfono_laboral"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="extension_del_reléfono_laboral"
                                                   value="Extensión del Teléfono Laboral"/>
                                        <jet-input id="extension_del_reléfono_laboral" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="extension_del_reléfono_laboral"
                                                   required
                                                   placeholder="extension_del_reléfono_laboral"
                                                   autofocus
                                                   autocomplete="extension_del_reléfono_laboral"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="tipo_de_nomina" value="Tipo de Nomina:"/>
                                        <jet-input id="tipo_de_nomina" type="text" class="mt-1 block w-full"
                                                   v-model="tipo_de_nomina"
                                                   required
                                                   placeholder="Tipo de Nomina"
                                                   autofocus
                                                   autocomplete="tipo_de_nomina"/>
                                    </div>
                                </div>
                            </div>


                            <div class="p-6">
                                <div class="ml-3 mr-3">
                                    <div class="my-2">
                                        <jet-label for="numero_de_empleado" value="Número de Empleado:"/>
                                        <jet-input id="numero_de_empleado" type="text" class="mt-1 block w-full"
                                                   v-model="numero_de_empleado"
                                                   required
                                                   placeholder="Número de Empleado"
                                                   autofocus
                                                   autocomplete="numero_de_empleado"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="numero_de_plaza"
                                                   value="Número de Plaza:"/>
                                        <jet-input id="numero_de_plaza" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="numero_de_plaza"
                                                   required
                                                   placeholder="numero_de_plaza"
                                                   autofocus
                                                   autocomplete="Número de Plaza"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="parentesco_con_el_infante"
                                                   value="Parentesco con la Niña o el Niño:"/>
                                        <jet-input id="parentesco_con_el_infante" type="text" class="mt-1 block w-full"
                                                   v-model="parentesco_con_el_niña_o_niño"
                                                   required
                                                   autofocus
                                                   autocomplete="Parentesco con la Niña o el Niño"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="domicilio_particular"
                                                   value="Domicilio particular (avenida o calle):"/>
                                        <jet-input id="domicilio_particular" type="text" class="mt-1 block w-full"
                                                   v-model="domicilio_particular"
                                                   required
                                                   autofocus
                                                   autocomplete="domicilio particular"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="numero_d"
                                                   value="Número (Exterior, Interior, Lote, Manzana etc.):"/>
                                        <jet-input id="numero_d" type="text" class="mt-1 block w-full"
                                                   v-model="numero_d"
                                                   required
                                                   autofocus
                                                   autocomplete="Número (Exterior, Interior, Lote, Manzana etc.)"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="colonia"
                                                   value="Colonia:"/>
                                        <jet-input id="colonia" type="text" class="mt-1 block w-full"
                                                   v-model="colonia"
                                                   required
                                                   autofocus
                                                   autocomplete="Colonia"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="alcaldia_o_municipio"
                                                   value="Alcaldía o Municipio:"/>
                                        <jet-input id="alcaldia_o_municipio" type="text" class="mt-1 block w-full"
                                                   v-model="alcaldia_o_municipio"
                                                   required
                                                   autofocus
                                                   autocomplete="alcaldia o municipio"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="codigo_postal"
                                                   value="Código Postal:"/>
                                        <jet-input id="codigo_postal" type="text" class="mt-1 block w-full"
                                                   v-model="codigo_postal"
                                                   required
                                                   autofocus
                                                   autocomplete="Código postal"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="telefono_particular"
                                                   value="Teléfono Particular:"/>
                                        <jet-input id="telefono_particular" type="text" class="mt-1 block w-full"
                                                   v-model="telefono_paticular"
                                                   required
                                                   autofocus
                                                   autocomplete="Telefono particular"/>
                                    </div>

                                </div>
                            </div>


                            <div class="p-6">
                                <div class="ml-3 mr-3">
                                    <div class="my-2">
                                        <jet-label for="telefono_celular" value="Teléfono Celular:"/>
                                        <jet-input id="telefono_celular" type="text" class="mt-1 block w-full"
                                                   v-model="telefono_celular"
                                                   required
                                                   autofocus
                                                   autocomplete="Teléfono Celular"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="telefono_recados"
                                                   value=" Teléfono para Recados:"/>
                                        <jet-input id="telefono_recados" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="telefono_recados"
                                                   required
                                                   autofocus
                                                   autocomplete=" Teléfono para Recados"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="Email"
                                                   value="Correo Electrónico:"/>
                                        <jet-input id="Email" type="text" class="mt-1 block w-full"
                                                   v-model="Email"
                                                   required
                                                   autofocus
                                                   autocomplete="Email"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="clave_sector"
                                                   value="Clave de Sector:"/>
                                        <jet-input id="clave_sector" type="text" class="mt-1 block w-full"
                                                   v-model="clave_sector"
                                                   required
                                                   autofocus
                                                   autocomplete="Clave de Sector"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="secretaria_o_ente_dministrativo"
                                                   value="Secretaría o Ente Administrativo:"/>
                                        <jet-input id="secretaria_o_ente_dministrativo" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="secretaria_o_ente_dministrativo"
                                                   required
                                                   autofocus
                                                   autocomplete="SECRETARÍA O ENTE ADMINISTRATIVO"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="clave_unidad_administrativa"
                                                   value="Clave de la Unidad Administrativa:"/>
                                        <jet-input id="clave_unidad_administrativa" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="clave_unidad_administrativa"
                                                   required
                                                   autofocus
                                                   autocomplete="Clave de la Unidad Administrativa"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="nombre_unidad_administrativa"
                                                   value="Nombre de la Unidad Administrativa:"/>
                                        <jet-input id="nombre_unidad_administrativa" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="nombre_unidad_administrativa"
                                                   required
                                                   autofocus
                                                   autocomplete="Nombre de la Unidad Administrativa"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="oficina_o_area_de_adscripcion"
                                                   value="Oficina o Área de Adscripción:"/>
                                        <jet-input id="oficina_o_area_de_adscripcion" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="oficina_o_area_de_adscripcion"
                                                   required
                                                   autofocus
                                                   autocomplete="oficina_o_area_de_adscripcion"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="descripcion_del_puesto"
                                                   value="Descripción del puesto:"/>
                                        <jet-input id="descripcion_del_puesto" type="text" class="mt-1 block w-full"
                                                   v-model="descripcion_del_puesto"
                                                   required
                                                   autofocus
                                                   autocomplete="descripcion_del_puesto"/>
                                    </div>

                                    <div class="my-12">

                                        <a :href="route('datosTutor.create')">
                                            <jet-button class="bg-blue-600 mx-8">
                                                Atras
                                            </jet-button>
                                        </a>


                                        <jet-button class="bg-blue-600 mx-8">
                                            Guardar
                                        </jet-button>
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
                name: 'Amado Lider Honorable Licenciao Andrés Manuel López Obrador',
                funcion_real:'',


            })
        }
    }
})
</script>
