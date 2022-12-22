const { createApp } = Vue;

const app = createApp({
    data() {
        return {
            tasksList: [],
            taskToAdd: {
                "task": "",
            },
        }
    },
    methods: {
        fetchList() {
            axios.get("api/tasksList.php").then((resp) => {
                this.tasksList = resp.data;
            });
        },
        onSubmit() {
            console.log(this.taskToAdd);
            axios.post("api/tasksList.php", this.taskToAdd, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((resp) => {

                this.fetchList();
            });
        },
        toggle_task(index) {
            this.tasksList[index].completed = !this.tasksList[index].completed;
            console.log(this.tasksList[index].completed);
            axios.post("api/tasksList.php", { "index": index }, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
        },
        onRemove(indexRemove) {
            axios.post("api/tasksList.php", { "indexRemove": indexRemove }, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((resp) => {

                this.fetchList();
            });
        }
    },
    mounted() {
        this.fetchList();
    }
}).mount("#app");