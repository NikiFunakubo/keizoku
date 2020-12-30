<template>
<div>
        <span class="right floated">10</span>
        <i class="right floated heart icon" :class="{'inverted red heart icon right floated':this.isLikedBy}"></i>

</div>
</template>
<script>
export default {
    props: {
        initialIsLikedBy: {
            type: Boolean,
            default: false,
        },
    },
    data() {
        return {
            isLikedBy: this.initialIsLikedBy,
        }
    },
}
</script>
