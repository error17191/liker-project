<template>
    <div>
        <app-timeline-create></app-timeline-create>

        <div class="timeline_posts">
            <app-timeline-post
                v-for="i in 10"
                :key="i"
            />
        </div>
    </div>
</template>

<script>
    export default {
        name: "AppTimeLine"
    }
</script>

<style scoped>
    .timeline_posts {
        margin-top: 40px;
    }
</style>
