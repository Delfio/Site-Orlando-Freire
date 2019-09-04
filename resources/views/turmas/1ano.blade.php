<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Abrir informes de atividades</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">

              <h1> Informes </h1>
              <br>
              <h3> Primeiro ano</h3>
                 <a href="{{URL::to('detalhes1a')}}"><button type="button" href="{{ URL:: to('/1a')}}" class="label label-primary" name="button">A</button></a>
                 <a href="{{URL::to('detalhes1b')}}"><button type="button" href="{{ URL:: to('/1a')}}" class="label label-primary" name="button">B</button></a>
                 <a href="{{URL::to('detalhes1c')}}"><button type="button" href="{{ URL:: to('/1a')}}" class="label label-primary" name="button">C</button></a>
<br>
<br>
              <h3> Segundo ano</h3>
                 <a href="{{URL::to('detalhes2a')}}"><button type="button" href="{{ URL:: to('/1a')}}" class="label label-primary" name="button">A</button></a>
                 <a href="{{URL::to('detalhes2b')}}"><button type="button" href="{{ URL:: to('/1a')}}" class="label label-primary" name="button">B</button></a>
                 <a href="{{URL::to('detalhes2c')}}"><button type="button" href="{{ URL:: to('/1a')}}" class="label label-primary" name="button">C</button></a>
<br>
<br>
              <h3> Terceiro ano</h3>
                 <a href="{{URL::to('detalhes3a')}}"><button type="button" href="{{ URL:: to('/1a')}}" class="label label-primary" name="button">A</button></a>
                 <a href="{{URL::to('detalhes3b')}}"><button type="button" href="{{ URL:: to('/1a')}}" class="label label-primary" name="button">B</button></a>
                 <a href="{{URL::to('detalhes3c')}}"><button type="button" href="{{ URL:: to('/1a')}}" class="label label-primary" name="button">C</button></a>

            </div>
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
