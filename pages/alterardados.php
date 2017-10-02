<div class="background-header">
    <div id="container">
        <div class="row">
            <div class="col-md-6">
                <div class="titulo-page-header wow fadeIn">
                    <h1>Alterar Dados</h1>
                    <p>Nesta tela você poderá efetuar a alteração de dados.</p>
                </div>
            </div>
            <div class="col-md-6">
                <form name="form1" class="navbar-form navbar-right wow fadeInRight">
                    <div class="input-group input-group">
                        <input type="text"
                               placeholder="Buscar..."
                               class="form-control">
                        <div class="input-group-btn">
                            <button type="submit"
                                    class="btn btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div> <!-- input-group-btn -->
                    </div> <!-- input group -->
                </form> <!-- form -->
            </div>
        </div>
    </div>
</div>
<form name="form1" method="post" action="" enctype="multipart/form-data">
    <div id="container">
        <div class="row background-body wow fadeInRight">
            <div class="icon-style-azul">
                <i class="fa fa-pencil"></i>
            </div>
            <div class="titulo-page-conteudo-alterar-dados">
                <div class="col-lg-12">
                    <label for="titulo" class="control-label"> Titulo:</label>
                    <section class="panel">
                        <div class="panel-body">
                            <input type="text" value="" class="form-control" placeholder="Preencha um titulo">
                        </div>
                    </section>
                </div>
                <div class="col-lg-12">
                    <label for="titulo" class="control-label"> Texto:</label>
                    <section class="panel">
                        <div class="panel-body">
                            <textarea type="text" value="" class="form-control" rows="6" cols="40"  maxlength="1000" style="resize: none;" placeholder="Escreva a Texto, Max de Caracteres: 1000"></textarea>
                        </div>
                    </section>
                </div>
                <div class="col-lg-12">
                    <label for="titulo" class="control-label"> Titulo:</label>
                    <section class="panel">
                        <div class="panel-body">
                            <input name="foto[]" type="file" multiple class="form-control" value="#">
                            Selecione um arquivo JPG)
                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <label for="data" class="control-label"> Data:</label>
                    <section class="panel">
                        <div class="panel-body">
                            <input type="text"
                                   name="data" required
                                   value=""
                                   class="form-control"
                                   data-mask="99/99/9999" placeholder="Preencha a data">
                        </div>
                    </section>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-success">Salvar Dados</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>