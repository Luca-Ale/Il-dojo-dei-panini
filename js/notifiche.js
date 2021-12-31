function generaMenu(notifications){
    let result = "";

    for(let i=0; i < notifications.length; i++){
        let notification = `          
            <tr class="text-lowercase">
                <td>${notifications[i]["codice_ordine"]}</td>
                <td>${notifications[i]["DataOra"]}</td>
                <td>${notifications[i]["Oggetto"]}</td>
                <td><a href="articolo-completo.php?id=${notifications[i]["codice_ordine"]}" class="btn btn-success btn-md">leggi</a></td>
            </tr>
        `;
        result += notification;
    }
    return result;
}

function generaStruttura() {
    return `
        <div>
        <h2 class="text-center fw-bold font-monospace">Area notifiche</h2>
            <table class="table table-sm table-responsive-sm table-striped table-dark table-hover fw-light text-center font-monospace">
                <thead>
                    <tr class="fst-italic bg-light">
                        <th id="idOrdine">Numero ordine</th><th id="data">Data ricezione</th><th id="oggetto">Oggetto</th><th id="testo">Testo</th>
                </tr>
                </thead>
                <tbody id="b1">
                    
                </tbody>
            </table>
         </div>
    `
}

$(document).ready(function(){
    $.getJSON("api-notifiche.php", function(data){
        const section = $("#s");
        section.append(generaStruttura());
        const tbody = $("#b1");
        tbody.append(generaMenu(data));
    });
});

