<template>
    <div class="bg-gray-100">
        <h1 class="p-3 text-blue-900 text-3xl font-extrabold text-center py-4">
            Better home broadband starts from optimizing the setup for best wifi
            experience
        </h1>

        <div class="flex flex-col m-auto justify-center">
            <div
                v-for="(pro, index) in pros"
                :key="index"
                class="justify-center max-w-screen-2xl border"
            >
                <div
                    class="p-3 flex flex-col space-y-3 items-center lg:flex-row lg:justify-around"
                >
                    <img :src="pro.logo" alt="" width="180px" />
                    <div class="max-w-[50rem]">
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
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "hello",
            pros: [
                {
                    logo: "https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/11/MaxisOne-promotion-maxpert.png",
                    title: "Amazing Internet Speed",
                    description:
                        "Maxperts  is our dedicated team of internet experts that’ll help you put together the ultimate home fibre broadband experience. It’s not just about putting a router in your house and leaving it there. Expect a total broadband set-up so you get consistently fast Wi-Fi everywhere you need it to be.",
                },
                {
                    logo: "https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/11/MaxisOne-promotion-maxpert.png",
                    title: "Unlimited Data Usage",
                    description:
                        "SCAN different rooms and living spaces in your home to detect possible signal interferences and understand your family’s internet device needs",
                },
                {
                    logo: "https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/11/MaxisOne-promotion-maxpert.png",
                    title: "Unlimited Data Usage",
                    description:
                        "OPTIMISE your WiFi signal by recommending the best router placement and solutions to increase signal strength and coverage throughout the house for consistently fast int",
                },
                {
                    logo: "https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/11/MaxisOne-promotion-maxpert.png",
                    title: "Unlimited Data Usage",
                    description:
                        "SOLVE your Internet needs with the necessary cabling and installations. Once it’s done, enjoy a stable high-speed Internet surfing experience on multiple devices, all around your home.",
                },
            ],
        };
    },
};
</script>

<style></style>
