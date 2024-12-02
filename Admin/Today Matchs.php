
    <style>


        /* Conteneur principal */
        .container {
            display: flex;
            flex-wrap: wrap; /* Permet aux divs enfants de passer à la ligne si nécessaire */
            gap: 15px; /* Espacement entre les divs */
            justify-content: center; /* Aligne les divs au centre horizontalement */
            padding: 20px; /* Ajout de marges intérieures */
        }

        /* Divs enfants */
        .child {
            width: 100px;
            height: 100px;
            background-color: #794d9a; /* Couleur de fond pour chaque div */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            border-radius: 8px; /* Coins arrondis */
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); /* Ombre pour un effet esthétique */
        }
        .children{
            height: 90%;
            position: relative;
            width: fit-content;
            max-width: 100%;

        }

        .mainbody2{
            font-family: itim;
        }
    </style>
</head>





<?php



$Show1=true;
$team1="Spurs Totenham";
$team2="Fc Barcelona";
$Stadium="Camp Now";
$Comment="Rayane Zkak";
$Cup="Uefa Champions League";
$Result_team1="2";
$Result_team2="1";


?>


















    <div id="mainbody2" class="mainbody2" style=" width: 100%; height: fit-content; position: absolute; top: 100px; left: 0;display: flex;margin: 0;background-color: #46265c;">
        <div class="matchs" style="width: 95%;margin-bottom: 5%;margin-left: 2.5%;">
            <a href="" style="text-decoration: none;color: initial;">
                <div class="Game" style="height: 200px;width: 100%;background-color: darkgreen;margin-top: 24px;position: relative;">
                    <div class="teams" style="position: relative;height: 80%;width: 100%;background-color: aqua;display: flex;">
                        <div class="gameetat" style="position: absolute;height: 25px;width: 100px; background-color: darkorange;align-self: center;left: 50%;transform: translate(-50%);">
                            <p style="text-align: center;margin-top: 2%;">

                                <?php echo $Result_team1." - ".$Result_team2 ?>


                            </p>
                        </div>
                        <div class="team1" style="width: 50%;background-color: gray;height: 100%;">
                            <div class="team1logo" style="height: 80%;width: 100%;background-color: white;">
                                <img src="https://upload.wikimedia.org/wikipedia/hif/6/6d/Tottenham_Hotspur.png" alt="" style="height: 90%;width: fit-content;align-items: center;position: relative;top: 50%;left: 50%;transform: translate(-50%,-50%);">
                            </div>
                            <div class="team1name" style="height: 20%;width: 100%;background-color: #ececec;position: relative;top: -10%;text-align: center;">
                                <p style="position: relative;top: 20%;">
                                    <?php echo $team1 ?>
                                </p>
                            </div>
                        </div>
                        <div class="team1" style="width: 50%;background-color: gray;height: 100%;">
                            <div class="team1logo" style="height: 80%;width: 100%;background-color: #A51E4A;">
                                <img src="https://upload.wikimedia.org/wikipedia/fr/a/a1/Logo_FC_Barcelona.svg" alt="" style="height: 90%;width: fit-content;align-items: center;position: relative;top: 50%;left: 50%;transform: translate(-50%,-50%);">
        
                            </div>
                            <div class="team1name" style="height: 20%;width: 100%;background-color: rgb(199, 199, 199);position: relative;top: -10%;text-align: center;">
                                <p style="position: relative;top: 20%;">
                                <?php echo $team2 ?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="Gameinfo" style="background-color: darkblue;width: 100%;height: 20%;display: flex;">
                        <div class="info1" style="width: 33.333%;background-color: black;font-size: small;">
                            <div class="Stadium" style="color: aliceblue;text-align: center; font-size: small;">
                                <p>
                                <?php echo $Stadium ?>

                                </p>
                            </div>
                        </div>
                        <div class="info2" style="width: 33.333%;background-color: rgb(66, 57, 57);">
                            <div class="comment" style="color: aliceblue;text-align: center; font-size: small;">
                                <p>
                                <?php echo $Comment ?>
                                </p>
                            </div>
                        </div>
                        <div class="info3" style="width: 33.333%;background-color: rgb(129, 129, 129);">
                            <div class="Cup" style="color: aliceblue;text-align: center; font-size: small;">
                                <p>
                                <?php echo $Cup ?>

                                </p>
                            </div>
                        </div>
                </div>
            </a>

            
    </div>



    <script>
        // Show the initial Live Stream section

        function showMainBody(sectionId, element) {
            // Hide both sections
            document.getElementById('mainbody1').style.display = 'none';
            document.getElementById('mainbody2').style.display = 'none';

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';

            // Remove the active class from all links
            const links = document.querySelectorAll('.header2 a');
            links.forEach(link => link.classList.remove('active'));

            // Add the active class to the clicked link
            element.classList.add('active');
        }

        function toggleOverlay() {
            const overlay = document.getElementById('fullscreenOverlay');
            overlay.classList.toggle('active');
        }
        function hideOverlay() {
    const overlay = document.getElementById('fullscreenOverlay');
    overlay.classList.remove('active');
}

    </script>
</body>
</html>
