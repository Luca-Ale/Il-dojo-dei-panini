function hasValue(elem) {
    return $(elem).filter(function() { return $(this).val(); }).length > 2;
}

function handleClick() {
    $(this).click(function (e) { 
        e.preventDefault();
        if(hasValue($("#nome,#cognome,#numero_carta"))) {
            window.location.replace("../php/ordine.php");
        } else {
            $("main").append(`<p>Il form non è completo! Riempire tutti i campi!</p>`);
        }
    });
}

$(document).ready(function() {
    let code  = `
        <form id="ciao" class="form-group font-monospace fw-bold fs-3" action="POST">
        <label for="nome" class="form-label">Inserire il nome dell'intestatario</label><input type="text" name="nome" id="nome" class="form-control">
        <label for="cognome" class="form-label">Inserire il cognome dell'intestatario</label><input type="text" name="cognome" id="cognome" class="form-control"> 
        <label for="numero_carta" class="form-label">Inserire il numero della carta</label><input type="text" name="numero_carta" id="numero_carta" class="form-control">
        <label class="form-label">Selezionare un metodo di pagamento</label>
        <select class="form-control form-control-lg mb-3">
            <option value="credito">Carta di credito</option>
            <option value="prepagata">Carta prepagata</option>
        </select>
        </form>
        <input type="button" class="btn btn-success btn-lg" value="procedi con il pagamento" id="b1"/></a>
    `;
    $("main").append(code);
    $("#b1").each(handleClick);
});


/*
<form class="form-group" action="POST">
    <label for="nome">Inserire il nome dell'intestatario</label><input type="text" name="nome">
    <label for="cognome">Inserire il cognome dell'intestatario</label><input type="text" name="cognome">
    <label for="numero_carta">Inserire il numero della carta</label><input type="text" name="numero_carta">
    <select class="form-control form-control-lg">
        <option value="credito">Carta di credito</option>
        <option value="prepagata">Carta prepagata</option>
    </select>
</form>
<a href="ordine.php">Esegui pagamento</a>
*/