$(document).ready(() => {
  const todoList = $("#ft_list");
  const btn = $("#btn");

  if (document.cookie != "") {
    var arr = document.cookie.split(";");
    var index = Number(arr[arr.length - 1].match(/\d+/)[0]);
    getTodos();
  } else {
    var index = 0;
  }

  function getTodos() {
    arr.forEach((item) => {
      let itemClass = item
        .replace(/([\S]+?)=([\s\S]+)/, "$1")
        .replace(/\s/, "");
      let value = item.replace(/([\s\S]+?)=([\s\S]+)/, "$2");
      let itemDiv = "<div class='" + itemClass + "'>" + value + "</div>";
      todoList.prepend(itemDiv);
    });
  }

  function setCookie(index, item) {
    document.cookie = "item" + index + "=" + item + "; max-age=86400";
  }

  function setItem(item) {
    index++;
    let itemDiv = "<div class='item" + index + "'>" + item + "</div>";
    todoList.prepend(itemDiv);
    setCookie(index, item);
  }

  function itemDel(element) {
    element.remove();
    document.cookie = "" + element.attr("class") + "=; max-age=0";
  }

  btn.click(() => {
    let item = prompt("New todo");
    if (item) {
      setItem(item);
    }
  });

  todoList.click((e) => {
    if (
      $(e.target).attr("id") != "ft_list" &&
      confirm("Do you want to remove todo?")
    )
      itemDel($(e.target));
  });
});
