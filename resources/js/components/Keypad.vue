<template>
    <div>
        <div class="numbers">
            <button @click="$emit('pressed', key) " :accesskey="key" v-bind:key="numbers[key]" v-for="key in numbers" class="btn btn-light" >{{ key }}</button>

        </div>
        <div class="symbols">
            <button class="btn btn-warning" @click="$emit('clear')">C</button>
            <button @click="$emit('pressed', key) "  v-bind:key="symbols[key]" v-for="key in symbols" class="btn btn-dark" >{{ key }}</button>
            <button class="btn btn-success" @click="$emit('equals')">=</button>
        </div>

    </div>
</template>

<script>
export default {
    name: "Keypad",
    data(){ return {
        numbers: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        symbols: [ " + ", " - ", " * ", " / "]
    }}
}
</script>

<style scoped>
    .btn {
        margin: 5px;
        width: 50px;
        height: 50px;
        font-size: 1.2em;
        font-weight: bold;
    }
</style>
