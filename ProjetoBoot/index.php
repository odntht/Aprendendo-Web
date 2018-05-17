<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <br>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    Usuário
                    </div> 
                    <form>
                    <div class="panel-body">
                       
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Nome:</label>
                                    <input type="text" name="nome" class="form-control"/>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control"/>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Senha:</label>
                                    <input type="password" name="senha" class="form-control"/>
                                </div>    
                            </div>
                        
                    </div>
                    <div class="panel-footer">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                        <input type="reset" value="Limpar" class="btn btn-warning">
                    </div>
                    </form>
                </div>
            </div>   
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    Dados do Usuário
                    </div> 
                    <div class="panel-body">
                       Nome: <?=$_GET['nome']?>
                        <br>
                       Email: <?=$_GET['email']?>
                       <br>
                       Senha: <?=$_GET['senha']?>
                    </div>
                </div>
            </div>   
            </div>
        </div>
    </body>
</html>
