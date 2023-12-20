<template>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div
            class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4"
        >
            <a
                href="https://www.e-yantra.org/"
                class="flex items-center space-x-3 rtl:space-x-reverse"
            >
                <img
                    src="./../../icons/eyantralogo.svg"
                    class="h-8"
                    alt="Eyantra Logo"
                />
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                    >E-yantra</span
                >
            </a>

            <a href="/login">
                <button
                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
                >
                    Login
                </button>
            </a>
        </div>
    </nav>
</template>
