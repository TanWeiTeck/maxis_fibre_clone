<template>
    <div>
        <div @click="toggleMenu" v-if="menu" class="fixed w-full z-10">
            <sideMenu />
        </div>
        <div class="z-0">
            <div class="flex items-center justify-between p-4 h-24 z-0">
                <a href="/fibre">
                    <img
                        class="max-w-[15rem] object-contain"
                        src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/maxis_logo-1.jpg"
                        alt="maxis_logo"
                    />
                </a>

                <div
                    class="text-blue-900 justify-end font-extrabold hidden md:block"
                >
                    <a
                        class="border-gray-800 px-3 py-3 hover:text-[#40c706]"
                        href="/"
                        >HOME</a
                    >
                    <a
                        class="border-gray-800 px-3 py-3 text-[#40c706] hover:text-[#40c706]"
                        href="/apply"
                        >APPLY NOW</a
                    >
                    <a
                        class="border-gray-800 px-3 py-3 hover:text-[#40c706]"
                        href="#fibreplan"
                        >MAXIS FIBRE PLANS</a
                    >
                    <a
                        class="border-gray-800 px-3 py-3 hover:text-[#40c706]"
                        href="#coverage"
                        >COVERAGE CHECK</a
                    >
                    <a
                        class="border-gray-800 px-3 py-3 text-white"
                        href="tel:0123367xxxx"
                    >
                        <btn>012-3367xxxx</btn>
                    </a>

                    <a
                        class="border-gray-800 px-3 py-3 text-white"
                        href="tel:0123367xxxx"
                    >
                        <btn>TECHNICAL: 123</btn>
                    </a>
                </div>

                <svg
                    v-if="!menu"
                    @click="toggleMenu"
                    class="md:hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    x="0px"
                    y="0px"
                    width="30"
                    height="30"
                    viewBox="0 0 30 30"
                    style="fill: #26e07f"
                >
                    <path
                        d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"
                    ></path>
                </svg>
            </div>
            <div class="relative bg-yellow-200 min-h-[10rem] tracking-tighter">
                <img
                    class="object-fill w-screen max-h-[20rem]"
                    src="https://assignmentwritinghelp-65.webself.net/file/si444887/writing-background-cover-letter-writing-service-background-fi7123716.jpg"
                    alt="bannerapply"
                />

                <div class="absolute top-0 bg-black/25 min-w-full min-h-full">
                    <h1
                        class="flex min-h-[20rem] items-center text-3xl p-20 text-white xl:text-5xl font-extrabold"
                    >
                        Apply Now
                    </h1>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { METHOD_TYPES } from "@babel/types";
import sideMenu from "./Menu.vue";
import btn from "./asset/btn.vue";

export default {
    components: { sideMenu, btn },
    data() {
        return {
            menu: false,
        };
    },

    methods: {
        toggleMenu() {
            return (this.menu = !this.menu);
        },
    },
};
</script>

<style></style>
