/*
Template Name: bumasys - Admin & Dashboard Template
Author: Bumi Code
Website: https://Bumi Code.com/
Contact: Bumi Code@gmail.com
File: Two step verification Init Js File
*/

// move next
function moveToNext(elem, count) {
    if (elem.value.length > 0) {
        document.getElementById("digit" + count + "-input").focus();
    }
}
