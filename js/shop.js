function generaMenu(menu){
    let result = "";

    for(let i=0; i < menu.length; i++){
        let product = `
            <div class="col-lg-4 col-md-8 mb-lg-10 mb-5">
                <div class="card card-img-top">
                <img src=${menu[i]["img"]} alt="" class="thumbnail img-fluid"/> 
                <div class="pt-3">
                    <p class="fs-3 fw-bold">${menu[i]["nome"]}</p>
                    <p>Ingredienti : ${menu[i]["ingredienti"]}</p>
                    <p>Prezzo : ${menu[i]["prezzo"]}€</p>
                    <p>Quantità disponibile: ${menu[i]["quantita_disponibile"]}</p>
                    <a href="aggiunta_al_carrello.php?id=${menu[i]["codice_prodotto"]}" class="btn btn-success">Aggiungi al carrello</a>
                </div>
                </div>
            </div>
        `;
        result += product;
    }
    return result;
}

function generaStruttura() {
    return `
        <section class="food"> 
            <h1 class="text-center fw-bold font-monospace">Shop</h1>
            <div class="food-card wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        </div>
                    </div>
                    <div class="row pt-5" id="lastdiv">
            
                    </div>
                </div>
            </div>
        </section>
    `
}

$(document).ready(function(){
    $.getJSON("api-shop.php", function(data){
        const main = $("main");
        main.append(generaStruttura());
        const div = $("#lastdiv");
        let code = div.append(generaMenu(data));
    });
});

