<?php

class ZangeressenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllZangeressen()
    {
        $sql = 'SELECT  ZGRS.Naam
                       ,ZGRS.Nettowaarde
                       ,ZGRS.Land
                       ,ZGRS.Mobiel
                       ,ZGRS.Leeftijd

                FROM   Zangeres as ZGRS
                
                ORDER BY ZGRS.Nettowaarde';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

}