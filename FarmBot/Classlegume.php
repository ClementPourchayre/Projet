<?php
class legume
{
    //attributs
    private $m_nom;
    private $m_race;
    private $m_humidite;
    private $m_taille;
    private $m_espace;
    //FONCTIONS
    //fonctions GET
    public function get_nom()
        {
            return $this->m_nom;
        }
    public function get_race()
        {
            return $this->m_race;
        }
    public function get_humidite()
        {
            return $this->m_humidite;
        }
    public function  get_taille()
        {
            return $this->m_taille;
        }
    public function  get_espace()
        {
            return $this->m_espace;
        }
    //fonctions SET
    public function set_nom($nom)
        {
            $this->m_nom = $nom;
        }
    public function set_race($race)
        {
            $this->m_race = $race;
        }
    public function set_humidite($humidite)
        {
            $this->m_humidite = $humidite;
        }
    public function set_taille($taille)
        {
            $this->m_taille = $taille;
        }
    public function set_espace($espace)
        {
            $this->m_espace = $espace;
        }
}
?>