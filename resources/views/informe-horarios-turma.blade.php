<!DOCTYPE html>
<html>
@include('template-site.head')
<body>
<!-- body -->
	<div class="body-content">
		<div class="container">
			<div class="body-content1">
			<!-- header -->
				@include('template-site.topo')
			<!-- //header -->
			<!-- nav -->
				@include('template-horarios.nav')
			<!-- //nav -->
			<ol class="breadcrumb">
				<li><a href="{{ URL::to('horarios') }}">Horarios</a></li>
				<li class="active">Horarios {{$id_turma}}</li>
			</ol>
			<!-- banner -->
				@include('template-site.banner')

@foreach($horarios as $horarios)
<div class="services">
    <h2>Horarios</h2>
    <div class="services-grids">
        <div class="panel-body">

                   <div class="dataTable_wrapper">
                       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                           <thead>
                               <tr>
                                   <th>Turma</th>

                                    <th>{{$id_turma}}</th>

                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>
                                     <div class="form-group">
                                       <h1>

                                         <div class="form-group">

                                         </div>
                                      </h1>
                                    </div>
                                   </td>
                                   <td>segunda</td>
                                   <td>terça</td>
                                   <td>quarta</td>
                                   <td>Quinta</td>
                                   <td>Sexta</td>
                               </tr>
                               <tr>
                                   <td>1Tempo</td>
                                   <td>{{$horarios->seg_1t}}</td>
                                   <td>{{$horarios->terc_1t}}</td>
                                   <td>{{$horarios->quart_1t}}</td>
                                   <td>{{$horarios->quint_1t}}</td>
                                   <td>{{$horarios->sext_1t}}</td>
                               </tr>
                               <tr>
                                   <td>2Tempo</td>
                                    <td>{{$horarios->seg_2t}}</td>
                                    <td>{{$horarios->terc_2t}}</td>
                                    <td>{{$horarios->quart_2t}}</td>
                                    <td>{{$horarios->quint_2t}}</td>
                                    <td>{{$horarios->sext_2t}}</td>
                               </tr>
                               <tr>
                                   <td>3Tempo</td>
                                   <td>{{$horarios->seg_3t}}</td>
                                   <td>{{$horarios->terc_3t}}</td>
                                   <td>{{$horarios->quart_3t}}</td>
                                   <td>{{$horarios->quint_3t}}</td>
                                   <td>{{$horarios->sext_3t}}</td>
                               </tr>
                               <tr>
                                   <td>4Tempo</td>
                                   <td>{{$horarios->seg_4t}}</td>
                                   <td>{{$horarios->terc_4t}}</td>
                                   <td>{{$horarios->quart_4t}}</td>
                                   <td>{{$horarios->quint_4t}}</td>
                                   <td>{{$horarios->sext_4t}}</td>
                               </tr>
                               <tr>
                                   <td>5Tempo</td>
                                   <td>{{$horarios->seg_5t}}</td>
                                   <td>{{$horarios->terc_5t}}</td>
                                   <td>{{$horarios->quart_5t}}</td>
                                   <td>{{$horarios->quint_5t}}</td>
                                   <td>{{$horarios->sext_5t}}</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>

               </div>
             </div>

         </div>
@endforeach
 	 	<!--foreach-->


     <!--//Conteudo da pagina###################################################################################-->
     <!--content-->
     @include('template-site.footer')
   <!-- //footer -->
   <!-- here stars scrolling icon -->
   	<script type="text/javascript">
   									$(document).ready(function() {
   										/*
   										var defaults = {
   								  			containerID: 'toTop', // fading element id
   											containerHoverID: 'toTopHover', // fading element hover id
   											scrollSpeed: 1200,
   											easingType: 'linear'
   								 		};
   										*/

   										$().UItoTop({ easingType: 'easeOutQuart' });

   									});
   	</script>
   <!-- //here ends scrolling icon -->
   <!-- for bootstrap working -->
   	<script src="{{ URL:: asset('js/bootstrap.js')}}"></script>
   <!-- //for bootstrap working -->
   </body>
   </html>
