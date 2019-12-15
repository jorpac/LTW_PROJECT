

let realfilebtn= document.querySelector('section#house form input[type=file]');

let custom_btn = document.querySelector('section#house form input[type=button]');

custom_btn.addEventListener(onclick, function() {
    realfilebtn.click();
    
})