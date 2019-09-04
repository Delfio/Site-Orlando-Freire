<div class="footer">
    <div class="container">
        <h3>E. E. E. M. F. Professor Orlando Freire</h3>
        <p class="para">A felicidade dos povos e a tranquilidade dos Estados dependem da boa educação da juventude. (Emilio Castelar).</p>
        <div class="footer-contact">
            <form>
                <input type="text" placeholder="Insira seu email para receber notificações" required=" ">
                <input type="submit" value="">
            </form>
        </div>
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <p>OF Tecnologias
                    ₢SENAC-RO
                    Porto Velho, RO.
                <a href="https://www.facebook.com/delfio.francisco.del" target="_blank">Contato Facebook.</a>
                <p>Telefone : 069 99301-4603</p>
            </div>
            <div class="col-md-3 footer-grid">
                <ul>
                    <li><a href="https://www.facebook.com/delfio.francisco.del">Contatot</a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100009562210417&ref=br_rs&lst=100005241101529%3A100009562210417%3A1534771971&sk=photos" target="_blank">Galeria</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <ul>
                    <li><a href="{{ URL:: to('informes')}}">Informes</a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100009562210417&ref=br_rs" target="_blank">Facebook da escola</a></li>
                    <li><a href="{{ URL:: to('/')}}">Home</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
              @foreach($imagem as $imagem)
                <div class="footer-grid-left">
                    <a href="single.html"><img src="{{URL::to('/')}}/img-imagens/{{$imagem->foto}}" alt=" " class="img-responsve" /></a>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="footer-copy">
            <p>&copy 2016 Kids School. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
            <ul>
                <li><a href="#" class="twitter"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Twitter"></span></a></li>
                <li><a href="#" class="p"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Pinterest"></span></a></li>
                <li><a href="#" class="facebook" id="facebook"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Facebook"></span></a></li>
                <li><a href="#" class="dribble"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Dribbble"></span></a></li>
                <li><a href="#" class="rss"><span type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Follow Us On RSS"></span></a></li>
                <div class="clearfix"> </div>
            </ul>
            <script>
                $(function () {
                  $('[data-toggle="tooltip"]').tooltip()
                })
            </script>
        </div>
    </div>
</div>
