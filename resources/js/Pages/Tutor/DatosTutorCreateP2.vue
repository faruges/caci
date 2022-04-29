<template>

    <app-layout title="Datos del tutor">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Formulario para Datos de Tutor
            </h2>
        </template>
        <Form @submit="onSubmit" v-slot="{ errors }" class="py-12">
            <div class="  max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-[url('/img/FondoRepeat.png')] overflow-hidden shadow-xl sm:rounded-lg">

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
                                        <Field
                                            class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                            v-model="form.funcion_real"
                                            :rules="isRequired"
                                            name="field"
                                            type="text"
                                            autofocus
                                            placeholder=" Función Real"

                                            autocomplete="funcion_real"/>
                                        <span class="text-red-600">{{ errors.field }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class=" ml-12 text-lg text-gray-600 leading-7 font-semibold">
                                            Domicilio Laboral
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <jet-label for="domicilio_laboralo"
                                                   value="Domicilio Laboral(Avenida o calle):"/>
                                        <Field id="domicilio_laboralo"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.domicilio_laboral"
                                               :rules="isRequired"
                                               type="text"
                                               name="domicilio_laboral"
                                               placeholder=" Domicilio Laboral(Avenida o calle) "

                                        />
                                        <span class="text-red-600">{{ errors.domicilio_laboral }}</span>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="numero_ext_o_int"
                                                   value="Número (Exterior, Interior, Lote, Manzana, etc.):"/>
                                        <Field id="numero_ext_o_int"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.numero_ext_o_int"
                                               name="numero_ext_o_int"
                                               type="text"
                                               :rules="isRequired"
                                               placeholder=" Número (Exterior, Interior, Lote, Manzana, etc.)"
                                        />
                                        <span class="text-red-600">{{ errors.numero_ext_o_int }}</span>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="colonia_laboral" value="Colonia:"/>
                                        <Field id="colonia_laboral"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm "
                                               v-model="form.colonia_laboral"
                                               name="colonia_laboral"
                                               :rules="isRequired"
                                               type="text"
                                               placeholder=" Colonia"
                                        />
                                        <span class="text-red-600">{{ errors.colonia_laboral }}</span>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="alcaldia" value="Alcaldía"/>
                                        <Field id="alcaldia" type="text"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.alcaldia_laboral"
                                               name="alcaldia"
                                               :rules="isRequired"
                                               placeholder="Alcaldía"
                                        />
                                        <span class="text-red-600">{{ errors.alcaldia }}</span>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="codogo_postal" value="Código Postal"/>
                                        <Field id="codogo_postal" type="text"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.codigo_postal_laboral"
                                               placeholder="Código Postal"
                                               name="codigo_postal"
                                               :rules="isRequired"
                                        />
                                        <span class="text-red-600">{{ errors.codigo_postal }}</span>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="teléfono_laboral"
                                                   value="Teléfono Laboral"/>
                                        <Field id="teléfono_laboral" type="text"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.telefono_laboral"
                                               name="telefono_laboral"
                                               :rules="isRequired"
                                               placeholder="Teléfono Laboral"
                                        />
                                        <span class="text-red-600">{{ errors.telefono_laboral }}</span>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="extension_del_teléfono_laboral"
                                                   value="Extensión del Teléfono Laboral"/>
                                        <Field id="extension_del_reléfono_laboral" type="text"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.extension_del_relefono_laboral"
                                               placeholder="extension_del_reléfono_laboral"
                                               name="extension_del_relefono_laboral"
                                               :rules="isRequired"/>
                                        <span class="text-red-600">{{ errors.extension_del_relefono_laboral }}</span>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="tipo_de_nomina" value="Tipo de Nomina:"/>
                                        <Field id="tipo_de_nomina" type="text"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.tipo_de_nomina"
                                               placeholder="Tipo de Nomina"
                                               name="tipo_de_nomina"
                                               :rules="isRequired"/>
                                        <span class="text-red-600">{{ errors.tipo_de_nomina }}</span>
                                    </div>
                                </div>
                            </div>


                            <div class="p-6">
                                <div class="ml-3 mr-3">
                                    <div class="my-2">
                                        <jet-label for="numero_de_empleado" value="Número de Empleado:"/>
                                        <Field id="numero_de_empleado" type="text"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring
                                               focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.numero_de_empleado"
                                               placeholder="Número de Empleado"
                                               name="numero_de_empleado"
                                               :rules="isRequired"
                                        />
                                        <span class="text-red-600">{{ errors.numero_de_empleado }}</span>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="numero_de_plaza"
                                                   value="Número de Plaza:"/>
                                        <Field id="numero_de_plaza" type="text"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring
                                               focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.numero_de_plaza"
                                               placeholder="numero_de_plaza"
                                               name="numero_de_plaza"
                                               :rules="isRequired"
                                        />
                                        <span class="text-red-600">{{ errors.numero_de_plaza }}</span>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="nivel_salarial"
                                                   value="Nivel Salarial:"/>
                                        <field id="nivel_salariale" type="text"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring
                                                focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.nivel_salarial"
                                               placeholder="Nivel Salarial"
                                               name="nivel_salarial"
                                               :rules="isRequired"
                                        />
                                        <span class="text-red-600">{{ errors.nivel_salarial }}</span>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="seccion_sindical"
                                                   value="Sección Sindical:"/>
                                        <field id="seccion_sindical" type="text"
                                               class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring
                                               focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.seccion_sindical"
                                               placeholder="Sección Sindical"
                                               name="seccion_sindical"
                                               :rules="isRequired"
                                        />
                                        <span class="text-red-600">{{ errors.seccion_sindical }}</span>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="hora_entrada"
                                                   value="Hora de Entrada a Laborar:"/>
                                        <div class=" text-green-700">
                                            <field type="time" v-model="form.hora_entrada"
                                                   class="form-control block w-full px-3 py-1.5 text-base font-normal
                                                   text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                                                   ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                                   placeholder="Seleccione una hora"
                                                   data-mdb-toggle="input-toggle-timepicker"
                                                   name="hora_entrada"
                                                   :rules="isRequired"
                                            />
                                            <span class="text-red-600">{{ errors.hora_entrada }}</span>
                                        </div>

                                    </div>


                                    <div class="my-4">
                                        <jet-label for="hora_salida"
                                                   value="Hora de salida laboral:"/>
                                        <div class=" text-green-700">
                                            <field type="time" v-model="form.hora_salida_laboral"
                                                   class="form-control block w-full px-3 py-1.5 text-base font-normal
                                                   text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                                                   ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                                   placeholder="Seleccione una hora"
                                                   data-mdb-toggle="input-toggle-timepicker"
                                                   name="hora_salida_laboral"
                                                   :rules="isRequired"
                                            />
                                            <span class="text-red-600">{{ errors.hora_salida_laboral }}</span>
                                        </div>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="dias_laborales"
                                                   value="Días Laborales:"/>
                                        <field id="Nivel_escolaridad" v-model="form.dias_laborales"
                                               class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                                 focus:border-blue-500 block w-full p-2.5 "
                                               as="select"
                                               :rules="isRequired"
                                               name="dias_laborales">
                                            <option :value="form.dias_laborales">
                                                {{ form.dias_laborales }}
                                            </option>
                                            <option v-for="dias_laborales in form.dias_laborales_list">
                                                {{ dias_laborales }}
                                            </option>
                                        </field>
                                        <span class="text-red-600">{{ errors.dias_laborales }}</span>
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
                                        <field id="mencione_donde" type="text" class="mt-1 block w-full border-gray-300
                                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                               v-model="form.mencione_donde"
                                               placeholder="Mencione Dónde"
                                               name="mencione_donde"
                                               :rules="isRequired"
                                        />
                                        <span class="text-red-600">{{ errors.mencione_donde }}</span>
                                    </div>

                                    <div class="my-12">
                                        <jet-button class="bg-blue-600 mx-8">
                                            Guardar
                                        </jet-button>
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
                                                <div class=" text-green-700">
                                                    <field type="time" v-model="form.hora_entrada_segundo_empleo"
                                                    name="hora_entrada_segundo_empleo"
                                                           roules="isRequired"
                                                           class=" form-control block w-full px-3 py-1.5 text-base font-normal
                                                   text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                                                   ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                                           placeholder="Seleccione una hora"
                                                           data-mdb-toggle="input-toggle-timepicker"/>
                                                    <span class="text-red-600">{{ errors.hora_entrada_segundo_empleo }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="my-4">
                                            <div class="my-4">
                                                <jet-label for="hora_entrada_seg_empleo"
                                                           value="Hora de Salida de Laborar al Segundo Empleo:"/>
                                                <div class=" text-green-700">
                                                    <input type="time" v-model="form.hora_salida_segundo_empleo"
                                                           class="form-control block w-full px-3 py-1.5 text-base font-normal
                                                   text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                                                   ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                                           placeholder="Seleccione una hora"
                                                           data-mdb-toggle="input-toggle-timepicker"/>

                                                </div>
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


                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </Form>
        <div class="my-12">

            <a :href="route('datosTutor.create')">
                <jet-button @click="persist" class="bg-blue-600 mx-8">
                    Atras
                </jet-button>
            </a>
        </div>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import JetLabel from '@/Jetstream/Label.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetButton from '@/Jetstream/Button.vue'
import moment from 'moment';
import Input from "@/Jetstream/Input";
import {inject} from 'vue';
import {Form, Field} from 'vee-validate';


export default defineComponent({
    components: {
        Input,
        JetLabel,
        JetInput,
        JetButton,
        AppLayout,
        Form,
        Field,


    },
    data() {
        return {
            form: this.$inertia.form({
                clock_status: false,
                name: 'Su exelencia Sr Licenciao Andrés Manuel López Obrador',
                funcion_real: '',
                domicilio_laboral: '',
                numero_ext_o_int: '',
                colonia_laboral: '',
                alcaldia_laboral: '',
                codigo_postal_laboral: '',
                telefono_laboral: '',
                extension_del_relefono_laboral: '',
                tipo_de_nomina: '',
                numero_de_empleado: '',
                numero_de_plaza: '',
                nivel_salarial: '',
                seccion_sindical: '',
                hora_entrada: '',
                hora_salida_laboral: '',
                dias_laborales: 'Seleccione una Opción',
                tiene_segundo_empleo: 'No',
                mencione_donde: '',
                dias_laborales_list: ['LUNES A VIERNES', 'SÁBADOS, DOMINGOS Y DÍAS FESTIVOS', 'LUNES A DOMINGO'],
                dias_laborales_segundo_empleo: 'Seleccione una Opción',
                telefono_laboral_segundo_empleo: '',
                extension_telefono_laboral_segundo_empleo: '',
                domicilio_laborl_asegundo_empleo: '',
                numero_domicilio_segundo_empleo: '',
                codigo_postal_segundo_empleo: '',
                alcaldia_o_municipio_segundo_empleo: '',
                colonia_segundo_empleo: '',
                hora_entrada_segundo_empleo: '',
                hora_salida_segundo_empleo: '',
                value: ''


            })
        }
    },
    setup() {


        const toast = inject('$toast');

        toast('Hola! como estan?, todo bien? todo correcto? y yo que me alegro !', {
            duration: 5000,
            pauseOnHover: true,
            positionY: 'top', // 'top' or 'bottom'
            positionX: 'left', // 'left', 'right' or 'center'
            disableClick: false,
            styles: {
                color: '#',
                backgroundColor: '#ffa846',
                // Vendor prefixes also supported
            },
            class: 'huge', // Added to each toast,
            max: 50,
        });


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
        if (localStorage.codigo_postal_laboral) {
            this.form.codigo_postal_laboral = localStorage.codigo_postal_laboral;
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
        if (localStorage.hora_entrada) {
            this.form.hora_entrada = localStorage.hora_entrada;
        }
        if (localStorage.hora_salida_laboral) {
            this.form.hora_salida_laboral = localStorage.hora_salida_laboral;
        }
        if (localStorage.hora_entrada_segundo_empleo) {
            this.form.hora_entrada_segundo_empleo = localStorage.hora_entrada_segundo_empleo;
        }
        if (localStorage.hora_salida_segundo_empleo) {
            this.form.hora_salida_segundo_empleo = localStorage.hora_salida_segundo_empleo;
        }
    },
    methods: {

        persist() {
            localStorage.funcion_real = this.form.funcion_real;
            localStorage.domicilio_laboral = this.form.domicilio_laboral;
            localStorage.numero_ext_o_int = this.form.numero_ext_o_int;
            localStorage.colonia_laboral = this.form.colonia_laboral;
            localStorage.alcaldia_laboral = this.form.alcaldia_laboral;
            localStorage.codigo_postal_laboral = this.form.codigo_postal_laboral;
            localStorage.telefono_laboral = this.form.telefono_laboral;
            localStorage.extension_del_relefono_laboral = this.form.extension_del_relefono_laboral;
            localStorage.tipo_de_nomina = this.form.tipo_de_nomina;
            localStorage.numero_de_empleado = this.form.numero_de_empleado;
            localStorage.numero_de_plaza = this.form.numero_de_plaza;
            localStorage.nivel_salarial = this.form.nivel_salarial;
            localStorage.seccion_sindical = this.form.seccion_sindical;
            localStorage.dias_laborales = this.form.dias_laborales;
            localStorage.tiene_segundo_empleo = this.form.tiene_segundo_empleo;
            localStorage.mencione_donde = this.form.mencione_donde;
            localStorage.dias_laborales_segundo_empleo = this.form.dias_laborales_segundo_empleo;
            localStorage.telefono_laboral_segundo_empleo = this.form.telefono_laboral_segundo_empleo;
            localStorage.extension_telefono_laboral_segundo_empleo = this.form.extension_telefono_laboral_segundo_empleo;
            localStorage.domicilio_laborl_asegundo_empleo = this.form.domicilio_laborl_asegundo_empleo;
            localStorage.numero_domicilio_segundo_empleo = this.form.numero_domicilio_segundo_empleo;
            localStorage.codigo_postal_segundo_empleo = this.form.codigo_postal_segundo_empleo;
            localStorage.alcaldia_o_municipio_segundo_empleo = this.form.alcaldia_o_municipio_segundo_empleo;
            localStorage.colonia_segundo_empleo = this.form.colonia_segundo_empleo;
            localStorage.hora_entrada = this.form.hora_entrada;
            localStorage.hora_salida_laboral = this.form.hora_salida_laboral;
            localStorage.hora_entrada_segundo_empleo = this.form.hora_entrada_segundo_empleo;
            localStorage.hora_salida_segundo_empleo = this.form.hora_salida_segundo_empleo;
        },
        hora_entrada_format_moment() {
            var hora_entrada = this.form.hora_entrada;
            return moment(hora_entrada, 'hh:mm');
        },
        hora_entrada_segundo_empleo_format_moment() {
            var hora_entrada = this.form.hora_entrada_segundo_empleo;
            return moment(hora_entrada, 'hh:mm');
        },
        hora_salida_format_moment() {
            var hora_salida = this.form.hora_salida_laboral;
            return moment(hora_salida, 'hh:mm');
        },
        hora_salida_segundo_empleo_format_moment() {
            var hora_salidaa = this.form.hora_salida_segundo_empleo;
            return moment(hora_salidaa, 'hh:mm');
        },

        validaciones_horas() {

            if (this.hora_entrada_format_moment().isAfter(this.hora_salida_format_moment())) {
                this.nota_de_error('La hora de entrada laborar debe de ser menor a la hora de salida de laborar');
                return false;
            }
            if (this.hora_entrada_segundo_empleo_format_moment().isAfter(this.hora_salida_segundo_empleo_format_moment())) {

                this.nota_de_error('La hora de entrada a laborar del segundo empleo debe de ser menor a la ' +
                    'hora de salida laboral del segundo empleo');
                return false;
            }
            return true;
        },
        nota_de_error(mensaje) {
            this.$toast(mensaje, {
                duration: 5000,
                pauseOnHover: true,
                positionY: 'top', // 'top' or 'bottom'
                positionX: 'left', // 'left', 'right' or 'center'
                disableClick: false,
                styles: {
                    color: '#fff',
                    backgroundColor: '#ff0000',
                    // Vendor prefixes also supported
                },

                class: 'huge', // Added to each toast,
                max: 50,
            });
        },
        onSubmit(values) {
            this.validaciones_horas();
            console.log(values);
        },
        isRequired(value) {
            return value ? true : 'Este campo es requerido';
        },


    },
    computed: {}

})
</script>
