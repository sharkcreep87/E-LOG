<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mreg extends CI_Model
{
function insertdb($data)
{
$this->db->insert('user', $data);

}
}