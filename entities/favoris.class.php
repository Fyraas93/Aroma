<?php

class favoris
{
    private $user;

    public function __construct()
    {
        if(!isset($_SESSION))
        {
            //session_start();
        }
        if(!isset($_SESSION['favoris']))
        {
            $_SESSION['favoris']=array();
        }
        if(isset($_GET['delfavoris']))
        {
            $this->del($_GET['delfavoris']);
        } 
        
    }

    public function add($product_id)
    {
        if(isset($_SESSION['favoris'][$product_id]))
        {
            $_SESSION['favoris'][$product_id]++;
           
        }
        else
        {
            $_SESSION['favoris'][$product_id]=1;
            
        }
    }

    public function del($product_id)
    {
        unset($_SESSION['favoris'][$product_id]);
       
    }

    
    public function count()
    {
        return array_sum($_SESSION['favoris']);
        
    }

    
  /*  public function total()
    {
        $total = 0;
        $ids=array_keys($_SESSION['favoris']);
        if(empty($ids))
        {
            $pro=array();
        }
        else
        {
           $sql = "SELECT ID Prix FROM produit WHERE id IN ('".implode("','", $ids)."')";
           $db = config::getConnexion();
           $pro = $db->query($sql);
        
          
        }
        foreach($pro as $produit)
        {
         
            $total += $produit['Prix'] * $_SESSION['favoris'][$produit['ID']];
        }
        return $total;
    }
    */
}

?>

