/*
Template Name: bumasys - Admin & Dashboard Template
Author: Bumi Code
Website: https://Bumi Code.com/
Contact: Bumi Code@gmail.com
File: Project overview init js
*/

// favourite btn
var favouriteBtn = document.querySelectorAll(".favourite-btn");
if (favouriteBtn) {
    document.querySelectorAll(".favourite-btn").forEach(function (item) {
        item.addEventListener("click", function (event) {
            this.classList.toggle("active");
        });
    });
}
