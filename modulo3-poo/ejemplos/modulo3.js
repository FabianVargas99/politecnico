setTimeout(()=>{
    window.scrollTo(0, document.body.scrollHeight);
    h4 = document.getElementsByTagName("h4");
    for (let i = 0; i < h4.length; i++) {
        h4[i].classList.add("text-danger");
    }
    p = document.getElementsByTagName("p");
    for (let i = 0; i < h4.length; i++) {
        p[i].classList.add("text-primary");
    }
}, 100);
