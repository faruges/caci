<template>

    <app-layout title="Datos del tutor">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Formulario para Datos de Tutor
            </h2>
        </template>

        <div class="py-12">
            <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-[url('/img/FondoRepeat.png')]  overflow-hidden shadow-xl sm:rounded-lg">

                    <div>
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                            <div class="mt-8 text-2xl">
                                Bienvenido(a): {{ form.nombre }}
                            </div>

                        </div>

                        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-3">
                            <div class="p-6">
                                <div class="ml-3 mr-3 ">
                                    <div class="my-2">
                                        <jet-label for="nombre" value="nombre:"/>
                                        <jet-input id="nombre" type="text" class="mt-1 block w-full"
                                                   v-model="form.nombre"
                                                   required
                                                   placeholder="Nombre"
                                                   autofocus
                                                   autocomplete="nombre"/>
                                    </div>
                                    <div class="my-4">
                                        <jet-label for="apellido_paterno" value="Apellido Paterno:"/>
                                        <jet-input id="Apellido_paterno" type="text" class="mt-1 block w-full"
                                                   v-model="form.apellido_paterno"
                                                   required
                                                   placeholder="Apellido paterno"
                                                   autofocus
                                                   autocomplete="apellido_paterno"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="apellido_materno:" value="Apellido Materno"/>
                                        <jet-input id="Apellido_materno" type="text" class="mt-1 block w-full"
                                                   v-model="form.apellido_materno"
                                                   required
                                                   placeholder="Apellido materno"
                                                   autofocus
                                                   autocomplete="apellido materno"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="Rfc" value="RFC con Homoclave:"/>
                                        <jet-input id="RFC" type="text" class="mt-1 block w-full" v-model="form.rfc"
                                                   required
                                                   placeholder="RFC con homoclave"
                                                   autofocus
                                                   autocomplete="rfc con homoclave"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="curp" value="CURP:"/>
                                        <jet-input id="CURP" type="text" class="mt-1 block w-full" v-model="form.curp"
                                                   required
                                                   placeholder="CURP"
                                                   autofocus
                                                   autocomplete="CURP"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="genero" value="Genero:"/>
                                        <jet-input id="genero" type="text" class="mt-1 block w-full"
                                                   v-model="form.genero"
                                                   required
                                                   placeholder="genero"
                                                   autofocus
                                                   autocomplete="genero"/>

                                    </div>

                                    <div class="my-4">
                                        <jet-label for="entidad_de_nacimiento"
                                                   value="Entidad Federativa de Nacimiento:"/>
                                        <jet-input id="entidad_federativa" type="text" class="mt-1 block w-full"
                                                   v-model="form.entidad_nacimiento"
                                                   required
                                                   placeholder="Entidad federativa donde ha nacido "
                                                   autofocus
                                                   autocomplete="entidad federativa"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="Edad" value="Edad:"/>
                                        <jet-input id="Edad" type="text" class="mt-1 block w-full" v-model="form.edad"
                                                   required
                                                   placeholder="Edad"
                                                   autofocus
                                                   autocomplete="edad"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="Estado_civil" value="Estado civil:"/>
                                        <select id="estado_civil" v-model="form.estado_civil"
                                                class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                            <option :value="form.estado_civil">
                                                {{ form.estado_civil }}
                                            </option>
                                            <option v-for="edo_civil in form.estados_civil">
                                                {{ edo_civil }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="p-6">
                                <div class="ml-3 mr-3">
                                    <div class="my-2">
                                        <jet-label for="nivel_de_escolaridad" value="Nivel Maximo de Escolaridad:"/>
                                        <select id="Nivel_escolaridad" v-model="form.nivel_escolaridad"
                                                class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                            <option :value="form.nivel_escolaridad">
                                                {{ form.nivel_escolaridad }}
                                            </option>
                                            <option v-for="nivel_escolar in form.niveles_escolares">
                                                {{ nivel_escolar }}
                                            </option>
                                        </select>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="en_curso_trunco_o_concluido"
                                                   value="¿En curso, Trunco o Concluido?:"/>
                                        <select id="Nivel_escolaridad" v-model="form.status_escolar"
                                                class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                            <option :value="form.status_escolar">
                                                {{ form.status_escolar }}
                                            </option>
                                            <option v-for="status_escolar in form.status_niveles_escolares">
                                                {{ status_escolar }}
                                            </option>
                                        </select>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="parentesco_con_el_infante"
                                                   value="Parentesco con la Niña o el Niño:"/>
                                        <select id="parentesco_con_el_infante" v-model="form.parentesco_con_el_infante"
                                                class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                            <option :value="form.parentesco_con_el_infante">
                                                {{ form.parentesco_con_el_infante }}
                                            </option>
                                            <option v-for="parentesco in form.parentescos">
                                                {{ parentesco }}
                                            </option>
                                        </select>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="codigo_postal"
                                                   value="Código Postal:"/>
                                        <jet-input id="codigo_postal" type="text" class="mt-1 block w-full"
                                                   v-model.number="form.codigo_postal"
                                                   required
                                                   placeholder="Código postal"
                                                   autofocus
                                                   autocomplete="Código postal"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="domicilio_particular"
                                                   value="Domicilio particular (avenida o calle):"/>
                                        <jet-input id="domicilio_particular" type="text" class="mt-1 block w-full"
                                                   v-model="form.domicilio_particular"
                                                   required
                                                   placeholder="Domicilio particular"
                                                   autofocus
                                                   autocomplete="domicilio particular"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="numero_d"
                                                   value="Número (Exterior, Interior, Lote, Manzana etc.):"/>
                                        <jet-input id="numero_d" type="text" class="mt-1 block w-full"
                                                   v-model="form.numero_direccion"
                                                   required
                                                   placeholder="Número (Exterior, Interior, Lote, Manzana etc)"
                                                   autofocus
                                                   autocomplete="Número (Exterior, Interior, Lote, Manzana etc.)"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="colonia"
                                                   value="Colonia:"/>
                                        <jet-input id="colonia" type="text" class="mt-1 block w-full"
                                                   v-model="form.colonia"
                                                   required
                                                   placeholder="Colonia"
                                                   autofocus
                                                   autocomplete="Colonia"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="alcaldia_o_municipio"
                                                   value="Alcaldía o Municipio:"/>
                                        <jet-input id="alcaldia_o_municipio" type="text" class="mt-1 block w-full"
                                                   v-model="form.alcaldia_o_municipio"
                                                   required
                                                   placeholder="Alcaldía o Municipio"
                                                   autofocus
                                                   autocomplete="alcaldia o municipio"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="telefono_particular"
                                                   value="Teléfono Particular:"/>
                                        <jet-input id="telefono_particular" type="text" class="mt-1 block w-full"
                                                   v-model="form.telefono_paticular"
                                                   required
                                                   placeholder="Teléfono Particular"
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
                                                   v-model="form.telefono_celular"
                                                   required
                                                   placeholder="Teléfono Celular"
                                                   autofocus
                                                   autocomplete="Teléfono Celular"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="telefono_recados"
                                                   value=" Teléfono para Recados:"/>
                                        <jet-input id="telefono_recados" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="form.telefono_recados"
                                                   required
                                                   placeholder="Teléfono para Recados"
                                                   autofocus
                                                   autocomplete=" Teléfono para Recados"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="Email"
                                                   value="Correo Electrónico:"/>
                                        <jet-input type="email" id="email" class="mt-1 block w-full"
                                                   v-model="form.Email"
                                                   required
                                                   placeholder="correo electrónico"
                                                   autofocus
                                                   autocomplete="Email"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="clave_sector"
                                                   value="Clave de Sector:"/>
                                        <jet-input id="clave_sector" type="text" class="mt-1 block w-full"
                                                   v-model="form.clave_sector"
                                                   required
                                                   placeholder="Clave de Sector"
                                                   autofocus
                                                   autocomplete="Clave de Sector"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="secretaria_o_ente_dministrativo"
                                                   value="Secretaría o Ente Administrativo:"/>
                                        <jet-input id="secretaria_o_ente_dministrativo" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="form.secretaria_o_ente_dministrativo"
                                                   required
                                                   placeholder="Secretaría o Ente Administrativo"
                                                   autofocus
                                                   autocomplete="SECRETARÍA O ENTE ADMINISTRATIVO"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="clave_unidad_administrativa"
                                                   value="Clave de la Unidad Administrativa:"/>
                                        <jet-input id="clave_unidad_administrativa" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="form.clave_unidad_administrativa"
                                                   required
                                                   placeholder="Clave de la Unidad Administrativa"
                                                   autofocus
                                                   autocomplete="Clave de la Unidad Administrativa"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="nombre_unidad_administrativa"
                                                   value="Nombre de la Unidad Administrativa:"/>
                                        <jet-input id="nombre_unidad_administrativa" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="form.nombre_unidad_administrativa"
                                                   required
                                                   placeholder="Nombre de la Unidad Administrativa"
                                                   autofocus
                                                   autocomplete="Nombre de la Unidad Administrativa"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="oficina_o_area_de_adscripcion"
                                                   value="Oficina o Área de Adscripción:"/>
                                        <jet-input id="oficina_o_area_de_adscripcion" type="text"
                                                   class="mt-1 block w-full"
                                                   v-model="form.oficina_o_area_de_adscripcion"
                                                   required
                                                   placeholder="Oficina o Área de Adscripción"
                                                   autofocus
                                                   autocomplete="oficina_o_area_de_adscripcion"/>
                                    </div>

                                    <div class="my-4">
                                        <jet-label for="descripcion_del_puesto"
                                                   value="Descripción del puesto:"/>
                                        <jet-input id="descripcion_del_puesto" type="text" class="mt-1 block w-full"
                                                   v-model="form.descripcion_del_puesto"
                                                   required
                                                   placeholder="Descripción del puesto"
                                                   autofocus
                                                   autocomplete="descripcion_del_puesto"/>
                                    </div>

                                    <div class="my-12">

                                        <a :href="route('datos-tutor.create-P2')">
                                            <jet-button @click="persist" class="bg-blue-600">
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
        AppLayout,

    },
    data() {
        return {
            form: this.$inertia.form({
                nombre: ' Andrés Manuel López Obrador',
                genero: '',
                entidad_nacimiento: '',
                niveles_escolares: ['sin estudios','Primaria', 'Secundaria', 'Media superior', 'Superior', 'Maestria', 'Doctorado'],
                nivel_escolaridad: 'Seleccione una opción',
                status_niveles_escolares: ['En curso', 'Trunco', 'Concluido'],
                status_escolar: 'Seleccione una opción',
                parentescos: ['MADRE',
                    'PADRE',
                    'ABUELA',
                    'ABUELO',
                    'TÍA',
                   ' TÍO',
                    'PERSONA TUTORA LEGAL'],
                parentesco_con_el_infante: 'Seleccione una opción',
                estados_civil: ['soltero(a)', 'casado(a)','Viudo(a)','Unión libre', 'divorciado(a)'],
                estado_civil: 'Seleccione una opción',
                codigo_postal: '',
                domicilio_particular: '',
                numero_direccion: '',
                colonia: '',
                alcaldia_o_municipio: '',
                telefono_paticular: '',
                apellido_paterno: '',
                apellido_materno: '',
                rfc: '',
                curp: '',
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
        }
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


        }

    }

})
</script>
