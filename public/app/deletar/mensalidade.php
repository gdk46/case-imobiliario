<div class="d-flex flex-column col-12 justify-content-center text-center">

    <h1>Mensalidade</h1>

    <img src="http://localhost/php/case-imobiliarioa/public/assets/img/icon/trash.svg" alt="" style="height:300px;">
    
    

    <div class="card-body border-top">
        <h4>
            Ao clicar em excluir, você estará excluíndo de forma permanente.
            <br>
            Sendo assim, você não terá como recuperar esses dados
        </h4>
        <a href="?fld=lista&pg=mensalidade" class="btn btn-primary active">Voltar</a>

        <button class="btn btn-secondary active" id="enviar">
            Excluir
        </button>
    </div>

</div>

<script>
    let url_string = window.location.href;
    let url = new URL(url_string);
    let id  = parseInt(url.searchParams.get("id"));

    if(id == null){
        alert();
    }else{
        $("#enviar").click(function(){
            $.ajax({
                type:'POST',
                url:'../../src/ControllerAjax/mensalidade.ajax.php',
                data:{"action": "deletar", "id": id},
                success: function (data) {
                    if(data == 1){
                        $(location).attr('href', '?fld=lista&pg=mensalidade');
                    }else{
                        alert('erro');
                    }
                }
            });
        });
    }
</script>