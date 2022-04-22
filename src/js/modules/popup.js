$(document).on ("click", "#hun_nat_btn", function (){
    var button = document.getElementById('hun_nat_btn');
    button.setAttribute('data-type', 'modal-close');
    openModal("success", 'sikeres', 'ASD');
});
const escClose = (button) => {
    if (button.keyCode == 27) {
        closeModal();
    }
};
const openModal = (type, title1, message) => {
    let overlay       = document.createElement("div");
    let box           = document.createElement("div");
    let title         = document.createElement("div");
    let content       = document.createElement("div");
    let button        = document.createElement("div");

    overlay.id        = "modal-overlay"
    overlay.className = "flex hundred-width fixed";
    overlay.style     = "z-index: 998; background: rgba(0,0,0,0.5);";
    box.className     = "white-bgc fifty-width center";
    box.style         = "margin: 250px auto; border-radius: 50px; height: 500px; z-index:999; opacity: 1;";
    title.className   = "flex center darkblue-bgc text-medium oswald";
    title.style       = "min-height: 20%; border-radius: 50px 50px 0 0;";
    content.className = "blueglass-bgc text-extra-small fuzzybubbles";
    content.style     = "min-height: 80%; border-radius: 0 0 50px 50px;";
    title.innerHTML   = title1;
    content.innerHTML = message;

    button.innerHTML  = "<button onclick='closeModal();'>X</button>"
    document.body.appendChild(overlay);
    document.addEventListener("keydown", escClose);
    //ERROR, ARE U SURE, SUCCESS, UNSUCcESS
    if(type == 'error'){
        overlay.appendChild(box);
        box.appendChild(title);
        box.appendChild(content);
        box.appendChild(button);
    }else if(type == 'areUsure'){
        overlay.appendChild(box);
        box.appendChild(title);
        box.appendChild(content);
        box.appendChild(button);
    }else if(type == 'success'){
        console.log('sieres');
        overlay.appendChild(box);
        box.appendChild(title);
        box.appendChild(content);
        box.appendChild(button);
    }else{
        console.log('POPUP ERROR');
    }
    console.log('open');
    //alert('helo');
};
const closeModal = () => {
    var button = document.getElementById('hun_nat_btn');
    document.removeEventListener("keydown", escClose);
    document.body.removeChild(document.getElementById("modal-overlay"));
    button.setAttribute('data-type', 'modal-open');
    //alert('close');
};
