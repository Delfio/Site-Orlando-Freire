<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<!-- HEAD -->

@include('template-login-app-estudante.head')

<body>
	<h1>Area De Acesso Ao Estudante</h1>
	<div class="w3ls-login box">
		<img src="images/logo-app-estudante.png" alt="logo_img" />
		<!-- form starts here -->
		<form action="#" method="post">
			<div class="agile-field-txt">
				<input type="nome" name="nome" placeholder="Seu nome" required="max:255|min:5f" />
			</div>
			<div class="agile-field-txt">
				<input type="Codigo-Turma" name="Codigo-Turma" placeholder="Código da sua turma" required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password">
					<label class="check" for="check3">Lembrar</label>
				</div>
			</div>
			<div class="w3ls-bot">
				<input type="submit" value="Entrar">
			</div>
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
		<p>© 2018 Area de login estudante. Design by
				<a href="http://facebook.com/delfio.francisco.del/" target="_blank">Delfio</a></p>
	</div>
	<!--//copyright-->
</body>

</html>
