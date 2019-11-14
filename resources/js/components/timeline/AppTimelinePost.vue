<template>
    <div class="media timeline_post">
        <img src="" alt="" class="mr-3 rounded timeline_avatar">
        <div class="media-body">
            <div class="font-weight-bold">
                Alex
            </div>
            <p>
                Post Body
            </p>
            <app-timeline-post-likes></app-timeline-post-likes>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AppTimelinePost"
    }
</script>

<style scoped>
    .timeline_post {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .timeline_avatar{
        width: 60px;
    }
</style>
