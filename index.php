<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!--Style -->
    <link rel="stylesheet" href="css/style.css">
    <title>ToDolist</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <h1>ToDoList</h1>
            <ul class="list">
                <li v-for="task,i in tasksList">
                    <span @click="toggle_task(i)" class="task_name" :class="{done : task.completed}">{{task.task}}</span>
                    <button @click="onRemove(i)" class="btn_remove">Remove</button>
                </li>
            </ul>
            <form @submit.prevent="onSubmit" class="addtask_box">
                <input type="text" placeholder="inserire task da aggiungere" v-model="taskToAdd.task">
                <button class="btn_add" ref="btn_add">Add</button>
            </form>
        </div>
    </div>
</body>

<script src="js/main.js"></script>

</html>