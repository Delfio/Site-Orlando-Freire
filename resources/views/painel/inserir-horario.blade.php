
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
@include('template-painel.head')
<body>
<div id="wrapper">

<!----->
        @include('template-painel.topo')


            <!-- Brand and toggle get grouped for better mobile display -->

		   <!-- Collect the nav links, forms, and other content for toggling -->

			<div class="clearfix">
<!-- espaçamento-->
     </div>

		    @include('template-painel.menu')
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
           <div class="content-main">


      		<!--Conteudo da pagina###################################################################################-->
            <div class="grid-form">

                <div class="grid-form1">
                    @if(count($errors) > 0)
                    <div class="alert alert-warningr">
                        <ul>
                        @foreach($errors->all() as $error)

                        <p><b>{!!$error!!}</b></p>

                        @endforeach
                        </ul>
                    </div>
                    @endif
                    <link rel="stylesheet" href="{{ URL:: asset('//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css')}}">

<!-- Latest compiled and minified JavaScript -->
                    <script src="{{ URL:: asset('//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js')}}"></script>

<!-- Latest compiled and minified Locales -->
                    <script src="{{ URL:: asset('//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-zh-CN.min.js')}}"></script>

                    <h3 id="forms-example" class="">Inserir Horarios</h3>

                        <style>
                        table {
                            font-family: arial, sans-serif;
                            border-collapse: collapse;
                            width: 100%;
                        }

                        td, th {
                            border: 1px solid #dddddd;
                            text-align: left;
                            padding: 8px;
                        }

                        tr:nth-child(even) {
                            background-color: #dddddd;
                        }
                        </style>
                        </head>
                        <body>
                        <form action="input-horario" method="POST">
                            {{ csrf_field() }}<!--segurança laravel-->
                        <table data-toggle="table">
                          <tr>
                            <th>Tempos</th>
                            <th>Seg.</th>
                            <th>Terça</th>
                            <th>Quarta</th>
                            <th>Quinta</th>
                            <th>Sexta</th>
                          </tr>

                          <tr>
                            <td>1°Tempo</td>
                            <td>
                                <select name="seg_1t">
                                    <option name="seg_1t" value="Portugues">Portugês</option>
                                    <option name="seg_1t" value="Matemática">Matemática</option>
                                    <option name="seg_1t" value="História">História</option>
                                    <option name="seg_1t" value="Geografia">Geografia</option>
                                    <option name="seg_1t" value="Biologia">Biologia</option>
                                    <option name="seg_1t" value="Física">Física</option>
                                    <option name="seg_1t" value="Química">Química</option>
                                    <option name="seg_1t" value="Artes">Artes</option>
                                    <option name="seg_1t" value="Inglês">Inglês</option>
                                    <option name="seg_1t" value="Espanhol">Espanhol</option>
                                    <option name="seg_1t" value="Redação">Redação</option>
                                    <option name="seg_1t" value="Educação Física">Educação Física</option>
                                </select>
                            <td>
                                <select name="terc_1t">
                                    <option name="terc_1t" value="Portugês">Portugês</option>
                                    <option name="terc_1t" value="Matemática">Matemática</option>
                                    <option name="terc_1t" value="História">História</option>
                                    <option name="terc_1t" value="Geografia">Geografia</option>
                                    <option name="terc_1t" value="Biologia">Biologia</option>
                                    <option name="terc_1t" value="Física">Física</option>
                                    <option name="terc_1t" value="Química">Química</option>
                                    <option name="terc_1t" value="Artes">Artes</option>
                                    <option name="terc_1t" value="Inglês">Inglês</option>
                                    <option name="terc_1t" value="Espanhol">Espanhol</option>
                                    <option name="terc_1t" value="Redação">Redação</option>
                                    <option name="terc_1t" value="Educação Física">Educação Física</option>
                                </select>
                            </td>
                            <td>
                                <select name="quart_1t">
                                    <option name="quart_1t" value="Portugês">Portugês</option>
                                    <option name="quart_1t" value="Matemática">Matemática</option>
                                    <option name="quart_1t" value="História">História</option>
                                    <option name="quart_1t" value="Geografia">Geografia</option>
                                    <option name="quart_1t" value="Biologia">Biologia</option>
                                    <option name="quart_1t" value="Física">Física</option>
                                    <option name="quart_1t" value="Química">Química</option>
                                    <option name="quart_1t" value="Artes">Artes</option>
                                    <option name="quart_1t" value="Inglês">Inglês</option>
                                    <option name="quart_1t" value="Espanhol">Espanhol</option>
                                    <option name="quart_1t" value="Redação">Redação</option>
                                    <option name="quart_1t" value="Educação Física">Educação Física</option>
                                </select>
                            </td>
                            <td>
                                <select name="quint_1t">
                                    <option name="quint_1t" value="Portugês">Portugês</option>
                                    <option name="quint_1t" value="Matemática">Matemática</option>
                                    <option name="quint_1t" value="História">História</option>
                                    <option name="quint_1t" value="Geografia">Geografia</option>
                                    <option name="quint_1t" value="Biologia">Biologia</option>
                                    <option name="quint_1t" value="Física">Física</option>
                                    <option name="quint_1t" value="Química">Química</option>
                                    <option name="quint_1t" value="Artes">Artes</option>
                                    <option name="quint_1t" value="Inglês">Inglês</option>
                                    <option name="quint_1t" value="Espanhol">Espanhol</option>
                                    <option name="quint_1t" value="Redação">Redação</option>
                                    <option name="quint_1t" value="Educação Física">Educação Física</option>
                                </select>
                            </td>
                            <td>
                                <select name="sext_1t">
                                    <option name="sext_1t" value="Portugês">Portugês</option>
                                    <option name="sext_1t" value="Matemática">Matemática</option>
                                    <option name="sext_1t" value="História">História</option>
                                    <option name="sext_1t" value="Geografia">Geografia</option>
                                    <option name="sext_1t" value="Biologia">Biologia</option>
                                    <option name="sext_1t" value="Física">Física</option>
                                    <option name="sext_1t" value="Química">Química</option>
                                    <option name="sext_1t" value="Artes">Artes</option>
                                    <option name="sext_1t" value="Inglês">Inglês</option>
                                    <option name="sext_1t" value="Espanhol">Espanhol</option>
                                    <option name="sext_1t" value="Redação">Redação</option>
                                    <option name="sext_1t" value="Educação Física">Educação Física</option>
                                </select>
                            </td>
                            </td>



                          </tr>
                          <tr>
                            <td>2°Tempo</td>
                            <td>
                                <select name="seg_2t">
                                    <option name="seg_2t" value="Portugês">Portugês</option>
                                    <option name="seg_2t" value="Matemática">Matemática</option>
                                    <option name="seg_2t" value="História">História</option>
                                    <option name="seg_2t" value="Geografia">Geografia</option>
                                    <option name="seg_2t" value="Biologia">Biologia</option>
                                    <option name="seg_2t" value="Física">Física</option>
                                    <option name="seg_2t" value="Química">Química</option>
                                    <option name="seg_2t" value="Artes">Artes</option>
                                    <option name="seg_2t" value="Inglês">Inglês</option>
                                    <option name="seg_2t" value="Espanhol">Espanhol</option>
                                    <option name="seg_2t" value="Redação">Redação</option>
                                    <option name="seg_2t" value="Educação Física">Educação Física</option>
                                </select>
                                <td>
                                    <select name="terc_2t">
                                        <option name="terc_2t" value="Portugês">Portugês</option>
                                        <option name="terc_2t" value="Matemática">Matemática</option>
                                        <option name="terc_2t" value="História">História</option>
                                        <option name="terc_2t" value="Geografia">Geografia</option>
                                        <option name="terc_2t" value="Biologia">Biologia</option>
                                        <option name="terc_2t" value="Física">Física</option>
                                        <option name="terc_2t" value="Química">Química</option>
                                        <option name="terc_2t" value="Artes">Artes</option>
                                        <option name="terc_2t" value="Inglês">Inglês</option>
                                        <option name="terc_2t" value="Espanhol">Espanhol</option>
                                        <option name="terc_2t" value="Redação">Redação</option>
                                        <option name="terc_2t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="quart_2t">
                                        <option name="quart_2t" value="Portugês">Portugês</option>
                                        <option name="quart_2t" value="Matemática">Matemática</option>
                                        <option name="quart_2t" value="História">História</option>
                                        <option name="quart_2t" value="Geografia">Geografia</option>
                                        <option name="quart_2t" value="Biologia">Biologia</option>
                                        <option name="quart_2t" value="Física">Física</option>
                                        <option name="quart_2t" value="Química">Química</option>
                                        <option name="quart_2t" value="Artes">Artes</option>
                                        <option name="quart_2t" value="Inglês">Inglês</option>
                                        <option name="quart_2t" value="Espanhol">Espanhol</option>
                                        <option name="quart_2t" value="Redação">Redação</option>
                                        <option name="quart_2t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="quint_2t">
                                        <option name="quint_2t" value="Portugês">Portugês</option>
                                        <option name="quint_2t" value="Matemática">Matemática</option>
                                        <option name="quint_2t" value="História">História</option>
                                        <option name="quint_2t" value="Geografia">Geografia</option>
                                        <option name="quint_2t" value="Biologia">Biologia</option>
                                        <option name="quint_2t" value="Física">Física</option>
                                        <option name="quint_2t" value="Química">Química</option>
                                        <option name="quint_2t" value="Artes">Artes</option>
                                        <option name="quint_2t" value="Inglês">Inglês</option>
                                        <option name="quint_2t" value="Espanhol">Espanhol</option>
                                        <option name="quint_2t" value="Redação">Redação</option>
                                        <option name="quint_2t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="sext_2t">
                                        <option name="sext_2t" value="Portugês">Portugês</option>
                                        <option name="sext_2t" value="Matemática">Matemática</option>
                                        <option name="sext_2t" value="História">História</option>
                                        <option name="sext_2t" value="Geografia">Geografia</option>
                                        <option name="sext_2t" value="Biologia">Biologia</option>
                                        <option name="sext_2t" value="Física">Física</option>
                                        <option name="sext_2t" value="Química">Química</option>
                                        <option name="sext_2t" value="Artes">Artes</option>
                                        <option name="sext_2t" value="Inglês">Inglês</option>
                                        <option name="sext_2t" value="Espanhol">Espanhol</option>
                                        <option name="sext_2t" value="Redação">Redação</option>
                                        <option name="sext_2t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                            </td>


                          </tr>
                          <tr>
                            <td>3°Tempo</td>
                            <td>
                                <select name="seg_3t">
                                    <option name="seg_3t" value="Portugês">Portugês</option>
                                    <option name="seg_3t" value="Matemática">Matemática</option>
                                    <option name="seg_3t" value="História">História</option>
                                    <option name="seg_3t" value="Geografia">Geografia</option>
                                    <option name="seg_3t" value="Biologia">Biologia</option>
                                    <option name="seg_3t" value="Física">Física</option>
                                    <option name="seg_3t" value="Química">Química</option>
                                    <option name="seg_3t" value="Artes">Artes</option>
                                    <option name="seg_3t" value="Inglês">Inglês</option>
                                    <option name="seg_3t" value="Espanhol">Espanhol</option>
                                    <option name="seg_3t" value="Redação">Redação</option>
                                    <option name="seg_3t" value="Educação Física">Educação Física</option>
                                </select>
                                <td>
                                    <select name="terc_3t">
                                        <option name="terc_3t" value="Portugês">Portugês</option>
                                        <option name="terc_3t" value="Matemática">Matemática</option>
                                        <option name="terc_3t" value="História">História</option>
                                        <option name="terc_3t" value="Geografia">Geografia</option>
                                        <option name="terc_3t" value="Biologia">Biologia</option>
                                        <option name="terc_3t" value="Física">Física</option>
                                        <option name="terc_3t" value="Química">Química</option>
                                        <option name="terc_3t" value="Artes">Artes</option>
                                        <option name="terc_3t" value="Inglês">Inglês</option>
                                        <option name="terc_3t" value="Espanhol">Espanhol</option>
                                        <option name="terc_3t" value="Redação">Redação</option>
                                        <option name="terc_3t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="quart_3t">
                                        <option name="quart_3t" value="Portugês">Portugês</option>
                                        <option name="quart_3t" value="Matemática">Matemática</option>
                                        <option name="quart_3t" value="História">História</option>
                                        <option name="quart_3t" value="Geografia">Geografia</option>
                                        <option name="quart_3t" value="Biologia">Biologia</option>
                                        <option name="quart_3t" value="Física">Física</option>
                                        <option name="quart_3t" value="Química">Química</option>
                                        <option name="quart_3t" value="Artes">Artes</option>
                                        <option name="quart_3t" value="Inglês">Inglês</option>
                                        <option name="quart_3t" value="Espanhol">Espanhol</option>
                                        <option name="quart_3t" value="Redação">Redação</option>
                                        <option name="quart_3t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="quint_3t">
                                        <option name="quint_3t" value="Portugês">Portugês</option>
                                        <option name="quint_3t" value="Matemática">Matemática</option>
                                        <option name="quint_3t" value="História">História</option>
                                        <option name="quint_3t" value="Geografia">Geografia</option>
                                        <option name="quint_3t" value="Biologia">Biologia</option>
                                        <option name="quint_3t" value="Física">Física</option>
                                        <option name="quint_3t" value="Química">Química</option>
                                        <option name="quint_3t" value="Artes">Artes</option>
                                        <option name="quint_3t" value="Inglês">Inglês</option>
                                        <option name="quint_3t" value="Espanhol">Espanhol</option>
                                        <option name="quint_3t" value="Redação">Redação</option>
                                        <option name="quint_3t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="sext_3t">
                                        <option name="sext_3t" value="Portugês">Portugês</option>
                                        <option name="sext_3t" value="Matemática">Matemática</option>
                                        <option name="sext_3t" value="História">História</option>
                                        <option name="sext_3t" value="Geografia">Geografia</option>
                                        <option name="sext_3t" value="Biologia">Biologia</option>
                                        <option name="sext_3t" value="Física">Física</option>
                                        <option name="sext_3t" value="Química">Química</option>
                                        <option name="sext_3t" value="Artes">Artes</option>
                                        <option name="sext_3t" value="Inglês">Inglês</option>
                                        <option name="sext_3t" value="Espanhol">Espanhol</option>
                                        <option name="sext_3t" value="Redação">Redação</option>
                                        <option name="sext_3t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                            </td>
                          </tr>
                          <tr>
                            <td>4°Tempo</td>
                            <td>
                                <select name="seg_4t">
                                    <option name="seg_4t" value="Portugês">Portugês</option>
                                    <option name="seg_4t" value="Matemática">Matemática</option>
                                    <option name="seg_4t" value="História">História</option>
                                    <option name="seg_4t" value="Geografia">Geografia</option>
                                    <option name="seg_4t" value="Biologia">Biologia</option>
                                    <option name="seg_4t" value="Física">Física</option>
                                    <option name="seg_4t" value="Química">Química</option>
                                    <option name="seg_4t" value="Artes">Artes</option>
                                    <option name="seg_4t" value="Inglês">Inglês</option>
                                    <option name="seg_4t" value="Espanhol">Espanhol</option>
                                    <option name="seg_4t" value="Redação">Redação</option>
                                    <option name="seg_4t" value="Educação Física">Educação Física</option>
                                </select>
                                <td>
                                    <select name="terc_4t">
                                        <option name="terc_4t" value="Portugês">Portugês</option>
                                        <option name="terc_4t" value="Matemática">Matemática</option>
                                        <option name="terc_4t" value="História">História</option>
                                        <option name="terc_4t" value="Geografia">Geografia</option>
                                        <option name="terc_4t" value="Biologia">Biologia</option>
                                        <option name="terc_4t" value="Física">Física</option>
                                        <option name="terc_4t" value="Química">Química</option>
                                        <option name="terc_4t" value="Artes">Artes</option>
                                        <option name="terc_4t" value="Inglês">Inglês</option>
                                        <option name="terc_4t" value="Espanhol">Espanhol</option>
                                        <option name="terc_4t" value="Redação">Redação</option>
                                        <option name="terc_4t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="quart_4t">
                                        <option name="quart_4t" value="Portugês">Portugês</option>
                                        <option name="quart_4t" value="Matemática">Matemática</option>
                                        <option name="quart_4t" value="História">História</option>
                                        <option name="quart_4t" value="Geografia">Geografia</option>
                                        <option name="quart_4t" value="Biologia">Biologia</option>
                                        <option name="quart_4t" value="Física">Física</option>
                                        <option name="quart_4t" value="Química">Química</option>
                                        <option name="quart_4t" value="Artes">Artes</option>
                                        <option name="quart_4t" value="Inglês">Inglês</option>
                                        <option name="quart_4t" value="Espanhol">Espanhol</option>
                                        <option name="quart_4t" value="Redação">Redação</option>
                                        <option name="quart_4t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="quint_4t">
                                        <option name="quint_4t" value="Portugês">Portugês</option>
                                        <option name="quint_4t" value="Matemática">Matemática</option>
                                        <option name="quint_4t" value="História">História</option>
                                        <option name="quint_4t" value="Geografia">Geografia</option>
                                        <option name="quint_4t" value="Biologia">Biologia</option>
                                        <option name="quint_4t" value="Física">Física</option>
                                        <option name="quint_4t" value="Química">Química</option>
                                        <option name="quint_4t" value="Artes">Artes</option>
                                        <option name="quint_4t" value="Inglês">Inglês</option>
                                        <option name="quint_4t" value="Espanhol">Espanhol</option>
                                        <option name="quint_4t" value="Redação">Redação</option>
                                        <option name="quint_4t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="sext_4t">
                                        <option name="sext_4t" value="Portugês">Portugês</option>
                                        <option name="sext_4t" value="Matemática">Matemática</option>
                                        <option name="sext_4t" value="História">História</option>
                                        <option name="sext_4t" value="Geografia">Geografia</option>
                                        <option name="sext_4t" value="Biologia">Biologia</option>
                                        <option name="sext_4t" value="Física">Física</option>
                                        <option name="sext_4t" value="Química">Química</option>
                                        <option name="sext_4t" value="Artes">Artes</option>
                                        <option name="sext_4t" value="Inglês">Inglês</option>
                                        <option name="sext_4t" value="Espanhol">Espanhol</option>
                                        <option name="sext_4t" value="Redação">Redação</option>
                                        <option name="sext_4t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                            </td>
                          </tr>
                          <tr>
                            <td>5°Tempo</td>
                            <td>
                                <select name="seg_5t">
                                    <option name="seg_5t" value="Portugês">Portugês</option>
                                    <option name="seg_5t" value="Matemática">Matemática</option>
                                    <option name="seg_5t" value="História">História</option>
                                    <option name="seg_5t" value="Geografia">Geografia</option>
                                    <option name="seg_5t" value="Biologia">Biologia</option>
                                    <option name="seg_5t" value="Física">Física</option>
                                    <option name="seg_5t" value="Química">Química</option>
                                    <option name="seg_5t" value="Artes">Artes</option>
                                    <option name="seg_5t" value="Inglês">Inglês</option>
                                    <option name="seg_5t" value="Espanhol">Espanhol</option>
                                    <option name="seg_5t" value="Redação">Redação</option>
                                    <option name="seg_5t" value="Educação Física">Educação Física</option>
                                </select>
                                <td>
                                    <select name="terc_5t">
                                        <option name="terc_5t" value="Portugês">Portugês</option>
                                        <option name="terc_5t" value="Matemática">Matemática</option>
                                        <option name="terc_5t" value="História">História</option>
                                        <option name="terc_5t" value="Geografia">Geografia</option>
                                        <option name="terc_5t" value="Biologia">Biologia</option>
                                        <option name="terc_5t" value="Física">Física</option>
                                        <option name="terc_5t" value="Química">Química</option>
                                        <option name="terc_5t" value="Artes">Artes</option>
                                        <option name="terc_5t" value="Inglês">Inglês</option>
                                        <option name="terc_5t" value="Espanhol">Espanhol</option>
                                        <option name="terc_5t" value="Redação">Redação</option>
                                        <option name="terc_5t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="quart_5t">
                                        <option name="quart_5t" value="Portugês">Portugês</option>
                                        <option name="quart_5t" value="Matemática">Matemática</option>
                                        <option name="quart_5t" value="História">História</option>
                                        <option name="quart_5t" value="Geografia">Geografia</option>
                                        <option name="quart_5t" value="Biologia">Biologia</option>
                                        <option name="quart_5t" value="Física">Física</option>
                                        <option name="quart_5t" value="Química">Química</option>
                                        <option name="quart_5t" value="Artes">Artes</option>
                                        <option name="quart_5t" value="Inglês">Inglês</option>
                                        <option name="quart_5t" value="Espanhol">Espanhol</option>
                                        <option name="quart_5t" value="Redação">Redação</option>
                                        <option name="quart_5t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="quint_5t">
                                        <option name="quint_5t" value="Portugês">Portugês</option>
                                        <option name="quint_5t" value="Matemática">Matemática</option>
                                        <option name="quint_5t" value="História">História</option>
                                        <option name="quint_5t" value="Geografia">Geografia</option>
                                        <option name="quint_5t" value="Biologia">Biologia</option>
                                        <option name="quint_5t" value="Física">Física</option>
                                        <option name="quint_5t" value="Química">Química</option>
                                        <option name="quint_5t" value="Artes">Artes</option>
                                        <option name="quint_5t" value="Inglês">Inglês</option>
                                        <option name="quint_5t" value="Espanhol">Espanhol</option>
                                        <option name="quint_5t" value="Redação">Redação</option>
                                        <option name="quint_5t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="sext_5t">
                                        <option name="sext_5t" value="Portugês">Portugês</option>
                                        <option name="sext_5t" value="Matemática">Matemática</option>
                                        <option name="sext_5t" value="História">História</option>
                                        <option name="sext_5t" value="Geografia">Geografia</option>
                                        <option name="sext_5t" value="Biologia">Biologia</option>
                                        <option name="sext_5t" value="Física">Física</option>
                                        <option name="sext_5t" value="Química">Química</option>
                                        <option name="sext_5t" value="Artes">Artes</option>
                                        <option name="sext_5t" value="Inglês">Inglês</option>
                                        <option name="sext_5t" value="Espanhol">Espanhol</option>
                                        <option name="sext_5t" value="Redação">Redação</option>
                                        <option name="sext_5t" value="Educação Física">Educação Física</option>
                                    </select>
                                </td>
                            </td>
                          </tr>
                                <select  name="id_turma" >
                                    @foreach($turma as $turma)
                                    <option value="{{$turma->nome}}">{{$turma->nome}}</option>

                                    @endforeach
                                </select>
                        </table>
                        <br>
                        <br>
                        <!---############################ CONTEUDO ##############################-->
                    <button type="submit" name="enviar" class="btn btn-default">Enviar</button>
                    </form>

               <!--%%%%%%%% metodo de inserir no banco %%%%%%%% -->

                    <span class="label label-primary">Este campo é Somente para inserir horarios</span>
                    </div>
        		<!--//Conteudo da pagina###################################################################################-->
        		<!--content-->

        		</div>
        		<div class="clearfix"> </div>
    		</div>
    		<!--Conteudo da pag parte de baixo###################################################################################-->

    		<!--Conteudo da pag parte de baixo###################################################################################--->


		</div>
	</div>
			<div class="clearfix"> </div>
</div>
		<!--//content-->



		<!---->
@include('template-painel.footer')
</body>
</html>
