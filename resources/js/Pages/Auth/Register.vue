<template>
    <Head title="Modulo de Registro"/>

    <jet-authentication-card>
        <template #logo>
            <jet-authentication-card-logo/>
        </template>

        <jet-validation-errors class="mb-4"/>
        <div class="text-red-700" v-if="(flash.status!='null')">
            <p> {{ flash.status }}</p>
        </div>
        <p class="text-red-700" v-if="form.errors.length">
            <b>Por favor. corrija el o los siguiente(s) error(es): </b>
        <ul>
            <li v-for="error in form.errors">{{ error }}</li>

        </ul>
        </p>

        <form @submit.prevent="submit">
            <div>
                <jet-label for="rfc" value="RFC"/>
                <jet-input id="rfc" type="text" v-on:change="rfcGet" class="mt-1 block w-full" v-model="form.rfc"
                           required autofocus
                           autocomplete="rfc"/>
            </div>
            <div>
            </div>
            <div>
                <jet-label for="name" value="Nombre"/>
                <jet-input id="name" type="text" class="mt-1 block w-full" v-model="nombreTutor" required autofocus
                           autocomplete="name"/>
            </div>

            <div class="mt-4">
                <jet-label for="email" value="Correo Electrónico"/>
                <jet-input id="email" type="email" class="mt-1 block w-full" v-model="correoElectronico" required/>
            </div>

            <div class="mt-4">
                <jet-label for="password" value="Contraseña"/>
                <jet-input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                           autocomplete="new-password"/>
            </div>

            <div class="mt-4">
                <jet-label for="password_confirmation" value="Confirmar contraseña"/>
                <jet-input id="password_confirmation" type="password" class="mt-1 block w-full"
                           v-model="form.password_confirmation" required autocomplete="new-password"/>
            </div>

            <div class="mt-4" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
                <jet-label for="terms">
                    <div class="flex items-center">
                        <jet-checkbox name="terms" id="terms" v-model:checked="form.terms"/>

                        <div class="ml-2">
                            I agree to the <a target="_blank" :href="route('terms.show')"
                                              class="underline text-sm text-gray-600 hover:text-gray-900">Terms of
                            Service</a> and <a target="_blank" :href="route('policy.show')"
                                               class="underline text-sm text-gray-600 hover:text-gray-900">Privacy
                            Policy</a>
                        </div>
                    </div>
                </jet-label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    ¿Ya estás registrado?
                </Link>

                <jet-button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Registrar
                </jet-button>
            </div>
        </form>
    </jet-authentication-card>
</template>

<script>
import {defineComponent} from 'vue'
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
import JetButton from '@/Jetstream/Button.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetCheckbox from '@/Jetstream/Checkbox.vue'
import JetLabel from '@/Jetstream/Label.vue'
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
import {Head, Link} from '@inertiajs/inertia-vue3';


export default defineComponent({
    components: {
        Head,
        JetAuthenticationCard,
        JetAuthenticationCardLogo,
        JetButton,
        JetInput,
        JetCheckbox,
        JetLabel,
        JetValidationErrors,
        Link,
    },

    data() {
        return {
            form: this.$inertia.form({
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                terms: false,
                errors: [],
                rfc: '',

            })
        }
    },

    props: {
        datosTutor: Array,
        flash: Array,

    },

    computed: {
        nombreTutor() {
            if (this.datosTutor) {
                return this.form.name = this.datosTutor.data.CH_nombres;
            }
        },
        correoElectronico() {
            if (this.datosTutor) {
                return this.form.email = this.datosTutor.data.CH_mail;
            }
        }
    },
    methods: {

        submit() {


            this.form.errors = [];
            if (this.form.email == '') {

                this.form.errors.push('el correo electrónico es obligatorio');
            } else if (!this.validEmail(this.form.email)) {
                this.form.errors.push('el correo electrónico no es valido');
            } else {
                this.form.post(this.route('registro'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }


        },
        validEmail: function (email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            return re.test(email);
        },

        rfcGet(e) {
            this.form.rfc = e.target.value;
            //codigo para enviar el RFC al servidor
            this.form.post('register', this.form);


        }


    }
})
</script>
