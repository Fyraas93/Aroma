<?PHP

class Events_core {
    function recuperer_dernier_id()
    {
        $db = config::getConnexion();
        return $db->lastInsertId();
    }
    /*public function get_catalogue($id_Events)
    {
        $db = config::getConnexion();
        $req=$db->prepare("SELECT * from catalogue where ide_Events=?");
        $req->execute(array($id_Events));
        return $req->fetchAll(PDO::FETCH_OBJ);
    }*/
    function affiche_Events(){ 

        $sql="SELECT * From Events p inner join categorie c on p.idcat=c.idcat";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
  
	function ajouter_Events($Events){
		$sql="insert into Events (prix,quantite,nom,image,description, idcat) 
		values (:prix,:quantite,:nom,:image,:description,:idcat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
       
        $prix=$Events->getprix();
        $quantite=$Events->getquantite();
        $nom=$Events->getnom();
        $image=$Events->getimage();
        $description=$Events->getdescription();
        $idcat=$Events->getidcat();
  
		
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':nom',$nom);
        $req->bindValue(':image',$image);
        $req->bindValue(':description',$description);
        $req->bindValue(':idcat',$idcat);
        
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function supprimer_Events($id){
		$sql="DELETE FROM Events where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifier_Events($Events,$id){
		$sql="UPDATE Events SET prix=:prix,quantite=:quantite,nom=:nom,image=:image,description=:description,idcat=:idecat WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		
        $prix=$Events->getprix();
        $quantite=$Events->getquantite();
        $nom=$Events->getnom_Events();
        $image=$Events->getimage_();
        $description=$Events->getdescription();
        $idcat=$Events->getidcat();

		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':nom',$nom);
        $req->bindValue(':image',$image);
        $req->bindValue(':description',$description);
        $req->bindValue(':idcat',$idcat);
        $req->bindValue(':id',$id);
      
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
    public function recherche($valeur)
    {
        $sql="SELECT * from Events where nom like '%$valeur%'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste->fetchAll(PDO::FETCH_OBJ);
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recuperer_Events($id){
        $sql="SELECT * from Events where id=$id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
       
            return $liste->fetch();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function GetEventsbycategory($idcat)
    {

        $sql="SELECT * from Events p inner join categorie c on p.idcat=c.idcat where p.idcat=$idcat";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
       
            return $liste->fetchAll();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
        
    }
    public static function tri_Events()
    {
        $db = config::getConnexion();
        $sql = "SELECT * FROM Events ORDER by nom ASC";
        $liste = $db->query($sql);
        return $liste;
    }
    public static function tri_prix_Events()
    {
        $db = config::getConnexion();
        $sql = "SELECT * FROM Events ORDER by prix DESC";
        $liste = $db->query($sql);
        return $liste;
    }
    function afficher_nouveautes(){
        $sql="SELECT * FROM  Events ORDER BY added DESC LIMIT 10";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
          
    }
    
}

?>