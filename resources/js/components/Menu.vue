<template>
    <div class="w-full h-screen bg-gray-400/50 float-left">
        <div
            class="flex flex-col h-screen bg-black/90 text-gray-300 w-96 font-extrabold"
        >
            <a
                class="border-t border-gray-800 px-3 py-3 hover:text-white"
                href="#"
                >HOME</a
            >
            <a
                class="border-t border-gray-800 px-3 py-3 hover:text-white"
                href="/apply"
                >APPLY NOW</a
            >
            <a
                class="border-t border-gray-800 px-3 py-3 hover:text-white"
                href="#fibreplan"
                >MAXIS FIBRE PLANS</a
            >
            <a
                class="border-t border-gray-800 px-3 py-3 hover:text-white"
                href="#coverage"
                >COVERAGE CHECK</a
            >
            <a
                class="border-t border-gray-800 px-3 py-3 text-white"
                href="tel:0123367xxxx"
            >
                <btn>012-3367xxxx</btn>
            </a>

            <a
                class="border-t border-gray-800 px-3 py-3 text-white"
                href="tel:0123367xxxx"
            >
                <btn>TECHNICAL: 123</btn>
            </a>
        </div>
        <div class="fixed top-2 right-2">
            <img
                class="p-2"
                src="https://img.icons8.com/material-outlined/48/ffffff/cancel--v1.png"
                width="50px"
            />
        </div>
    </div>
</template>

<script>
import btn from "./asset/btn.vue";
export default {
    name: "Menu",
    components: { btn },
};
</script>

<style></style>
