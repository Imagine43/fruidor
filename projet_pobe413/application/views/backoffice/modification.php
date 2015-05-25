<div class="container">
    <div class="row">
            <div class="account-wall">
                        <h1 class="text-center login-title">Gestion Client</h1>
            </div>
            <br/>
            <div>
            <form method="post" action='modification'>
            <?php
                $idconn = mysqli_connect('localhost','root','');
                mysqli_select_db($idconn,'fruidor');
                $id = $_GET['id'];
                $sql = 'SELECT * from client where cli_id='.$id.'';
                $req= mysqli_query($idconn,$sql);
                
                //Requete SQL de modification d'une entrée.

                
                echo '<table class="tablegestioncli">';
                echo '<tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse 1</th>
                        <th>Adresse 2</th>
                        <th>Ville</th>
                        <th>Code Postal</th>
                        <th>Téléphone</th>
                        <th>E-Mail</th>
                       </tr> ';
                foreach ($req as $value) 
                {
                    echo '<tr>';
                    echo '<td>'.$value['cli_id'].'</td>';
                    echo '<td><input name="cli_nom" value='.$value['cli_nom'].'></td>';
                    echo '<td><input name ="cli_prenom" value='.$value['cli_prenom'].'></td>';
                    echo '<td><input name ="cli_adr1" value='.$value['cli_adr1'].'></td>';
                    echo '<td><input name ="cli_adr2" valu0e='.$value['cli_adr2'].'></td>';
                    echo '<td><input name ="cli_ville" value='.$value['cli_ville'].'></td>';
                    echo '<td><input name ="cli_cp" value='.$value['cli_cp'].'></td>';
                    echo '<td><input name ="cli_tel" value='.$value['cli_tel'].'></td>';
                    echo '<td><input name ="cli_email" value='.$value['cli_email'].'></td>'; 
                    echo '</tr>';
                }
                // bugs résiduels. 
                $nom = $_GET['cli_nom'];
                $prenom = $_GET['cli_prenom'];
                $adr1 = $_GET['cli_adr1'];
                $adr2 = $_GET['cli_adr2'];
                $ville = $_GET['cli_ville'];
                $cp = $_GET['cli_cp'];
                $tel = $_GET['cli_tel'];
                $email = $_GET['cli_email'];

                $modif = 'UPDATE table client where cli_id='.$id.' SET cli_nom='.$nom.', cli_prenom='.$prenom.', cli_adr1='.$adr1.', cli_adr2='.$adr2.', cli_ville='.$ville.', cli_cp='.$cp.', cli_tel='.$tel.', cli_email='.$email.'';
                echo '</table>';
                print_r($modif);
                echo '<br/>';


                echo '<input type="submit" value="Valider">';
                
                mysqli_close($idconn);
            ?>
            </form>
            </div>
        </div>
</div>