<style>
    .menu{
        line-height:2.0;
        /* color: white; */
        width:screen;
        height:100px;
        background-color:grey;
        border:solid 3px yellow;
        display:flex;
        justify-content:space-around;
    }
    .section{
        background-color: #dedede;
        border:solid 1px white;
    }
</style>
<script>
    function redirectTo(url) {
        window.location.href = '../origem/' + url;
    }
</script>

<div class="menu">
    <div class="section usuario">Usuário
        <div class="section-content">
        <button onclick="redirectTo('../usuario/1-create-usuario.php')">Create</button>
        <button onclick="redirectTo('../usuario/2-update-usuario.php')">Update</button>
        <button onclick="redirectTo('../usuario/3-select-usuario.php')">Read</button>
        <button onclick="redirectTo('../usuario/4-delete-usuario.php')">Delete</button>
        </div>
    </div>
    <div class="section origem">Origem
        <div class="section-content">
        <button onclick="redirectTo('../origem/1-create-origem.php')">Create</button>
        <button onclick="redirectTo('../origem/2-update-origem.php')">Update</button>
        <button onclick="redirectTo('../origem/3-select-origem.php')">Read</button>
        <button onclick="redirectTo('../origem/4-delete-origem.php')">Delete</button>
        </div>
    </div>
    <div class="section categoria">Categoria
        <div class="section-content">
        <button onclick="redirectTo('../categoria/1-create-categoria.php')">Create</button>
        <button onclick="redirectTo('../categoria/2-update-categoria.php')">Update</button>
        <button onclick="redirectTo('../categoria/3-select-categoria.php')">Read</button>
        <button onclick="redirectTo('../categoria/4-delete-categoria.php')">Delete</button>
        </div>
    </div>
    <div class="section forma_pagamento">Forma de Pagamento
        <div class="section-content">
        <button onclick="redirectTo('../forma_pagamento/1-create-forma.php')">Create</button>
        <button onclick="redirectTo('../forma_pagamento/2-update-forma.php')">Update</button>
        <button onclick="redirectTo('../forma_pagamento/3-select-forma.php')">Read</button>
        <button onclick="redirectTo('../forma_pagamento/4-delete-forma.php')">Delete</button>
        </div>
    </div>
    <div class="section despesa">Despesa
        <div class="section-content">
        <button onclick="redirectTo('../despesa/1-create-despesa.php')">Create</button>
        <button onclick="redirectTo('../despesa/2-update-despesa.php')">Update</button>
        <button onclick="redirectTo('../despesa/3-select-despesa.php')">Read</button>
        <button onclick="redirectTo('../despesa/4-delete-despesa.php')">Delete</button>
        </div>
    </div>
    <div class="section historico">Histórico
        <div class="section-content">
        <button onclick="redirectTo('../historico/1-create-historico.php')">Create</button>
        <button onclick="redirectTo('../historico/2-update-historico.php')">Update</button>
        <button onclick="redirectTo('../historico/3-select-historico.php')">Read</button>
        <button onclick="redirectTo('../historico/4-delete-historico.php')">Delete</button>
        </div>
    </div>
</div>