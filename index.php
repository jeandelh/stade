

<!DOCTYPE html>

<html lang="fr">

    <?php include_once './view/head.html'; ?>    

    <body>
             

                <?php include_once './view/header.html'; ?>
                    
               
           
                <div id="positionForm">

                    <form id="positionForm" method="post" action="treatment.php">

                                <input type="number" name="numberPlace">    

                                <select name="entryStadium">

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
