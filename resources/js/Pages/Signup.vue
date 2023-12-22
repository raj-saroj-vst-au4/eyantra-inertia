<template>
    <Head>
        <title>Complete Registration</title>
    </Head>
    <div class="min-h-screen py-16 bg-gray-900">
        <div class="container mx-auto">
            <div
                class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden"
            >
                <div
                    class="w-full lg:w-1/2 flex flex-col items-center justify-between p-12 bg-no-repeat bg-cover bg-center"
                    style="background-image: url('images/robotics2.png')"
                >
                    <h1 class="text-white text-3xl mb-3">Welcome Back</h1>
                    <div>
                        <p class="text-white">
                            e-Yantra Robotics Competition (eYRC) hosted by
                            <a
                                href="https://www.e-yantra.org/"
                                class="text-blue-500 font-semibold"
                                >e-Yantra, IIT Bombay.
                            </a>
                        </p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 py-16 px-12">
                    <h2 class="text-3xl mb-4">Finish signup</h2>
                    <p class="mb-4">Lets wrap-up registration</p>
                    <form action="#">
                        <div class="my-5">
                            <input
                                type="text"
                                placeholder="Your Full Name"
                                class="border border-gray-400 py-1 px-2 w-full"
                            />
                        </div>
                        <div class="grid grid-cols-2 gap-5">
                            <select
                                v-model="selectedCountry"
                                @change="onCountrySelected"
                                class="bg-gray-50 border border-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            >
                                <option :value="null" selected>
                                    Select Country
                                </option>
                                <option
                                    v-for="country in countries"
                                    :key="country.id"
                                    :value="country.country_name"
                                >
                                    {{ country.country_name }}
                                </option>
                            </select>
                            <select
                                v-model="selectedDepartment"
                                class="bg-gray-50 border border-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            >
                                <option :value="null" selected>
                                    Choose Your Department
                                </option>
                                <option
                                    v-for="department in departments"
                                    :key="department.id"
                                    :value="department.dept_code"
                                >
                                    {{ department.name }}
                                </option>
                            </select>
                        </div>
                        <div class="mt-5">
                            <select
                                v-model="selectedCollege"
                                class="bg-gray-50 border border-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            >
                                <option :value="null" selected>
                                    Choose Registration Type
                                </option>
                                <option
                                    v-if="selectedCountry"
                                    v-for="college in colleges"
                                    :key="college.id"
                                    :value="college.clg_code"
                                >
                                    {{
                                        college.college_name +
                                        ", " +
                                        college.city
                                    }}
                                </option>
                            </select>
                        </div>
                        <div class="mt-5">
                            <input
                                type="text"
                                placeholder="College Address"
                                class="border border-gray-400 py-1 px-2 w-full"
                            />
                        </div>
                        <div class="mt-5">
                            <input
                                type="text"
                                placeholder="City"
                                class="border border-gray-400 py-1 px-2 w-full"
                            />
                        </div>
                        <div class="mt-5">
                            <input
                                type="text"
                                placeholder="State"
                                class="border border-gray-400 py-1 px-2 w-full"
                            />
                        </div>
                        <div class="mt-5">
                            <input
                                type="number"
                                placeholder="pincode"
                                class="border border-gray-400 py-1 px-2 w-full"
                            />
                        </div>

                        <div class="mt-5">
                            <button
                                class="w-full bg-blue-500 py-3 text-center text-white"
                            >
                                Continue
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import { ref, onMounted } from "vue";

const countries = ref([]);
const colleges = ref([]);
const departments = ref([]);
const selectedCountry = ref(null);
const selectedCollege = ref(null);
const selectedDepartment = ref(null);

const fetchCountries = async () => {
    try {
        const response = await fetch("/api/countries");
        countries.value = await response.json();
    } catch (error) {
        console.error("Error fetching countries:", error);
    }
};

const fetchDepartments = async () => {
    try {
        const response = await fetch("/api/departments");
        departments.value = await response.json();
    } catch (error) {
        console.error("Error fetching departments:", error);
    }
};

const fetchColleges = async (country) => {
    console.log("incoming country", country);
    try {
        const res = await fetch(`/api/colleges/${country}`);
        const clg = await res.json();
        colleges.value = clg.colleges;
    } catch (err) {
        console.log("error fetching colleges:", err);
    }
};

onMounted(() => {
    fetchCountries();
    fetchDepartments();
});

const onCountrySelected = () => {
    if (selectedCountry.value) {
        const country = selectedCountry.value;
        fetchColleges(country);
    }
};
</script>
