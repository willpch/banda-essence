<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Painel de Agenda</h2>
        </template>

        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-8 ml-0.5 rounded">
                    + Nova agenda
                </button>

                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                        <tr>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-200">Estabelecimento</th>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-200">Endereço</th>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-200">Data do Evento</th>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-200">Hora do Evento</th>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-200">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="agenda in agendas" :key="agenda.id">
                            <td class="border px-4 py-2 dark:text-gray-200">{{ agenda.establishment_name }}</td>
                            <td class="border px-4 py-2 dark:text-gray-200">{{ agenda.establishment_address }}</td>
                            <td class="border px-4 py-2 dark:text-gray-200">{{ formatarData(agenda.event_date) }}</td>
                            <td class="border px-4 py-2 dark:text-gray-200">{{ formatarHora(agenda.event_time) }}</td>
                            <td class="border px-4 py-3 text-center">
                                <div class="flex justify-center">
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mr-2 rounded">
                                        Excluir
                                    </button>
                                    <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                        Editar
                                    </button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    agendas: Array,
});

const formatarData = (data) => {
    const dataObj = new Date(data);
    const dia = String(dataObj.getDate()).padStart(2, '0');
    const mes = String(dataObj.getMonth() + 1).padStart(2, '0');
    const ano = String(dataObj.getFullYear()).slice(-2); // Pegando os últimos dois dígitos do ano

    return `${dia}/${mes}/${ano}`;
};

const formatarHora = (hora) => {
    if (!hora) return ''; // Verifica se a hora é válida

    // Divide a string de hora para obter a parte da hora e dos minutos
    const [horaParte, minutosParte] = hora.split(':');

    // Formata a hora e os minutos com dois dígitos cada
    const horaFormatada = horaParte.padStart(2, '0');
    const minutosFormatados = minutosParte.padStart(2, '0');

    return `${horaFormatada}:${minutosFormatados}`;
};
</script>
