<?php

class UnitScript
{
    /**
     * @param Unit $newUnit
     * @param Unit $occupyingUnit
     * @return Unit
     */
    public static function joinExisting( Unit $newUnit, Unit $occupyingUnit )
    {
        $comp = null;
        if (!is_null($comp = $occupyingUnit->getComposite())) {
            $comp->addUnit( $newUnit );
        } else {
            $comp = new Army();
            $comp->addUnit( $occupyingUnit )
                 ->addUnit( $newUnit );
        }
        return $comp;
    }
}