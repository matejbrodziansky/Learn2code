<?php

namespace Penis;

class Enemy extends Being
{
    public function takeDamage($dmg)
    {
        $this->health = $this->health - $dmg;

        echo '*ouch';

        if ($this->health <= 0 ) {
            var_dump($this->name. ' dropped '. $this->invetory['gold'].' gold.');
            $this->perish();
        }else {
            var_dump( $this->name . ' has ' . $this->health . 'HP' );
        }
    }

    protected function perish()
    {
        var_dump( 'enemy' . $this->name. ' has died' );
    }
}