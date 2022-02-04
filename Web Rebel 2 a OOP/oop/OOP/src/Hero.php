<?php

namespace Penis;

class Hero extends Being
{
    public function takeDamage($dmg)
    {
        $this->health = $this->health - $dmg;

        var_dump( -1*$dmg );

        if ($this->health <= 0 ) {
            var_dump($this->name. ' dropped '. $this->invetory['gold'].' gold.');
            $this->perish();
        }else {
            var_dump( $this->name . ' has ' . $this->health . 'HP' );
        }
    }
    
    protected function perish()  //protected može byť dedena
    {
        static::$deathCount += 1; // pri static nepoužívame this su to hodnoty triedy a su tam štvorbodky
        var_dump( $this->name . ' died ');
    }
}