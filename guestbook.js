let tasks = [
  {
    label: "My first task",
    author: "Me",
    dueDate: new Date()
  },
  {
    label: "Second task",
    author: "Me",
    dueDate: new Date("2018-11-25")
  }
];

const updateTasksList = function() {
  const todoList = document.querySelector("#todoList");
  todoList.innerHTML = null;
  for (let currentTask of tasks) {
    let newElement = document.createElement("li");
    newElement.innerHTML = currentTask.label;     // only get the date with currentTask.dueDate, otherwise with label for the task itself

    if (currentTask.dueDate < new Date()) {
      newElement.classList.add("overdue");
    }

    newElement.addEventListener("click", function() {
      this.classList.toggle("done");
    });

    todoList.append(newElement);
  }
};

const addTaskButton = document.querySelector("#addTaskButton");
addTaskButton.addEventListener("click", function() {
  let taskLabel = prompt("What do you want to do ?");
  const today = new Date();
  let newTask = {
    label: taskLabel,
    author: "Me(generated)",
    dueDate: new Date(
      today.getFullYear(),
      today.getMonth(),
      today.getDate() + 7
    )
  };
  tasks.push(newTask);

  updateTasksList();
});

updateTasksList();