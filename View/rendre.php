<!DOCTYPE html>
<html lang="fr" dir="ltr">
	  <head>
			  <meta charset="utf-8">
				<link rel="stylesheet" href="../Public/Boostrap/bootstrap.min.css">
		    <script src="../Public/Js/jquery.min.js"></script>
		    <script src="../Public/Boostrap/bootstrap.min.js"></script>
			  <link href="style.css" rel="stylesheet"  type="text/css">
			  <title>Rendre</title>
	  </head>

  <body>
		<div class="button">
			<span id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal1">Clé</button></span>
			<span id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal2">Fer à repasser</button></span>
			<span id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal3">Guitare</button></span
			<span id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal4">Ballon</button></span>
			<span id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal5">Boules</button></span>
		</div>
	<div>
    <div id="contact-modal1" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<a class="close" data-dismiss="modal">×</a>
    				<h3>Clé</h3>
    			</div>

    			<form id="contactForm" name="contact" role="form" action="saveContact.php" method="post">
    				<div class="modal-body">
    					<div class="form-group">
    						<label for="name">Prenom</label>
    						<input type="text" name="Prenom" class="form-control">
    					</div>
    					<div class="form-group">
    						<label for="email">Numéro</label>
    						<input type="email" name="Numéro" class="form-control">
    					</div>
						<div class="form-group half" >
							<label for="email">Dortoir</label>
							  <select name="debut_mois_formation" >
								<option><?= $information_a_modifier_li['debut_mois_formation'] ?></option>

									<option value="APS">APS</option>
									<option value="APL">APL</option>


							    </select>
						</div>


              <div class="form-group half" >
                <label for="email">Salle</label>
                  <select name="debut_mois_formation" >
                    <option><?= $information_a_modifier_li['debut_mois_formation'] ?></option>

                        <option value="Salle C1">Salle C1</option>
                        <option value="Salle C2">Salle C2</option>
                        <option value="Salle C3">Salle C3</option>
                        <option value="Salle C4">Salle C4</option>
                        <option value="Salle E1">Salle E1</option>
                        <option value="Salle E2">Salle E2</option>
                        <option value="Salle E3">Salle E3</option>
                        <option value="Salle E4">Salle E4</option>
                        <option value="Salle E5">Salle E5</option>
                        <option value="Club Informatique">Club Informatique</option>
                        <option value="Club Cuisine">Club Cuisine</option>
                        <option value="Club Sport">Club Sport</option>
						<option value="Club Journalisme">Club Journalisme</option>
                        <option value="Club Théatre">Club Théatre</option>
                        <option value="Club Musique">Club Musique</option>
						<option value="Laboratoire">Laboratoire</option>
						<option value="Intendance">Intendance</option>

                  </select>
               </div>

    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    					<input type="submit" class="btn btn-success" id="submit" value="Alefa">
    				</div>
    			</form>
    		</div>
    	</div>
    </div>




    <div id="contact-modal2" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<a class="close" data-dismiss="modal">×</a>
    				<h3>Fer à repasser</h3>
    			</div>

    			<form id="contactForm" name="contact" role="form" action="saveContact.php" method="post">
    				<div class="modal-body">
    					<div class="form-group">
    						<label for="name">Prenom</label>
    						<input type="text" name="name" class="form-control">
    					</div>
    					<div class="form-group">
    						<label for="email">Numéro</label>
    						<input type="email" name="email" class="form-control">
    					</div>

    				</div>
					<div class="form-group half" >
							<label for="email">Dortoir</label>
							  <select name="debut_mois_formation" >
								<option><?= $information_a_modifier_li['debut_mois_formation'] ?></option>

									<option value="APS">D1</option>
									<option value="APL">D2</option>
									<option value="APS">D3</option>
									<option value="APL">D4</option>
									<option value="APS">D5</option>
									<option value="APL">D6</option>
									<option value="APS">D7</option>
									<option value="APL">D8</option>
									<option value="APS">D9</option>

							    </select>
						</div>

					<div class="form-group half" >
                <label for="email">Fer</label>
                  <select name="debut_mois_formation" >
                    <option><?= $information_a_modifier_li['debut_mois_formation'] ?></option>

                        <option value="IG">IG</option>
                        <option value="IG1">IG1</option>
                        <option value="IG2">IG2</option>
                        <option value="IF">IF</option>
                        <option value="IF1">IF1</option>
                        <option value="IF2">IF2</option>

                 </select>
					</div>

					<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-success" id="submit" value="Alefa">
    				</div>
    			</form>
    		</div>
    	</div>
    </div>


	<div id="contact-modal3" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<a class="close" data-dismiss="modal">×</a>
    				<h3>Guitare</h3>
    			</div>

    			<form id="contactForm" name="contact" role="form" action="saveContact.php" method="post">
    				<div class="modal-body">
    					<div class="form-group">
    						<label for="name">Prenom</label>
    						<input type="text" name="name" class="form-control">
    					</div>
    					<div class="form-group">
    						<label for="email">Numero</label>
    						<input type="email" name="email" class="form-control">
    					</div>
						<div class="form-group half" >
							<label for="email">Dortoir</label>
							  <select name="debut_mois_formation" >
								<option><?= $information_a_modifier_li['debut_mois_formation'] ?></option>

								<option value="APS">D1</option>
								<option value="APL">D2</option>
								<option value="APS">D3</option>
								<option value="APL">D4</option>
								<option value="APS">D5</option>
								<option value="APL">D6</option>
								<option value="APS">D7</option>
								<option value="APL">D8</option>
								<option value="APS">D9</option>


						    </select>
					</div>
					<div class="form-group half" >
                <label for="email">Type</label>
                  <select name="debut_mois_formation" >
                    <option><?= $information_a_modifier_li['debut_mois_formation'] ?></option>

                        <option value="G1">G1</option>
                        <option value="G2">G2</option>


                 </select>
					</div>

  				</div>
  				<div class="modal-footer">
  					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input type="submit" class="btn btn-success" id="submit" value="Alefa">
  				</div>
  			</form>
  		</div>
  	</div>
  </div>



	<div id="contact-modal4" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<a class="close" data-dismiss="modal">×</a>
    				<h3>Ballon</h3>
    			</div>

    			<form id="contactForm" name="contact" role="form" action="saveContact.php" method="post">
    				<div class="modal-body">
    					<div class="form-group">
    						<label for="name">Prenom</label>
    						<input type="text" name="name" class="form-control">
    					</div>
    					<div class="form-group">
    						<label for="email">Email</label>
    						<input type="email" name="email" class="form-control">
    					</div>

    				</div>
					<div class="form-group half" >
							<label for="email">Dortoir</label>
							  <select name="debut_mois_formation" >
								<option><?= $information_a_modifier_li['debut_mois_formation'] ?></option>
								<option value="APS">D1</option>
								<option value="APL">D2</option>
								<option value="APS">D3</option>
								<option value="APL">D4</option>
								<option value="APS">D5</option>
								<option value="APL">D6</option>
								<option value="APS">D7</option>
								<option value="APL">D8</option>
								<option value="APS">D9</option>


							    </select>
						</div>
					<div class="form-group half" >
                <label for="email">Ballon de </label>
                 <select name="debut_mois_formation" >
                    <option><?= $information_a_modifier_li['debut_mois_formation'] ?></option>

                        <option value="Foot-ball">Foot-ball</option>
                        <option value="Basket-ball">Basket-ball</option>
						<option value="Hand-ball-ball">Hand-ball</option>
						<option value="Volley-ball">Volley-ball-ball</option>


                 </select>
					</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-success" id="submit" value="Alefa">
    				</div>
    			</form>
    		</div>
    	</div>
    </div>



	<div id="contact-modal5" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<a class="close" data-dismiss="modal">×</a>
    				<h3>Boules</h3>
    			</div>

    			<form id="contactForm" name="contact" role="form" action="saveContact.php" method="post">
    				<div class="modal-body">
    					<div class="form-group">
    						<label for="name">Prenom</label>
    						<input type="text" name="name" class="form-control">
    					</div>
    					<div class="form-group">
    						<label for="email">Email</label>
    						<input type="email" name="email" class="form-control">
    					</div>
					<div class="form-group half" >
							<label for="email">Dortoir</label>
							  <select name="debut_mois_formation" >
								<option><?= $information_a_modifier_li['debut_mois_formation'] ?></option>

								<option value="APS">D1</option>
								<option value="APL">D2</option>
								<option value="APS">D3</option>
								<option value="APL">D4</option>
								<option value="APS">D5</option>
								<option value="APL">D6</option>
								<option value="APS">D7</option>
								<option value="APL">D8</option>
								<option value="APS">D9</option>


							    </select>
						</div>
						<div class="form-group half" >
                <label for="email">Type </label>
                 <select name="debut_mois_formation" >
                    <option><?= $information_a_modifier_li['debut_mois_formation'] ?></option>

                        <option value="P1">P1</option>
                        <option value="P2">P2</option>
                 </select>
					</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-success" id="submit" value="Alefa">
    				</div>

    				</div>

    			</form>
    		</div>
    	</div>
    </div>
  </body>
</html>
