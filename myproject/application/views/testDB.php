<?php
/**
 * Created by PhpStorm.
 * User: miaor
 * Date: 2018/5/25
 * Time: 21:34
 */
$this->load->database();
$query = $this->db->query("SELECT * FROM Users;");