<template>
    <form action="">
        <div class="form-group">
            <label for="body" class="sr-only">Share something</label>
            <textarea
                name="body"
                id="body"
                cols="30"
                rows="3"
                class="form-control"
                placeholder="Share something"
            ></textarea>
        </div>

        <button
            class="btn btn-primary btn-block"
            type="submit"
        >Post</button>
    </form>
</template>

<script>
    export default {
        name: "AppTimelineCreate"
    }
</script>

<style scoped>

</style>
