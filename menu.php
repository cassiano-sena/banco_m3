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
        window.location.href = url;
    }
</script>

<div class="menu">
    <div class="section usuario">Usuário
        <div class="section-content">
        <button onclick="redirectTo('../usuario/create.php')">Create</button>
        <button onclick="redirectTo('../usuario/update.php')">Update</button>
        <button onclick="redirectTo('../usuario/select.php')">Read</button>
        <button onclick="redirectTo('../usuario/delete.php')">Delete</button>
        </div>
    </div>
    <div class="section origem">Origem
        <div class="section-content">
        <button onclick="redirectTo('../origem/create.php')">Create</button>
        <button onclick="redirectTo('../origem/update.php')">Update</button>
        <button onclick="redirectTo('../origem/select.php')">Read</button>
        <button onclick="redirectTo('../origem/delete.php')">Delete</button>
        </div>
    </div>
    <div class="section categoria">Categoria
        <div class="section-content">
        <button onclick="redirectTo('../categoria/create.php')">Create</button>
        <button onclick="redirectTo('../categoria/update.php')">Update</button>
        <button onclick="redirectTo('../categoria/select.php')">Read</button>
        <button onclick="redirectTo('../categoria/delete.php')">Delete</button>
        </div>
    </div>
    <div class="section forma_pagamento">Forma de Pagamento
        <div class="section-content">
        <button onclick="redirectTo('../forma_pagamento/create.php')">Create</button>
        <button onclick="redirectTo('../forma_pagamento/update.php')">Update</button>
        <button onclick="redirectTo('../forma_pagamento/select.php')">Read</button>
        <button onclick="redirectTo('../forma_pagamento/delete.php')">Delete</button>
        </div>
    </div>
    <div class="section despesa">Despesa
        <div class="section-content">
        <button onclick="redirectTo('../despesa/create.php')">Create</button>
        <button onclick="redirectTo('../despesa/update.php')">Update</button>
        <button onclick="redirectTo('../despesa/select.php')">Read</button>
        <button onclick="redirectTo('../despesa/delete.php')">Delete</button>
        </div>
    </div>
    <div class="section historico">Histórico
        <div class="section-content">
        <button onclick="redirectTo('../historico/create.php')">Create</button>
        <button onclick="redirectTo('../historico/update.php')">Update</button>
        <button onclick="redirectTo('../historico/select.php')">Read</button>
        <button onclick="redirectTo('../historico/delete.php')">Delete</button>
        </div>
    </div>
</div>