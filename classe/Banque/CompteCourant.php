<?php
namespace App\Banque;

use App\Client\Compte as Compteclient;

/**
 * Compte bancaire (hérite de Compte)
 */
class CompteCourant extends Compte
{ 
    private $decouvert;
    
    /**
     * Constructeur du compte courant
     * @param Compteclient $compte Compte Client du titulaire
     * @param float $montant Montant du solde à l'ouverture
     * @param int $decouvert Découvert autorisé
     * @return void
     */

    public function __construct(CompteClient $compte, float $montant, int $decouvert)
    {
        // On transfère les informations nécessaires au constructeur de Compte
        parent::__construct($compte, $montant);

        $this->decouvert = $decouvert;
    }

    public function getDecouvert(): int
    {
        return $this->decouvert;
    }

    public function SetDecouvert(int $montant): self
    {
        if($montant >= 0){
            $this->decouvert = $montant;
        }

        return $this;
    }

    public function retirer( float $montant)
    {
        // On vérifie si le découvert permet le retrait 
        if($montant > 0 && $this->solde - $montant >= -$this->decouvert){
            $this->solde -= $montant;
        }else{
            echo 'Solde Insuffisant';
        }
    }







}