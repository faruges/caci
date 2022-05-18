<template>

    <app-layout title="Datos del tutor">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Formulario para Datos de Tutor
            </h2>
        </template>
        <Form @submit="onSubmit" v-slot="{ errors }">
            <div class="py-12">
                <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-[url('/img/FondoRepeat.png')]  overflow-hidden shadow-xl sm:rounded-lg">

                        <div>
                            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                <div class="mt-4 text-2xl">
                                    Bienvenido(a): {{ data.data.CH_nombres }}
                                    mensaje: {{ mensaje }}
                                </div>

                            </div>

                            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-3">
                                <div class="p-6">
                                    <div class="ml-3 mr-3 ">
                                        <div class="my-2">
                                            <jet-label for="nombre" value="nombre:"/>
                                            <field id="nombre" type="text" class="mt-1 block w-full border-gray-300
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.nombre"
                                                   placeholder="Nombre"
                                                   name="nombre"
                                                   :rules="isRequired"/>
                                            <span
                                                class="text-red-600">{{
                                                    errors.nombre
                                                }}</span>
                                        </div>
                                        <div class="my-4">
                                            <jet-label for="apellido_paterno" value="Apellido Paterno:"/>
                                            <field id="Apellido_paterno" type="text" class="mt-1 block w-full border-gray-300 }
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.apellido_paterno"
                                                   name="apellido_paterno"
                                                   placeholder="Apellido paterno"
                                                   :rules="isRequired"/>
                                            <span
                                                class="text-red-600">{{
                                                    errors.apellido_paterno
                                                }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="apellido_materno" value="Apellido Materno"/>
                                            <field id="Apellido_materno" type="text" class="mt-1 block w-full border-gray-300
                                             focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.apellido_materno"
                                                   placeholder="Apellido materno"
                                                   name="apellido_materno"
                                                   :rules="isRequired"/>
                                            <span
                                                class="text-red-600">{{
                                                    errors.apellido_materno
                                                }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="rfc" value="RFC con Homoclave:"/>
                                            <field id="rfc" type="text" class="mt-1 block w-full border-gray-300
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200
                                            focus:ring-opacity-50 rounded-md shadow-sm" v-model="form.rfc"
                                                   name="rfc"
                                                   placeholder="RFC con homoclave"
                                                   :rules="isRFC"/>
                                            <ErrorMessage class="text-red-600" name="rfc"/>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="curp" value="CURP:"/>
                                            <field id="curp" type="text" class="mt-1 block w-full border-gray-300
                                             focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.curp"
                                                   name="curp"
                                                   placeholder="CURP"
                                                   :rules="isCURP"/>
                                            <ErrorMessage class="text-red-600" name="curp"/>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="genero" value="Género:"/>
                                            <field id="genero" type="text" class="mt-1 block w-full border-gray-300
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="genero"
                                                   name="genero"
                                                   required
                                                   placeholder="genero"
                                                   :rules="isRequired"/>
                                            <span
                                                class="text-red-600">{{
                                                    errors.genero
                                                }}</span>

                                        </div>

                                        <div class="my-4">
                                            <jet-label for="entidad_de_nacimiento"
                                                       value="Entidad Federativa de Nacimiento:"/>
                                            <field id="entidad_nacimiento" type="text" class="mt-1 block w-full border-gray-300
                                             focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="entidad_nacimiento"
                                                   name="entidad_nacimiento"
                                                   placeholder="Entidad federativa donde ha nacido "
                                                   :rules="isRequired"/>
                                            <span
                                                class="text-red-600">{{
                                                    errors.entidad_nacimiento
                                                }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="Edad" value="Edad:"/>
                                            <field id="Edad" type="text" class="mt-1 block w-full border-gray-300 focus:border-indigo-300
                                            focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="edad"
                                                   name="edad"
                                                   placeholder="Edad"
                                                   :rules="isRequired"/>
                                            <span
                                                class="text-red-600">{{
                                                    errors.edad
                                                }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="estado_civil"
                                                       value="Estado Civil:"/>
                                            <Field name="estado_civil" as="select"
                                                   :rules="isRequired"
                                                   v-model="form.estado_civil"
                                                   class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring
                                                   focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm border-gray-300
                                                   focus:border-indigo-300 focus:ring focus:ring-indigo-200
                                                   focus:ring-opacity-50 rounded-md shadow-sm">
                                                <option value="">Seleccione una opción</option>

                                                <option v-for="edo_civil in listas.estados_civil"
                                                        :value="edo_civil">
                                                    {{ edo_civil }}
                                                </option>

                                            </Field>
                                            <span class="text-red-600">{{ errors.estado_civil }}</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-6">
                                    <div class="ml-3 mr-3">
                                        <div class="my-2">
                                            <jet-label for="nivel_de_escolaridad" value="Nivel Maximo de Escolaridad:"/>
                                            <field as="select" id="Nivel_escolaridad" v-model="form.nivel_escolaridad"
                                                   class=" border border-gray-300 text-gray-900 text-sm rounded-lg
                                                     focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300
                                                     focus:border-indigo-300 focus:ring focus:ring-indigo-200
                                                     focus:ring-opacity-50 rounded-md shadow-sm"
                                                   name="nivel_escolaridad" :rules="isRequired">
                                                <option value="">
                                                    Seleccione una opción
                                                </option>
                                                <option v-for="nivel_escolar in listas.niveles_escolares"
                                                        :value="nivel_escolar">
                                                    {{ nivel_escolar }}
                                                </option>
                                            </field>
                                            <span class="text-red-600">{{ errors.nivel_escolaridad }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="en_curso_trunco_o_concluido"
                                                       value="¿En curso, Trunco o Concluido?:"/>
                                            <field as="select" id="Nivel_escolaridad" v-model="form.status_escolar"
                                                   class=" border border-gray-300 text-gray-900 text-sm rounded-lg
                                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                                    border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                                                    focus:ring-opacity-50 rounded-md shadow-sm"
                                                   name="status_escolar"
                                                   :rules="isRequired">
                                                <option value="">
                                                    Seleccione una opción
                                                </option>
                                                <option v-for="status_escolar in listas.status_niveles_escolares"
                                                        :value="status_escolar">
                                                    {{ status_escolar }}
                                                </option>
                                            </field>
                                            <span class="text-red-600">{{ errors.status_escolar }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="parentesco_con_el_infante"
                                                       value="Parentesco con la Niña o el Niño:"/>
                                            <field as="select" id="parentesco_con_el_infante"
                                                   name="parentesco_con_el_infante"
                                                   v-model="form.parentesco_con_el_infante"
                                                   :rules="isRequired"
                                                   class=" border border-gray-300 text-gray-900 text-sm rounded-lg
                                                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-300
                                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200
                                                    focus:ring-opacity-50 rounded-md shadow-sm">
                                                <option value="">
                                                    Seleccione una opción
                                                </option>
                                                <option v-for="parentesco in listas.parentescos" :value="parentesco">
                                                    {{ parentesco }}
                                                </option>
                                            </field>
                                            <span class="text-red-600">{{ errors.parentesco_con_el_infante }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="codigo_postal"
                                                       value="Código Postal:"/>
                                            <field id="codigo_postal" type="text" class="mt-1 block w-full border-gray-300
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                                             rounded-md shadow-sm"
                                                   v-model.number="form.codigo_postal"
                                                   name="codigo_postal"
                                                   placeholder="Código postal"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{ errors.codigo_postal }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="domicilio_particular"
                                                       value="Domicilio particular (avenida o calle):"/>
                                            <field id="domicilio_particular" type="text" class="mt-1 block w-full border-gray-300
                                             focus:border-indigo-300 focus:ring focus:ring-indigo-200
                                              focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.domicilio_particular"
                                                   name="domicilio_particular"
                                                   placeholder="Domicilio particular"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{ errors.domicilio_particular }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="numero_d"
                                                       value="Número (Exterior, Interior, Lote, Manzana etc.):"/>
                                            <field id="numero_direccion" type="text" class="mt-1 block w-full border-gray-300
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                                            rounded-md shadow-sm"
                                                   v-model="form.numero_direccion"
                                                   name="numero_direccion"
                                                   placeholder="Número (Exterior, Interior, Lote, Manzana etc)"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{ errors.numero_direccion }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="colonia"
                                                       value="Colonia:"/>
                                            <field id="colonia" type="text" class="mt-1 block w-full border-gray-300
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                                            rounded-md shadow-sm"
                                                   v-model="form.colonia"
                                                   name="colonia"
                                                   placeholder="Colonia"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{ errors.colonia }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="alcaldia_o_municipio"
                                                       value="Alcaldía o Municipio:"/>
                                            <field id="alcaldia_o_municipio" type="text" class="mt-1 block w-full border-gray-300
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                                             rounded-md shadow-sm"
                                                   v-model="form.alcaldia_o_municipio"
                                                   name="alcaldia_o_municipio"
                                                   placeholder="Alcaldía o Municipio"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{ errors.alcaldia_o_municipio }}</span>
                                        </div>


                                        <div class="my-4">
                                            <jet-label for="telefono_particular"
                                                       value="Teléfono Particular:"/>
                                            <field id="telefono_particular" type="text" class="mt-1 block w-full border-gray-300
                                             focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                                              rounded-md shadow-sm"
                                                   v-model="form.telefono_paticular"
                                                   name="telefono_paticular"
                                                   placeholder="Teléfono Particular"
                                                   :rules="isNumberTelephon"/>
                                            <ErrorMessage class="text-red-600" name="telefono_paticular"/>
                                        </div>

                                    </div>
                                </div>


                                <div class="p-6">
                                    <div class="ml-3 mr-3">
                                        <div class="my-2">
                                            <jet-label for="telefono_celular" value="Teléfono Celular:"/>
                                            <field id="telefono_celular" type="text"
                                                   class="mt-1 block w-full border-gray-300
                                             focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.telefono_celular"
                                                   name="telefono_celular"
                                                   placeholder="Teléfono Celular"
                                                   :rules="isNumberTelephon"
                                            />
                                            <ErrorMessage class="text-red-600" name="telefono_celular"/>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="telefono_recados"
                                                       value=" Teléfono para Recados:"/>
                                            <field id="telefono_recados" type="text"
                                                   class="mt-1 block w-full border-gray-300 focus:border-indigo-300
                                                   focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.telefono_recados"
                                                   name="telefono_recados"
                                                   placeholder="Teléfono para Recados"
                                                   :rules="isNumberTelephon"/>
                                            <ErrorMessage class="text-red-600" name="telefono_recados"/>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="Email"
                                                       value="Correo Electrónico:"/>
                                            <field type="email" id="email"
                                                   class="mt-1 block w-full border-gray-300
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.Email"
                                                   name="Email"
                                                   placeholder="correo electrónico"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{ errors.Email }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="clave_sector"
                                                       value="Clave de Sector:"/>
                                            <field id="clave_sector" type="text"
                                                   class="mt-1 block w-full border-gray-300
                                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.clave_sector"
                                                   name="clave_sector"
                                                   placeholder="Clave de Sector"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{ errors.clave_sector }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="secretaria_o_ente_dministrativo"
                                                       value="Secretaría o Ente Administrativo:"/>
                                            <field id="secretaria_o_ente_dministrativo" type="text"
                                                   class="mt-1 block w-full border-gray-300 focus:border-indigo-300
                                                   focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.secretaria_o_ente_dministrativo"
                                                   name="secretaria_o_ente_dministrativo"
                                                   placeholder="Secretaría o Ente Administrativo"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{
                                                    errors.secretaria_o_ente_dministrativo
                                                }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="clave_unidad_administrativa"
                                                       value="Clave de la Unidad Administrativa:"/>
                                            <field id="clave_unidad_administrativa" type="text"
                                                   class="mt-1 block w-full border-gray-300 focus:border-indigo-300
                                                   focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.clave_unidad_administrativa"
                                                   name="clave_unidad_administrativa"
                                                   placeholder="Clave de la Unidad Administrativa"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{ errors.clave_unidad_administrativa }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="nombre_unidad_administrativa"
                                                       value="Nombre de la Unidad Administrativa:"/>
                                            <field id="nombre_unidad_administrativa" type="text"
                                                   class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring
                                                   focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.nombre_unidad_administrativa"
                                                   name="nombre_unidad_administrativa"
                                                   placeholder="Nombre de la Unidad Administrativa"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{ errors.nombre_unidad_administrativa }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="oficina_o_area_de_adscripcion"
                                                       value="Oficina o Área de Adscripción:"/>
                                            <field id="oficina_o_area_de_adscripcion" type="text"
                                                   class="mt-1 block w-full border-gray-300 focus:border-indigo-300
                                                   focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.oficina_o_area_de_adscripcion"
                                                   name="oficina_o_area_de_adscripcion"
                                                   placeholder="Oficina o Área de Adscripción"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{ errors.oficina_o_area_de_adscripcion }}</span>
                                        </div>

                                        <div class="my-4">
                                            <jet-label for="descripcion_del_puesto"
                                                       value="Descripción del puesto:"/>
                                            <field id="descripcion_del_puesto" type="text"
                                                   class="mt-1 block w-full border-gray-300 focus:border-indigo-300
                                                   focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                                   v-model="form.descripcion_del_puesto"
                                                   name="descripcion_del_puesto"
                                                   placeholder="Descripción del puesto"
                                                   :rules="isRequired"/>
                                            <span class="text-red-600">{{ errors.descripcion_del_puesto }}</span>
                                        </div>

                                        <div class="my-12">

                                            <a>
                                                <jet-button class="bg-blue-600">
                                                    Siguiente
                                                </jet-button>

                                            </a>


                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import JetLabel from '@/Jetstream/Label.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetButton from '@/Jetstream/Button.vue'
import {Form, Field, ErrorMessage} from 'vee-validate';
import {Head, Link} from '@inertiajs/inertia-vue3';
import {usePage} from "@inertiajs/inertia-vue3";
import {ref} from 'vue';
import {computed} from 'vue';
import moment from 'moment';
import {useStore} from 'vuex'

export default defineComponent({
    components: {
        JetLabel,
        JetInput,
        JetButton,
        AppLayout,
        Form,
        Field,
        ErrorMessage,
        Link,
        Head,
        computed

    },
    data() {
        return {
            form: this.$inertia.form({
                nombre: this.data.data.CH_nombres,
                apellido_paterno: this.data.data.CH_paterno,
                apellido_materno: this.data.data.CH_materno,
                genero: '',
                entidad_nacimiento: '',
                nivel_escolaridad: '',
                status_escolar: '',
                parentesco_con_el_infante: '',
                estado_civil: '',
                codigo_postal: '',
                domicilio_particular: '',
                numero_direccion: '',
                colonia: '',
                alcaldia_o_municipio: '',
                telefono_paticular: '',
                rfc: this.data.data.RFC,
                curp: this.data.data.CURP,
                edad: '',
                telefono_celular: '',
                telefono_recados: '',
                Email: '',
                clave_sector: '',
                secretaria_o_ente_dministrativo: '',
                clave_unidad_administrativa: '',
                nombre_unidad_administrativa: '',
                oficina_o_area_de_adscripcion: '',
                descripcion_del_puesto: ''
            }),
            listas: {
                parentescos: ['MADRE',
                    'PADRE',
                    'ABUELA',
                    'ABUELO',
                    'TÍA',
                    ' TÍO',
                    'PERSONA TUTORA LEGAL'],
                niveles_escolares: ['sin estudios', 'Primaria', 'Secundaria', 'Media superior', 'Superior', 'Maestria', 'Doctorado'],
                status_niveles_escolares: ['En curso', 'Trunco', 'Concluido'],
                estados_civil: ['soltero(a)', 'casado(a)', 'Viudo(a)', 'Unión libre', 'divorciado(a)'],
            },
            diccionario_estados_de_la_republica: {
                AS: {clave: 'AS', nombre: 'Aguascalientes'},
                BC: {clave: 'BC', nombre: 'Baja california'},
                BS: {clave: 'BS', nombre: 'Baja california sur'},
                CC: {clave: 'CC', nombre: 'Campeche'},
                CL: {clave: 'CL', nombre: 'Coahuila'},
                CM: {clave: 'CM', nombre: 'Colima'},
                CS: {clave: 'CS', nombre: 'Chiapas'},
                CH: {clave: 'CH', nombre: 'Chihuahua'},
                DF: {clave: 'DF', nombre: 'Ciudad de México'},
                DG: {clave: 'DG', nombre: 'Durango'},
                GT: {clave: 'GT', nombre: 'Guanajuato'},
                GR: {clave: 'GR', nombre: 'Guerrero'},
                HG: {clave: 'HG', nombre: 'Hidalgo'},
                JC: {clave: 'JC', nombre: 'Jalisco'},
                MC: {clave: 'MC', nombre: 'México'},
                MN: {clave: 'MN', nombre: 'Michoacán'},
                MS: {clave: 'MS', nombre: 'Morelos'},
                NT: {clave: 'NT', nombre: 'Nayarit'},
                NL: {clave: 'NL', nombre: 'Nuevo León'},
                OC: {clave: 'OC', nombre: 'Oaxaca'},
                PL: {clave: 'PL', nombre: 'Puebla'},
                QT: {clave: 'QT', nombre: 'Querétaro'},
                QR: {clave: 'QR', nombre: 'Quintana Roo'},
                SP: {clave: 'SP', nombre: 'San Luis Potosí'},
                SL: {clave: 'SL', nombre: 'Sinaloa'},
                SR: {clave: 'SR', nombre: 'Sonora'},
                TC: {clave: 'TC', nombre: 'Tabasco'},
                TS: {clave: 'TS', nombre: 'Tamaulipas'},
                TL: {clave: 'TL', nombre: 'Tlaxcala'},
                VZ: {clave: 'VZ', nombre: 'Veracruz'},
                YN: {clave: 'YN', nombre: 'Yucatan'},
                ZS: {clave: 'ZS', nombre: 'Zacatecas'},
                NE: {clave: 'NE', nombre: 'Nacido en el extranjero'}


            }
        }
    },

    props: {
        data: Object
    },

    setup() {

     const data_sent= ref({
            // nombre: this.data.data.CH_nombres,
            // apellido_paterno: this.data.data.CH_paterno,
            // apellido_materno: this.data.data.CH_materno,
            genero: '',
            entidad_nacimiento: '',
            nivel_escolaridad: '',
            status_escolar: '',
            parentesco_con_el_infante: '',
            estado_civil: '',
            codigo_postal: '',
            domicilio_particular: '',
            numero_direccion: '',
            colonia: '',
            alcaldia_o_municipio: '',
            telefono_paticular: '',
            // rfc: this.data.data.RFC,
            // curp: this.data.data.CURP,
            edad: '',
            telefono_celular: '',
            telefono_recados: '',
            Email: '',
            clave_sector: '',
            secretaria_o_ente_dministrativo: '',
            clave_unidad_administrativa: '',
            nombre_unidad_administrativa: '',
            oficina_o_area_de_adscripcion: '',
            descripcion_del_puesto: ''
        })

        const store = useStore();
        let mensaje = computed(() => store.state.data);
        store.dispatch('fetchData', data_sent);
        // const data_send= computed(data_=>this.form )


        return {mensaje, data_sent};
    },
    mounted() {
        if (localStorage.nombre) {
            this.form.nombre = localStorage.nombre;
        }
        if (localStorage.genero) {
            this.form.genero = localStorage.genero;
        }
        if (localStorage.entidad_nacimiento) {
            this.form.entidad_nacimiento = localStorage.entidad_nacimiento;
        }
        if (localStorage.nivel_escolaridad) {
            this.form.nivel_escolaridad = localStorage.nivel_escolaridad;
        }
        if (localStorage.status_escolar) {
            this.form.status_escolar = localStorage.status_escolar;
        }
        if (localStorage.parentesco_con_el_infante) {
            this.form.parentesco_con_el_infante = localStorage.parentesco_con_el_infante;
        }
        if (localStorage.estado_civil) {
            this.form.estado_civil = localStorage.estado_civil;
        }
        if (localStorage.codigo_postal) {
            this.form.codigo_postal = localStorage.codigo_postal;
        }
        if (localStorage.domicilio_particular) {
            this.form.domicilio_particular = localStorage.domicilio_particular;
        }
        if (localStorage.numero_direccion) {
            this.form.numero_direccion = localStorage.numero_direccion;
        }
        if (localStorage.colonia) {
            this.form.colonia = localStorage.colonia;
        }
        if (localStorage.alcaldia_o_municipio) {
            this.form.alcaldia_o_municipio = localStorage.alcaldia_o_municipio;
        }
        if (localStorage.telefono_paticular) {
            this.form.telefono_paticular = localStorage.telefono_paticular;
        }
        if (localStorage.apellido_paterno) {
            this.form.apellido_paterno = localStorage.apellido_paterno;
        }
        if (localStorage.apellido_materno) {
            this.form.apellido_materno = localStorage.apellido_materno;
        }
        if (localStorage.rfc) {
            this.form.rfc = localStorage.rfc;
        }
        if (localStorage.curp) {
            this.form.curp = localStorage.curp;
        }
        if (localStorage.edad) {
            this.form.edad = localStorage.edad;
        }
        if (localStorage.telefono_celular) {
            this.form.telefono_celular = localStorage.telefono_celular;
        }
        if (localStorage.telefono_recados) {
            this.form.telefono_recados = localStorage.telefono_recados;
        }
        if (localStorage.Email) {
            this.form.Email = localStorage.Email;
        }
        if (localStorage.clave_sector) {
            this.form.clave_sector = localStorage.clave_sector;
        }
        if (localStorage.secretaria_o_ente_dministrativo) {
            this.form.secretaria_o_ente_dministrativo = localStorage.secretaria_o_ente_dministrativo;
        }
        if (localStorage.clave_unidad_administrativa) {
            this.form.clave_unidad_administrativa = localStorage.clave_unidad_administrativa;
        }
        if (localStorage.nombre_unidad_administrativa) {
            this.form.nombre_unidad_administrativa = localStorage.nombre_unidad_administrativa;
        }
        if (localStorage.oficina_o_area_de_adscripcion) {
            this.form.oficina_o_area_de_adscripcion = localStorage.oficina_o_area_de_adscripcion;
        }
        if (localStorage.descripcion_del_puesto) {
            this.form.descripcion_del_puesto = localStorage.descripcion_del_puesto;
        }

    },

    methods: {
        onSubmit(value) {
            this.persist();
            var curp = (this.form.curp).toUpperCase();
            var genero_curp = curp.substring(11, 13);
            // const store = useStore();
            this.form=this.data;

            console.log(genero_curp);
            this.$inertia.get(route('datos-tutor.create-P2'));
        },
        persist() {
            localStorage.nombre = this.form.nombre;
            localStorage.genero = this.form.genero;
            localStorage.entidad_nacimiento = this.form.entidad_nacimiento;
            localStorage.nivel_escolaridad = this.form.nivel_escolaridad;
            localStorage.status_escolar = this.form.status_escolar;
            localStorage.parentesco_con_el_infante = this.form.parentesco_con_el_infante;
            localStorage.estado_civil = this.form.estado_civil;
            localStorage.codigo_postal = this.form.codigo_postal;
            localStorage.domicilio_particular = this.form.domicilio_particular;
            localStorage.numero_direccion = this.form.numero_direccion;
            localStorage.colonia = this.form.colonia;
            localStorage.alcaldia_o_municipio = this.form.alcaldia_o_municipio;
            localStorage.telefono_paticular = this.form.telefono_paticular;
            localStorage.apellido_paterno = this.form.apellido_paterno;
            localStorage.apellido_materno = this.form.apellido_materno;
            localStorage.rfc = this.form.rfc;
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
        },
        fecha_actual() {
            return moment();
        },

        fecha_nacimiento_s21(curp) {
            var anho = curp.substring(4, 10);
            let dateFormat = 'YYMMDD';
            return moment(anho, dateFormat);
        },
        fecha_nacimiento_s20(curp) {
            var fecha_nacimiento = curp.substring(4, 10);
            let sub_anho = fecha_nacimiento.substring(0, 2);
            var anho = parseInt(sub_anho) + 1900;
            let mes = fecha_nacimiento.substring(2, 4);
            let dia = fecha_nacimiento.substring(4, 6);
            let fecha = '' + anho + mes + dia;
            let dateFormat = 'YYYYMMDD';
            return moment(fecha, dateFormat);
        },
        inicio_de_siglo_21() {
            let dateFormat = 'YYYYMMDD';
            return moment('20000101', dateFormat);
        },
        fecha_minima_siglo_20() {
            let dateFormat = 'YYYYMMDD';
            return moment('19220101', dateFormat);
        },


        //reglas de validación
        isRequired(value) {
            return value ? true : 'Este campo es requerido';
        },
        isNumberTelephon(value) {
            var regex = /^(\(\+?\d{2,3}\)[\*|\s|\-|\.]?(([\d][\*|\s|\-|\.]?){6})(([\d][\s|\-|\.]?){2})?|(\+?[\d][\s|\-|\.]?){8}(([\d][\s|\-|\.]?){2}(([\d][\s|\-|\.]?){2})?)?)$/;
            if (value) {
                if (regex.test(value)) {
                    return true;
                } else {
                    return 'número telefonico no valido';
                }
            } else {
                return 'Este campo es requerido ';
            }
        },
        isRFC(value) {
            var regex = /^(((?!(([CcKk][Aa][CcKkGg][AaOo])|([Bb][Uu][Ee][YyIi])|([Kk][Oo](([Gg][Ee])|([Jj][Oo])))|([Cc][Oo](([Gg][Ee])|([Jj][AaEeIiOo])))|([QqCcKk][Uu][Ll][Oo])|((([Ff][Ee])|([Jj][Oo])|([Pp][Uu]))[Tt][Oo])|([Rr][Uu][Ii][Nn])|([Gg][Uu][Ee][Yy])|((([Pp][Uu])|([Rr][Aa]))[Tt][Aa])|([Pp][Ee](([Dd][Oo])|([Dd][Aa])|([Nn][Ee])))|([Mm](([Aa][Mm][OoEe])|([Ee][Aa][SsRr])|([Ii][Oo][Nn])|([Uu][Ll][Aa])|([Ee][Oo][Nn])|([Oo][Cc][Oo])))))[A-Za-zñÑ&][aeiouAEIOUxX]?[A-Za-zñÑ&]{2}(((([02468][048])|([13579][26]))0229)|(\d{2})((02((0[1-9])|1\d|2[0-8]))|((((0[13456789])|1[012]))((0[1-9])|((1|2)\d)|30))|(((0[13578])|(1[02]))31)))[a-zA-Z1-9]{2}[\dAa])|([Xx][AaEe][Xx]{2}010101000))$/;
            if (value) {
                if (regex.test(value)) {
                    return true;
                } else {
                    return 'RFC no valido';
                }
            } else {
                return 'Este campo es requerido';
            }
        },
        isCURP(value) {
            var curp = value.toUpperCase();
            var diferenciador_siglo = curp.substring(16, 17);
            let dif_siglo_parseado = parseInt(diferenciador_siglo);
            let tipo_de_dato_siglo = typeof dif_siglo_parseado;
            var regex = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/;

            if (value) {
                if (regex.test(curp)) {
                    if (isNaN(dif_siglo_parseado)) {
                        if (this.fecha_nacimiento_s21(curp).isSameOrBefore(this.fecha_actual())) {
                            if (this.fecha_nacimiento_s21(curp).isSameOrAfter(this.inicio_de_siglo_21())) {
                                return true;
                            }
                        } else {
                            return 'curp no valida';
                        }
                    } else {
                        if (tipo_de_dato_siglo === 'number') {
                            if (this.fecha_nacimiento_s20(curp).isSameOrBefore(this.inicio_de_siglo_21())) {
                                if (this.fecha_nacimiento_s20(curp).isSameOrAfter(this.fecha_minima_siglo_20())) {
                                    return true;
                                }
                            }
                            return 'curp no valida';

                        }
                    }

                } else {
                    return 'CURP no valida';
                }
            } else {
                return 'Este campo es requerido';
            }
        }
        ,
        isCodPost() {

        }


    },
    computed: {
        edad() {
            if (this.form.curp) {
                let curp = this.form.curp;
                let sub_fecha_nacimiento = curp.substring(4, 10); //AAMMDD
                let sub_anho = sub_fecha_nacimiento.substring(0, 2);
                let difenciador_siglo = curp.substring(16, 17);
                let anho;
                let dif_siglo_parseado = parseInt(difenciador_siglo);
                let tipo_de_dato_siglo = typeof dif_siglo_parseado;

                if (isNaN(dif_siglo_parseado)) {
                    // consol.log('parse este no es un numero');
                    let dateFormat = 'YYMMDD';
                    let fecha_de_nacimiento = moment(sub_fecha_nacimiento, dateFormat).toDate();
                    let fecha_actual = moment();
                    let edad = String(fecha_actual.diff(fecha_de_nacimiento, 'years'));
                    this.form.edad = edad;

                    return edad;
                } else {
                    if (tipo_de_dato_siglo === 'number') {
                        let dateFormat = 'YYYYMMDD';
                        anho = parseInt(sub_anho) + 1900;
                        let mes = sub_fecha_nacimiento.substring(2, 4);
                        let dia = sub_fecha_nacimiento.substring(4, 6);
                        let fecha = '' + anho + mes + dia;
                        let fecha_de_nacimiento = moment(fecha, dateFormat).toDate();
                        let edad = this.fecha_actual().diff(fecha_de_nacimiento, 'years');
                        this.form.edad = edad;
                        // console.log('este si lo es');
                        return edad;
                    }
                }

            }


        },
        genero() {
            if (this.form.curp) {
                var curp = (this.form.curp).toUpperCase();
                var genero_curp = curp.substring(10, 11);
                if (genero_curp === 'H') {
                    var genero = 'Masculino';
                    this.form.genero = genero;
                    return genero;
                }
                if (genero_curp === 'M') {
                    var genero = 'Femenino';
                    this.form.genero = genero;
                    return genero;
                }
            }
        },
        entidad_nacimiento() {

            if (this.form.curp) {
                let curp = (this.form.curp).toUpperCase();
                let edo_nacimiento = curp.substring(11, 13);
                let nombre_estado;
                let entidad_nacimiento_curp = Object.entries(this.diccionario_estados_de_la_republica);
                for (let edo in entidad_nacimiento_curp) {
                    for (let estao in entidad_nacimiento_curp[edo]) {
                        let sub_edo = (entidad_nacimiento_curp[edo][estao]);
                        let nombre = sub_edo.nombre;
                        let clave = sub_edo.clave;
                        if (edo_nacimiento === clave) {
                            this.form.entidad_nacimiento = nombre;
                            nombre_estado = nombre;
                            break;
                        }

                    }

                }

                return nombre_estado;
            }

        }
    }

})
</script>
