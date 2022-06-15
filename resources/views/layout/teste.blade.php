function remover(id) {
    $.ajax({
        type: "DELETE",
        url: "/api/produtos/" + id,
        context: this,
        success: function() {
            console.log('Apagou OK');
            linhas = $("#tabelaProdutos>tbody>tr");
            e = linhas.filter( function(i, elemento) {
                return elemento.cells[0].textContent == id;
            });
            if (e)
                e.remove();
        },
        error: function(error) {
            console.log(error);
        }
    });
}
