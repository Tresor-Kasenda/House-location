<template>
    <div>
        <a v-for="apartment in appartments" href="" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
            <img src="" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
            <div class="flex justify-between p-4 pt-2.5">
                <div>
                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                    <span class="text-sm">Golf Plateau</span>
                </div>
                <div class="w-max">
                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                </div>
            </div>
        </a>
    </div>
</template>

<script>
    export default {
        props: [
            'appartments'
        ],
        data(){
            return {
                apartments: this.appartments
            }
        },
        methods: {

        }
    }
</script>
