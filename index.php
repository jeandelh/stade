

<!DOCTYPE html>

<html lang="fr">

    <?php include_once './view/head.html'; ?>    

    <body>
             

                <?php include_once './view/header.html'; ?>
                    
               
           
                <div id="positionForm">
                    <!--<p>numéros de place</p>
                    
                    <p>entrée</p>-->
                    <form id="positionForm" method="post" action="treatment.php">

                                <input type="number" name="numero_place" placeholder="numéros de place">    

                                <select name="position_stadier">

                                    <option value="a">a</option>

                                    <option value="b">b</option>

                                    <option value="c">c</option>

                                    <option value="d">d</option>

                                </select>

                                
                                <input type="hidden"  name="form-add">
                                <button type="submit" class="btn btn-primary">Submit</button>

                                
                            
                    </form> 

                </div>   
            

           

            


</body>

</html>
