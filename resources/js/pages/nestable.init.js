/*
Template Name: bumasys - Admin & Dashboard Template
Author: Bumi Code
Website: https://Bumi Code.com/
Contact: Bumi Code@gmail.com
File: nestable init js
*/

// Nested sortable demo
var nestedSortables = [].slice.call(document.querySelectorAll('.nested-sortable'));

// Loop through each nested sortable element
if (nestedSortables)
    nestedSortables.forEach(function (nestedSort){
        new Sortable(nestedSort, {
            group: 'nested',
            animation: 150,
            fallbackOnBody: true,
            swapThreshold: 0.65
        });
    });

// Nested sortable handle demo
var nestedSortablesHandles = [].slice.call(document.querySelectorAll('.nested-sortable-handle'));
if (nestedSortablesHandles)
    // Loop through each nested sortable element
    nestedSortablesHandles.forEach(function (nestedSortHandle){
        new Sortable(nestedSortHandle, {
            handle: '.handle',
            group: 'nested',
            animation: 150,
            fallbackOnBody: true,
            swapThreshold: 0.65
        });
    });
