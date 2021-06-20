<!DOCTYPE html>

<html lang="fr">

    <?php include_once './view/head.html'; ?>    

    <body>

        <?php include_once './view/header.html'; ?>

        
        <div id="positionMap">

            <h1>plan des entrées</h1>

            <div id="map">
               
                <p id="entryA">A</p>

                <p id="entryB">B</p>

                <p id="entryC">C</p>

                <p id="entryD">D</p>



            </div>

            
            <div id="legende">

                
               

                        <p id="titleLegende">legende</p>

                   
                <div id="positionLegende">

                    <ul id="positionLegendeAC">

                        <li>

                            <p>A.place de 1 à 10</p>

                        </li>

                        <li>

                            <p>C.place de 21 à 30</p>

                        </li>
                    </ul>
                    <ul id="positionLegendeBD">

                        <li>

                            <p>B.place de 11 à 20</p>

                        </li>

                        <li>

                            <p>D.place de 31 à 40</p>


                        </li>

                    </ul>
                </div>

            </div>

        </div>
       
    </body>
</html>        