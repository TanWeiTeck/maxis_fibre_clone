<template>
    <div class="p-3 bg-gray-200">
        <h1 class="text-blue-900 text-3xl font-extrabold text-center py-4">
            Level up at life, work and play with the right fibre plan
        </h1>

        <div class="flex flex-wrap m-auto justify-center">
            <div
                v-for="(pro, index) in pros"
                :key="index"
                class="lg:space-x-36 justify-center max-w-[15rem]"
            >
                <div class="py-3 flex flex-col space-y-3 items-center">
                    <img :src="pro.logo" alt="" />
                    <h1
                        class="text-blue-900 font-extrabold text-2xl text-center"
                    >
                        {{ pro.title }}
                    </h1>
                    <p class="text-center">
                        {{ pro.description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "hello",
            pros: [
                {
                    logo: "https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/Setting_Icon.png",
                    title: "Improved WiFi Coverage",
                    description: "Strong WiFi in every room with mesh WiFi.",
                },
                {
                    logo: "https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/Wifi_Icon.png",
                    title: "Dual-band router",
                    description:
                        "2.4Ghz and 5Ghz channels to minimise congestion and signal interference.",
                },
                {
                    logo: "https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/Speed_Icon.png",
                    title: "Superfast speeds up to 800Mbps",
                    description:
                        "Smooth streaming for Ultra HD TV and for using multiple devices at the same time.",
                },
                {
                    logo: "https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/Unlimited_data_Icon.png",
                    title: "Unlimited data",
                    description: "Surf and stream all day without quota.",
                },
                {
                    logo: "https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/Home_wifi_Icon.png",
                    title: "Maxperts Installation",
                    description:
                        "Professional diagnostics and set-up ensure optimal WiFi experience in every room.",
                },
            ],
        };
    },
};
</script>

<style></style>
