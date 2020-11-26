const todoList = document.querySelector('#List');
const todoForm = document.querySelector('#Form');
const todoSearch = document.querySelector('#todoSearch');
const todoTextarea = todoForm.querySelector('textarea');

function addTask(text) {
    const element = document.createElement("div");
    element.classList.add("element");


    const elementInner = document.querySelector("#elementTemplate").content.cloneNode(true);


    element.append(elementInner);

  

    element.querySelector(".element-text").innerText = text;


    todoList.append(element);
}

todoForm.addEventListener('submit', e => {
    e.preventDefault();

    if (todoTextarea.value !== '') {
        addTask(todoTextarea.value);
        todoTextarea.value = '';
    }
});

todoList.addEventListener("click", e => {
    if (e.target.classList.contains("element-delete")) {
        e.target.closest(".element").remove();
    }
});

