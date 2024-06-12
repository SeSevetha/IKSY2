<?php
class Klemmbausteine
{            
    public static function holeThemen($link)
    {
      $query="Select ThemaNr, Bezeichnung
                from theme";
      return DbFunctions::getHash($link, $query);
    }
      
 
    public static function holeThemenNrUndAnzahl($link, $themaNr, $altersgruppe, $teileMin, $teileMax)
    {
        $query="Select Name, AnzahlTeile
                    from bricksets
                    where Altersgruppe='$altersgruppe' AND ThemaNr='$themaNr' AND AnzahlTeile>='$teileMin' AND AnzahlTeile<='$teileMax'";
        return DbFunctions::getHash($link, $query);
    }
}
?>