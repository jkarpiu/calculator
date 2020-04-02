<template>
    <div>
        <span>{{display}}</span>
    </div>
</template>

<script>
export default {
    props: ['display']
}
</script>

<style scoped>
    span {
        display: block;
        font-size: 2.75em;
        height: 1.5em;
        color: #3d3d3d;
        min-width: 50px;
        border: 1px #bfbfbf  solid;
        border-radius: 10px;
        background: #bfbfbf;
        margin-bottom: 15px;
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
