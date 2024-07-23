function toggleSidebar() {
    var sidebar = document.querySelector(".sidebar");
    sidebar.style.width = sidebar.style.width === "250px" ? "0" : "250px";
  }
  
  document.addEventListener("DOMContentLoaded", function () {
    var parentLinks = document.querySelectorAll(".parent");
  
    parentLinks.forEach(function (link) {
      link.addEventListener("click", function () {
        var subMenu = link.querySelector(".sub-menu");
        if (subMenu) {
          subMenu.style.display =
            subMenu.style.display === "block" ? "none" : "block";
        }
      });
    });
  });