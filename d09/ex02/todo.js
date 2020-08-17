const todoList = document.getElementById("ft_list");
const btn = document.getElementById("btn");

if (document.cookie != "") {
  var arr = document.cookie.split(";");
  var index = Number(arr[arr.length - 1].match(/\d+/)[0]);
  getTodos();
} else {
  var index = 0;
}

function getTodos() {
  arr.forEach((item) => {
    let itemClass = item.replace(/([\S]+?)=([\s\S]+)/, "$1").replace(/\s/, "");
    let value = item.replace(/([\s\S]+?)=([\s\S]+)/, "$2");
    let itemDiv = "<div class='" + itemClass + "'>" + value + "</div>";
    todoList.insertAdjacentHTML("afterbegin", itemDiv);
  });
}

function setCookie(index, item) {
  document.cookie = "item" + index + "=" + item + "; max-age=86400";
}

function setItem(item) {
  index++;
  let itemDiv = "<div class='item" + index + "'>" + item + "</div>";
  todoList.insertAdjacentHTML("afterbegin", itemDiv);
  setCookie(index, item);
}

function itemDel(element) {
  element.remove();
  document.cookie = "" + element.classList[0] + "=; max-age=0";
}

btn.addEventListener("click", () => {
  let item = prompt("New todo");
  if (item) {
    setItem(item);
  }
});

todoList.addEventListener("click", (e) => {
  if (e.target.id != "ft_list" && confirm("Do you want to remove todo?"))
    itemDel(e.target);
});
