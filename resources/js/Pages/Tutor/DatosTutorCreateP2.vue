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
                                        {{ time_entrada.hours }}:{{ time_entrada.minutes }}
                                        <Datepicker v-model="time_entrada" timePicker/>
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
                                        <select id="Nivel_escolaridad" v-model="form.dias_laborales"
                                                class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                            <option :value="form.dias_laborales">
                                                {{ form.dias_laborales }}
                                            </option>
                                            <option v-for="dias_laborales in form.dias_laborales_list">
                                                {{ dias_laborales }}
                                            </option>
                                        </select>
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

                                    <div v-if="form.tiene_segundo_empleo=='Si'" class="my-4">
                                        <jet-label for="mencione_donde"
                                                   value="Mencione Dónde:"/>
                                        <jet-input id="mencione_donde" type="text" class="mt-1 block w-full"
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
                                    <div v-if="form.tiene_segundo_empleo=='Si'">
                                        <div class="my-2">
                                            <div class="my-4">
                                                <jet-label for="hora_entrada_seg_empleo"
                                                           value="Hora de Entrada a Laborar al Segundo Empleo:"/>
                                                {{
                                                    time_entrada_segundo_empleo.hours
                                                }}:{{ time_entrada_segundo_empleo.minutes }}
                                                <Datepicker v-model="time_entrada_segundo_empleo" timePicker/>
                                            </div>
                                        </div>

                                        <div class="my-4">
                                            <div class="my-4">
                                                <jet-label for="hora_entrada_seg_empleo"
                                                           value="Hora de Salida de Laborar al Segundo Empleo:"/>
                                                {{
                                                    time_salida_segundo_empleo.hours
                                                }}:{{ time_salida_segundo_empleo.minutes }}
                                                <Datepicker v-model="time_salida_segundo_empleo" timePicker/>
                                            </div>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="dias_laborales"
                                                       value="Días Laborales del Segundo Empleo:"/>
                                            <select id="Nivel_escolaridad" v-model="form.dias_laborales_segundo_empleo"
                                                    class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                                <option :value="form.dias_laborales_segundo_empleo">
                                                    {{ form.dias_laborales_segundo_empleo }}
                                                </option>
                                                <option v-for="dias_laborales in form.dias_laborales_list">
                                                    {{ dias_laborales }}
                                                </option>
                                            </select>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="telefono_laboral_seg_empleo"
                                                       value="Teléfono Laboral del Segundo Empleo:"/>
                                            <jet-input id="telefono_laboral_seg_empleo" type="text"
                                                       class="mt-1 block w-full"
                                                       v-model="form.telefono_laboral_segundo_empleo"
                                                       required
                                                       placeholder="Teléfono Laboral del Segundo Empleo"
                                                       autofocus
                                                       autocomplete="Teléfono Laboral del Segundo Empleo"/>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="telefono_laboral_seg_empleo"
                                                       value="Extensión del teléfono laboral del segundo empleo:"/>
                                            <jet-input id="telefono_laboral_seg_empleo" type="text"
                                                       class="mt-1 block w-full"
                                                       v-model="form.extension_telefono_laboral_segundo_empleo"
                                                       required
                                                       placeholder="Extensión del número telefónico del trabajo sin guiones o espacios."
                                                       autofocus
                                                       autocomplete="Teléfono Laboral del Segundo Empleo"/>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="domicilio_laboral_segundo_empleo"
                                                       value=" Domicilio Laborla (Avenida o Calle):"/>
                                            <jet-input id="domicilio_laboral_segundo_empleo" type="text"
                                                       class="mt-1 block w-full"
                                                       v-model="form.domicilio_laborl_asegundo_empleo"
                                                       required
                                                       placeholder="Nombre de la avenida, calle, etc ."
                                                       autofocus
                                                       autocomplete="Domicilio"/>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="numero_domicilio_segundo_empleo"
                                                       value="Número (Exterior, Interior, Lote, Manzana, etc.):"/>
                                            <jet-input id="numero_domicilio_segundo_empleo" type="text"
                                                       class="mt-1 block w-full"
                                                       v-model="form.numero_domicilio_segundo_empleo"
                                                       required
                                                       placeholder="Número (Exterior, Interior, Lote, Manzana, etc.)"
                                                       autofocus
                                                       autocomplete="Numero domicilio"/>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="Código_postal_segundo_empleo"
                                                       value="Código postal:"/>
                                            <jet-input id="Código_postal_segundo_empleo" type="text"
                                                       class="mt-1 block w-full"
                                                       v-model="form.codigo_postal_segundo_empleo"
                                                       required
                                                       placeholder="Código Postal"
                                                       autofocus
                                                       autocomplete="Código_postal_segundo_emple"/>

                                        </div>

                                        <div class="my-4">
                                            <jet-label for="Colonia_segundo_empleo"
                                                       value="Colonia:"/>
                                            <jet-input id="Colonia_segundo_empleo" type="text" class="mt-1 block w-full"
                                                       v-model="form.colonia_segundo_empleo"
                                                       required
                                                       placeholder="Código postal del domicilio donde labora el trabajador (a)."
                                                       autofocus
                                                       autocomplete="Colonia_segundo_empleo"/>

                                        </div>

                                        <div class="my-4">
                                            <jet-label for="Alcaldía_o_municipio_segundo_empleo"
                                                       value="Nombre de la alcaldía donde esta ubicado el domicilio laboral::"/>
                                            <jet-input id="Alcaldía_o_municipio_segundo_empleo" type="text"
                                                       class="mt-1 block w-full"
                                                       v-model="form.alcaldia_o_municipio_segundo_empleo"
                                                       required
                                                       placeholder="Alcaldía o municipio"
                                                       autofocus
                                                       autocomplete="Colonia_segundo_empleo"/>

                                        </div>
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
                dias_laborales: 'Seleccione una Opción',
                //aqi me quedé        tiene_segundo_empleo: 'No',
                mencione_donde: '',
                dias_laborales_list: ['LUNES A VIERNES', 'SÁBADOS, DOMINGOS Y DÍAS FESTIVOS', 'LUNES A DOMINGO'],
                dias_laborales_segundo_empleo: 'Seleccione una Opción',
                telefono_laboral_segundo_empleo: '',
                extension_telefono_laboral_segundo_empleo: '',
                domicilio_laborl_asegundo_empleo: '',
                numero_domicilio_segundo_empleo: '',
                codigo_postal_segundo_empleo: '',
                Colonia_segundo_empleo: '',
                alcaldia_o_municipio_segundo_empleo: '',
                colonia_segundo_empleo: ''


            })
        }
    },
    setup() {
        const time_entrada = ref({
            hora: new Date().getHours(),
            minutos: new Date().getMinutes()
        });

        const time_salida = ref({
            hora: new Date().getHours(),
            minutos: new Date().getMinutes()
        });
        const time_entrada_segundo_empleo = ref({
            hora: new Date().getHours(),
            minutos: new Date().getMinutes()
        });
        const time_salida_segundo_empleo = ref({
            hora: new Date().getHours(),
            minutos: new Date().getMinutes()
        });

        return {
            time_entrada,
            time_salida,
            time_entrada_segundo_empleo,
            time_salida_segundo_empleo
        }
    },
    mounted() {
        if (localStorage.funcion_real) {
            this.form.funcion_real = localStorage.funcion_real;
        }
        if (localStorage.domicilio_laboral) {
            this.form.domicilio_laboral = localStorage.domicilio_laboral;
        }
        if (localStorage.numero_ext_o_int) {
            this.form.numero_ext_o_int = localStorage.numero_ext_o_int;
        }
        if (localStorage.colonia_laboral) {
            this.form.colonia_laboral = localStorage.colonia_laboral;
        }
        if (localStorage.alcaldia_laboral) {
            this.form.alcaldia_laboral = localStorage.alcaldia_laboral;
        }
        if (localStorage.codogo_postal_laboral) {
            this.form.codogo_postal_laboral = localStorage.codogo_postal_laboral;
        }
        if (localStorage.telefono_laboral) {
            this.form.telefono_laboral = localStorage.telefono_laboral;
        }
        if (localStorage.extension_del_relefono_laboral) {
            this.form.extension_del_relefono_laboral = localStorage.extension_del_relefono_laboral;
        }
        if (localStorage.tipo_de_nomina) {
            this.form.tipo_de_nomina = localStorage.tipo_de_nomina;
        }
        if (localStorage.numero_de_empleado) {
            this.form.numero_de_empleado = localStorage.numero_de_empleado;
        }
        if (localStorage.numero_de_plaza) {
            this.form.numero_de_plaza = localStorage.numero_de_plaza;
        }
        if (localStorage.nivel_salarial) {
            this.form.nivel_salarial = localStorage.nivel_salarial;
        }
        if (localStorage.seccion_sindical) {
            this.form.seccion_sindical = localStorage.seccion_sindical;
        }
        if (localStorage.hora_entrada) {
            this.form.hora_entrada = localStorage.hora_entrada;
        }
        if (localStorage.dias_laborales) {
            this.form.dias_laborales = localStorage.dias_laborales;
        }
        if (localStorage.tiene_segundo_empleo) {
            this.form.tiene_segundo_empleo = localStorage.tiene_segundo_empleo;
        }
        if (localStorage.mencione_donde) {
            this.form.mencione_donde = localStorage.mencione_donde;
        }
        if (localStorage.dias_laborales_segundo_empleo) {
            this.form.dias_laborales_segundo_empleo = localStorage.dias_laborales_segundo_empleo;
        }
        if (localStorage.telefono_laboral_segundo_empleo) {
            this.form.telefono_laboral_segundo_empleo = localStorage.telefono_laboral_segundo_empleo;
        }
        if (localStorage.extension_telefono_laboral_segundo_empleo) {
            this.form.extension_telefono_laboral_segundo_empleo = localStorage.extension_telefono_laboral_segundo_empleo;
        }
        if (localStorage.domicilio_laborl_asegundo_empleo) {
            this.form.domicilio_laborl_asegundo_empleo = localStorage.domicilio_laborl_asegundo_empleo;
        }
        if (localStorage.numero_domicilio_segundo_empleo) {
            this.form.numero_domicilio_segundo_empleo = localStorage.numero_domicilio_segundo_empleo;
        }
        if (localStorage.codigo_postal_segundo_empleo) {
            this.form.codigo_postal_segundo_empleo = localStorage.codigo_postal_segundo_empleo;
        }
        if (localStorage.Colonia_segundo_empleo) {
            this.form.Colonia_segundo_empleo = localStorage.Colonia_segundo_empleo;
        }
        if (localStorage.alcaldia_o_municipio_segundo_empleo) {
            this.form.alcaldia_o_municipio_segundo_empleo = localStorage.alcaldia_o_municipio_segundo_empleo;
        }
        if (localStorage.colonia_segundo_empleo) {
            this.form.oficina_o_area_de_adscripcion = localStorage.oficina_o_area_de_adscripcion;
        }
        if (localStorage.descripcion_del_puesto) {
            this.form.descripcion_del_puesto = localStorage.descripcion_del_puesto;
        }
    },
    methods: {
        persist() {
            localStorage.funcion_real = this.form.funcion_real;
            localStorage.domicilio_laboral = this.form.domicilio_laboral;
            localStorage.numero_ext_o_int = this.form.numero_ext_o_int;
            localStorage.colonia_laboral = this.form.colonia_laboral;
            localStorage.alcaldia_laboral = this.form.alcaldia_laboral;
            localStorage.codogo_postal_laboral = this.form.codogo_postal_laboral;
            localStorage.telefono_laboral = this.form.telefono_laboral;
            localStorage.extension_del_relefono_laboral = this.form.extension_del_relefono_laboral;
            localStorage.tipo_de_nomina = this.form.tipo_de_nomina;
            localStorage.numero_de_empleado = this.form.numero_de_empleado;
            localStorage.numero_de_plaza = this.form.numero_de_plaza;
            localStorage.nivel_salarial = this.form.nivel_salarial;
            localStorage.seccion_sindical = this.form.seccion_sindical;
            localStorage.hora_entrada = this.form.hora_entrada;
            localStorage.dias_laborales = this.form.dias_laborales;
            localStorage.tiene_segundo_empleo = this.form.tiene_segundo_empleo; //aqui me quedo
            localStorage.curp = this.form.curp;
            localStorage.edad = this.form.edad;
            localStorage.telefono_celular = this.form.telefono_celular;
            localStorage.telefono_recados = this.form.telefono_recados;
            localStorage.Email = this.form.Email;
            localStorage.clave_sector = this.form.clave_sector;
            localStorage.secretaria_o_ente_dministrativo = this.form.secretaria_o_ente_dministrativo;
            localStorage.clave_unidad_administrativa = this.form.clave_unidad_administrativa;
            localStorage.nombre_unidad_administrativa = this.form.nombre_unidad_administrativa;
            localStorage.oficina_o_area_de_adscripcion = this.form.oficina_o_area_de_adscripcion;
            localStorage.descripcion_del_puesto = this.form.descripcion_del_puesto;
        }

    }

})
</script>
