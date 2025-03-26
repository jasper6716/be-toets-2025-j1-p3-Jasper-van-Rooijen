<?php

class VulkanenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllVulkanen()
    {
        $sql = 'SELECT  VKAN.Naam
                       ,VKAN.Hoogte
                       ,VKAN.Land
                       ,VKAN.JaarLaatsteUitbarsting
                       ,VKAN.AantalSlachtoffers

                FROM   Vulkaan as VKAN
                
                ORDER BY VKAN.AantalSlachtoffers DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

}