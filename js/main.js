const { createApp } = Vue;

const app = createApp({
    data(){
        return{
            tasksList: [],
        }
    },
    methods: {
        fetchList(){
            axios.get("api/tasksList.php").then((resp) => {
                this.tasksList = resp.data;
              });
        }
    },
    mounted(){
        this.fetchList();
    }
}).mount("#app");