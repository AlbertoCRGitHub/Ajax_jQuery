<?php /* Template Name: MA TODO Page Template */ get_header(); ?>

	<main role="main" class="container">

    <div class="container, mx-auto" style="width: 300px;  padding-top: 120px" >
        <h1 class="fontsatisf display-4" >TODO list</h1>
    </div>

    <div id="cuerpo" class="container row " >
            <div class="col-sm bg-light ">
                <div class=" ">
                    <h1 class="fontsatisf display-5 mt-5 mb-5">Tâches à faire</h1>
                    
                </div>
                <div class="container text-mute ">
                   <div action="#">
                            <label for="taches">Tâches:</label><br>
                            <input type="text" id="taches" name="taches" value="" autofocus><br><br>

                            <input id="buttonSubmit" type="submit" value="Submit"  >
                            <input id="buttonEffacer" type="button" value="Effacer tâche"  >
                            <input id="buttonModifier" type="button" value="Modifier tâche"  >
                            <input id="buttonComplet" type="button" value="Tâche terminée"  >
                            <!--<p>Cliquez sur le bouton pour ajouter une tâche</p>-->
                   </div>
                </div><br/><br/>           
            </div>
            <div class="col-sm  bg-light   ">
                <div>
                    <h1 class="fontsatisf display-5  mt-5 mb-5">Liste de tâches</h1>
                    
                </div>
                <div id="liste" class="liste"  >
                    <ol id="listeOl">  </ol><br/><br/>
                </div>
            </div>   
    </div>
		<!-- /section -->
	</main>


	<br><br>
<?php get_footer(); ?>
