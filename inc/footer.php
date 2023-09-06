<!--================ Start footer Area  =================-->	
<footer>
		<div class="footer-area footer-only">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets ">
							<h4 class="footer_title large_title">Notre Mission</h4>
							<p>
								Aroma Events est un site web qui gére les evenements et facilite la connaissance de tout evenement .
							</p>
							<p>
								
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Liens Rapides</h4>
							<ul class="list">
								<li><a href="#">Accueil</a></li>
								<li><a href="#">Evenements</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget instafeed">
						
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contactez nous </h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Siege
								</p>
								<p>2080, Elghazela, Ariana</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Telephone
								</p>
								<p>
									+21656256737 <br>
									+21656256737
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									Hamrouni.firas@esprit.tn <br>
									Hamrouni.firas@esprit.tn
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
<script type="text/javascript" language="javascript">

var nom = document.forms['register']['nom'];
    var prenom = document.forms['register']['Prenom'];
    var tel = document.forms['register']['tel'];
    var adresse = document.forms['register']['adresse'];
    var email = document.forms['register']['email'];
    var login = document.forms['register']['login'];
    var mdp = document.forms['register']['mdp'];
   
    var login_error = document.getElementById("login_error");
    var email_error = document.getElementById("email_error");
    var mdp_error = document.getElementById("mdp_error"); 


    login.addEventListener("blur", loginVerify, true);
    email.addEventListener("blur", emailVerify, true);
    mdp.addEventListener("blur", mdpVerify, true);


    function Validate()
    {
        if(login.value == "")
        {
            login.style.border = "1px solid red";
            login_error.textContent = "Login requis !";
            login.focus();
            return false;
        }

        if(email.value == "")
        {
            email.style.border = "1px solid red";
            email_error.textContent = "Email requis !";
            email.focus();
            return false;
        }

        if(mdp.value == "")
        {
            mdp.style.border = "1px solid red";
            mdp_error.textContent = "Mot de passe requis !";
            mdp.focus();
            return false;
        }

    }

    function loginVerify()
    {
        if(login.value != "")
        {
			alert("Vous n'avez pas entré de login");
            login.style.border = "1px solid #5E6E66";
            login_error.innerHTML = "";
            return true;
        }
    }

    function emailVerify()
    {
        if(email.value != "")
        {
            email.style.border = "1px solid #5E6E66";
            email_error.innerHTML = "";
            return true;
        }
    }

    function mdpVerify()
    {
        if(mdp.value != "")
        {
            mdp.style.border = "1px solid #5E6E66";
            mdp_error.innerHTML = "";
            return true;
        }
    }
</script>
<script type="text/javascript" src="vendors/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" language="javascript" src="C:\wamp\www\Projet Web\views\js\app.js" ></script>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>

</body>
</html>