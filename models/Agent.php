<?php

/**
 * Created by PhpStorm.
 * User: sic-12
 * Date: 11.04.2017
 * Time: 22:31
 */
class Agent
{

    public static function getAllAgents()
    {
        $db = Db::getConnection();

        $agentsList = array();

        $query = "SELECT * FROM schm.agents";
        $result = $db->query($query);

        $i = 0;
        while ($row = $result->fetch()) {
            $agentsList[$i]['a_id'] = $row['a_id'];
            $agentsList[$i]['full_name'] = $row['full_name'];
            $agentsList[$i]['phone'] = $row['phone'];
            $agentsList[$i]['employment_date'] = $row['employment_date'];
            $agentsList[$i]['birth_date'] = $row['birth_date'];
            $i++;
        }

        return $agentsList;
    }

}