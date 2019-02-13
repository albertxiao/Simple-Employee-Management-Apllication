<?php

class Model 
{
	private $db;
	function __construct($conn)
	{
		$this->db = $conn;
	}

  public function query($query)
  {
    try {
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      return $stmt;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }

  }

	public function get_order_asc($table, $order)
  	{
    	try {
      		$stmt = $this->db->prepare("SELECT * FROM $table ORDER BY $order ASC");
      		$stmt->execute();
      		return $stmt;
    	} catch (PDOException $e) {
      		echo $e->getMessage();
    	}
  	}

  	public function show($table, $where, $id)
  	{
    	try {
	      	$stmt = $this->db->prepare("SELECT * FROM $table WHERE $where = $id");
	      	$stmt->execute();
	      	return $stmt;
    	} catch (PDOException $e) {
      		echo $e->getMessage();
    	}
  	}

  	public function insert($table, $data=array())
  	{
      	try {
        	if (!is_array($data) || !count($data)) return false;
    		$bind = ':'.implode(',:', array_keys($data));
    		$sql  = 'INSERT INTO '.$table.'('.implode(',', array_keys($data)).') '.
            'VALUES('.$bind.')';
    		$stmt = $this->db->prepare($sql);
    		$stmt->execute(array_combine(explode(',',$bind), array_values($data)));

    		if ($stmt->rowCount() > 0)
	        {
	           return true;
	        }
    		return false;
      	} catch (PDOException $e) {
        	echo $e->getMessage();
        	return false;
      	}
  	}

  	public function update($table, $arr=[], $where =[]){
     	$key = array_keys($arr);
     	$val = array_values($arr);
     
     	$key_id = array_keys($where);
     	$val_id = array_values($where);
     
     	$set = [];
     	for($i=0; $i<count($arr); $i++) {
      		$set[$i] = "$key[$i] = '".$val[$i]."'";
     	}
     	$set = implode(", ", $set);
     	$stmt = $this->db->prepare("UPDATE $table SET ".$set." WHERE $key_id[0] = $val_id[0] ");
     	$stmt->execute();
  	}

  	public function delete($table, $where, $id)
  	{
      	try {
	        $stmt = $this->db->prepare("DELETE FROM $table WHERE $id = $where");
	        $stmt->execute();
	        return $stmt;
      	} catch (PDOException $e) {
        	echo $e->getMessage();
      	}
  	}
}

// Set Object Model

$model = new Model($conn);