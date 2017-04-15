<?php

/**
 * Created by PhpStorm.
 * User: sic-12
 * Date: 11.04.2017
 * Time: 23:10
 */
class RealEstate
{
    const SHOW_BY_DEFAULT = 6;

    public static function getListEstates($page = 1)
    {
        $page = intval($page);
        $offset = self::SHOW_BY_DEFAULT * ($page - 1);

        $db = Db::getConnection();
        $estateList = array();

        $query = "SELECT * FROM schm.real_estate ORDER BY re_id DESC LIMIT ". self::SHOW_BY_DEFAULT.
                " OFFSET ".$offset;
        $result = $db->query($query);

        $i = 0;
        while ($row = $result->fetch()) {
            $estateList[$i]['re_id'] = $row['re_id'];
            $estateList[$i]['re_type'] = $row['re_type'];
            $estateList[$i]['service'] = $row['service'];
            $estateList[$i]['service_state'] = $row['service_state'];
            $estateList[$i]['district'] = $row['district'];
            $address = trim($row['address'], '()');
            $address = explode(',', $address);
            $address = 'г. '.trim($address[0], '\"').' ул. '.trim($address[1], '\"').', '.$address[2];
            $estateList[$i]['address'] = $address;
            $estateList[$i]['state'] = $row['state'];
            $estateList[$i]['area'] = $row['area'];
            $estateList[$i]['providers'] = $row['providers'];
            $rowPrice = preg_replace("~[ ?]~", '', $row['price']);
            $patternPrice = substr($rowPrice, -3);
            $estateList[$i]['price'] = preg_replace("~{$patternPrice}~", '', $rowPrice);
            $estateList[$i]['owner'] = $row['owner'];
            $estateList[$i]['agent'] = $row['agent'];
            $i++;
        }

        return $estateList;
    }

    public static function getTotalRealEstates()
    {
        $db = Db::getConnection();

        $result = $db->query("SELECT COUNT(*) AS count FROM schm.real_estate");
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row = $result->fetch();

        return $row['count'];
    }
}