<?php
/**Month construct
 * @param int $month le mois compris entre 1 et 12
 * @param int $year l'année 
 */
class calendrier {
    private $months;
    private $year;
    private $numberofDays;
    private $daysWeek;
    private $dateInfo;
    private $weekDay;

    public function __construct($months , $year , $daysWeek = [
        'Lundi' , 
        'Mardi' , 
        'Mercredi' , 
        'Jeudi' , 
        'Vendredi' ,
        'Samedi' , 
        'Dimanche'
        ] ) {

            $this->months = $months;
            $this->year = $year;
            $this->numberofDays = cal_days_in_month(CAL_GREGORIAN , $this->months , $this->year);
            $this->daysWeek = $daysWeek;
            $this->dateInfo = getdate(strtotime('le premier jour' , mktime(0, 0, 0, $this->month , 1 , $this->year)));
            $this->weekDay = $this->dateInfo['wday'];
        }


}

    echo '<table>';
    echo '<tr>
                <th>Lundi</th>
                <th>Mardi</th>
                <th>Mercredi</th>
                <th>Jeudi</th>
                <th>Vendredi</th>
                <th>Samedi</th>
                <th>Dimanche</th>
                </tr>
                </table>';


?>