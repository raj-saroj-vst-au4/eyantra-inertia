<template>
    <div id="app">
        <div class="relative slide">
            <div
                class="carousel-indicators absolute bottom-0 flex bg-yellow-100 h-24 w-full justify-center items-center"
            >
                <ol class="z-50 flex w-4/12 justify-center">
                    <li
                        v-for="(img, i) in images"
                        :key="i"
                        class="md:w-4 md:h-4 bg-gray-300 rounded-full cursor-pointer mx-2"
                    ></li>
                </ol>
            </div>
            <div class="carousel-inner relative overflow-hidden w-full">
                <div
                    v-for="(img, i) in images"
                    :id="`slide-${i}`"
                    :key="i"
                    :class="{ active: active === i, 'left-full': active !== i }"
                    class="carousel-item inset-0 relative w-full transform transition-all duration-500 ease-in-out"
                >
                    <img
                        class="block w-full"
                        :src="img"
                        :alt="'Slide ' + (i + 1)"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.left-full {
    transform: translateX(-100%);
}

.carousel-item {
    position: absolute;
    display: block;
    width: 100%;
    backface-visibility: hidden;
}

.carousel-item.active {
    transform: translateX(0);
    z-index: 1;
}
</style>

<script setup>
import { ref, onMounted } from "vue";

const images = [
    "https://picsum.photos/id/237/1024/800",
    "https://picsum.photos/id/238/1024/800",
    "https://picsum.photos/id/239/1024/800",
];

const active = ref(0);

onMounted(() => {
    let i = 0;
    setInterval(() => {
        active.value = i;
        i = (i + 1) % images.length;
    }, 2000);
});
</script>
