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
                                                   v-model="form.domicilio_laboral"
                                                   required
                                                   placeholder="Domicilio Laboral(Avenida o calle)"
                                                   autofocus
                                                   autocomplete="domicilio_laboralo"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="numero_ext_o_int"
                                                   value="Número (Exterior, Interior, Lote, Manzana, etc.):"/>
                                        <jet-input id="numero_ext_o_int" type="text" class="mt-1 block w-full"
                                                   v-model="form.numero_ext_o_int"
                                                   required
                                                   placeholder=" Número (Exterior, Interior, Lote, Manzana, etc.)"
                                                   autofocus
                                                   autocomplete="numero_ext_int"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="colonia_laboral" value="Colonia:"/>
                                        <jet-input id="colonia_laboral" type="text" class="mt-1 block w-full"
                                                   v-model="form.colonia_laboral"
                                                   required
                                                   placeholder="Colonia"
                                                   autofocus
                                                   autocomplete="colonia laboral"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="alcaldia" value="Alcaldía"/>
                                        <jet-input id="alcaldia" type="text" class="mt-1 block w-full"
                                                   v-model="form.alcaldia_laboral"
                                                   required
                                                   placeholder="Alcaldía"
                                                   autofocus
                                                   autocomplete="alcaldia"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="codogo_postal" value="Código Postal"/>
                                        <jet-input id="codogo_postal" type="text" class="mt-1 block w-full"
                                                   v-model="form.codogo_postal_laboral"
                                                   required
                                                   placeholder="Código Postal"
                                                   autofocus
                                                   autocomplete="codogo_postal"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="teléfono_laboral"
                                                   value="Teléfono Laboral"/>
                                        <jet-input id="teléfono_laboral" type="text" class="mt-1 block w-full"
                                                   v-model="form.telefono_laboral"
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
                                                   v-model="form.extension_del_relefono_laboral"
                                                   required
                                                   placeholder="extension_del_reléfono_laboral"
                                                   autofocus
                                                   autocomplete="extension_del_reléfono_laboral"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="tipo_de_nomina" value="Tipo de Nomina:"/>
                                        <jet-input id="tipo_de_nomina" type="text" class="mt-1 block w-full"
                                                   v-model="form.tipo_de_nomina"
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
                                                   v-model="form.numero_de_empleado"
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
                                                   v-model="form.numero_de_plaza"
                                                   required
                                                   placeholder="numero_de_plaza"
                                                   autofocus
                                                   autocomplete="Número de Plaza"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="nivel_salarial"
                                                   value="Nivel Salarial:"/>
                                        <jet-input id="nivel_salariale" type="text" class="mt-1 block w-full"
                                                   v-model="form.nivel_salarial"
                                                   required
                                                   placeholder="Nivel Salarial"
                                                   autofocus
                                                   autocomplete="Nivel Salarial"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="seccion_sindical"
                                                   value="Sección Sindical:"/>
                                        <jet-input id="seccion_sindical" type="text" class="mt-1 block w-full"
                                                   v-model="form.seccion_sindical"
                                                   required
                                                   placeholder="Sección Sindical"
                                                   autofocus
                                                   autocomplete="seccion sindical"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="hora_entrada"
                                                   value="Hora de Entrada a Laborar:"/>
                                        {{ time.hours }}:{{ time.minutes }}
                                        <Datepicker v-model="time" timePicker/>
                                    </div>


                                    <div class="my-4">
                                        <jet-label for="hora_salida"
                                                   value="Hora de salida laboral:"/>
                                        {{ time_salida.hours }}:{{ time_salida.minutes }}
                                        <Datepicker v-model="time_salida" timePicker/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="dias_laborales"
                                                   value="Días Laborales:"/>
                                        <jet-input id="dias_laborales" type="text" class="mt-1 block w-full"
                                                   v-model="form.dias_laborales"
                                                   required
                                                   placeholder="Días Laborales"
                                                   autofocus
                                                   autocomplete="dias lñaborales"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="tiene_segundo_empleo"
                                                   value="¿Cuenta con un segundo empleo?:"/>

                                        <input class="mx-2" type="radio" id="si" value="Si"
                                               v-model="form.tiene_segundo_empleo"/>
                                        <label for="si">Si</label>


                                        <input class="mx-2" type="radio" id="no" value="No"
                                               v-model="form.tiene_segundo_empleo"/>
                                        <label for="no">No</label>

                                    </div>

                                    <div class="my-4">
                                        <jet-label for="mencione_donde"
                                                   value="Mencione Dónde:"/>
                                        <jet-input id="telefono_particular" type="text" class="mt-1 block w-full"
                                                   v-model="form.mencione_donde"
                                                   required
                                                   placeholder="Mencione Dónde"
                                                   autofocus
                                                   autocomplete="Mencione Dónde"/>
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
import {ref} from 'vue';


export default defineComponent({
    components: {
        JetLabel,
        JetInput,
        JetButton,
        AppLayout,


    },
    data() {
        return {
            form: this.$inertia.form({
                name: 'Su exelencia Sr Licenciao Andrés Manuel López Obrador',
                funcion_real: '',
                domicilio_laboral: '',
                numero_ext_o_int: '',
                colonia_laboral: '',
                alcaldia_laboral: '',
                codogo_postal_laboral: '',
                telefono_laboral: '',
                extension_del_relefono_laboral: '',
                tipo_de_nomina: '',
                numero_de_empleado: '',
                numero_de_plaza: '',
                nivel_salarial: '',
                seccion_sindical: '',
                hora_entrada: '',
                dias_laborales: '',
                tiene_segundo_empleo: 'No',
                mencione_donde:''

            })
        }
    },
    setup() {
        const time = ref({
            hora: new Date().getHours(),
            minutos: new Date().getMinutes()
        });

        const time_salida = ref({
            hora: new Date().getHours(),
            minutos: new Date().getMinutes()
        });

        return {
            time,
            time_salida
        }
    }

})
</script>
