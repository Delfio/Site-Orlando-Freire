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
<div class="gallery">

<h3>Listar Fotos</h3>

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

       <h3 id="forms-example" class="">@yield('title')</h3>

       {!! Form::model($foto,['route' =>  ['editfoto.update', $foto->id], 'class' => '','method'=>'PUT']) !!}
           <div class="form-group">
            {!! Form::label('nome', 'Nome: *' ) !!}
            {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => ''] ) !!}
           </div>
           <div class="col-md-12 form-group1 ">
            {!! Form::label('breve_descricao', 'breve_descricao: *' ) !!}
            {!! Form::textarea('breve_descricao', null, ['class' => 'form-control', 'placeholder' => ''] ) !!}
           </div>
           <div class="col-md-12 form-group1 ">
            {!! Form::label('descricao', 'Descrição: *' ) !!}
            {!! Form::textarea('descricao', null, ['class' => 'control-label', 'placeholder' => ''] ) !!}
           </div>
           <div class="form-group">
            {!! Form::label('link_informacao', 'link: *' ) !!}
            {!! Form::text('link_informacao', null, ['class' => 'form-control', 'placeholder' => ''] ) !!}
           </div>
           <div class="form-group">

               <div class="row">
                           <div class="col-xs-6 col-md-12">
                             <a href="#" class="thumbnail">

                                 <img  id="visualizar" width="200" height="300"  src="{{URL:: to('/')}}/img-imagens/{{ $foto->foto }}" alt="Resolução Ideal: 100 X 1481 px" />
                             </a>
                           </div>
               </div>

           </div>

            <div class="form-group">
                <input type="file" id="exampleInputFile"  name="foto" onchange="imagePrincipal(this);">
            </div>


        <div class="form-group">
           {!!Form::submit('ATUALIZAR', ['class' => 'btn btn-lg btn-primary'])!!}

       {!! Form::close() !!}

       @include('painel.modal-delete-foto')

           <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#myModal">
            Deletar Trabalho
           </button>
       </div>


</html>
