'use strict'


    let search_bar= document.querySelector('form#search_bar');
    // let search_bar_submit= document.querySelector('form#search_bar input[type=submit]');

    search_bar.addEventListener('submit', function checkdate(event) {
        let date = document.querySelector('form#search_bar input[name=check_in]').value;
        console.log(date);
        
    })
    console.log(search_bar);
/*
    let custom_btn = document.querySelector('section#house form input[type=button]');

    custom_btn.addEventListener(onclick, function() {
        realfilebtn.click();
        
    })*/