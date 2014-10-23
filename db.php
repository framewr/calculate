<?php
class Database
    {
		private $db_host = ‘localhost’;
		private $db_user = ‘root’;
		private $db_pass = ‘’;
		private $db_name = ‘new’;
				
		/*
		 Соединяемся с бд, только одно соединение
		*/
		
        public function connect() 
		{
			if(!$this->con)
			{
				$myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_pass);
				if($myconn)
				{
					$seldb = @mysql_select_db($this->db_name,$myconn);
					if($seldb)
					{
						$this->con = true;
						echo "Подключение успешно";
					} else
					{
						return false;
					}
				} else      
				{
					return false;
				}
			} else
			{
				return true;
			}
		}
		
		/*
	    Закрываем соединение с бд
		*/
		
        public function disconnect()
		{
			if($this->con)
			{
				if(@mysql_close())
				{
							   $this->con = false;
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		
		private $result = array();

		/*
		Проверяем наличие таблицы при выполнении запроса
		*/

		private function tableExists($table)
		{
			$tablesInDb = @mysql_query('SHOW TABLES FROM '.$this->db_name.' LIKE "'.$table.'"');
			if($tablesInDb)
			{
				if(mysql_num_rows($tablesInDb)==1)
				{
					echo 'Компанию успешно добавлено!';
				}
				else
				{
					return false;
				}
			}
		}
		
		/*
		Выборка информации с бд
		*/
		
        public function select($table, $rows = '*', $where = null, $order = null)
		{
			$q = 'SELECT '.$rows.' FROM '.$table;
			if($where != null)
				$q .= ' WHERE '.$where;
			if($order != null)
				$q .= ' ORDER BY '.$order;
			if($this->tableExists($table))
		   {
			$query = @mysql_query($q);
				if($query)
				{
					$this->numResults = mysql_num_rows($query);
					for($i = 0; $i < $this->numResults; $i++)
					{
						$r = mysql_fetch_array($query);
						$key = array_keys($r);
						for($x = 0; $x < count($key); $x++)
						{
							if(!is_int($key[$x]))
							{
								if(mysql_num_rows($query) > 1)
									$this->result[$i][$key[$x]] = $r[$key[$x]];
								else if(mysql_num_rows($query) < 1)
									$this->result = null;
								else
									$this->result[$key[$x]] = $r[$key[$x]];
							}
						}
					}
					return true; 
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
		
		/*
		Добавление информации в бд
		*/
		
        public function insert($table,$values,$rows = null)
		{
			if($this->tableExists($table))
			{
				$insert = 'INSERT INTO '.$table;
				if($rows != null)
				{
					$insert .= ' ('.$rows.')';
				}
				for($i = 0; $i < count($values); $i++)
				{
					if(is_string($values[$i]))
						$values[$i] = '"'.$values[$i].'"';
				}
				$values = implode(',',$values);
				$insert .= ' VALUES ('.$values.')';
				$ins = @mysql_query($insert);
				if($ins)
				{
					echo 'Компанию успешно добавлено!';
				}
				else
				{
					echo 'Неудалось добавить компанию!';
				}  
			}   
		}
         
    }
?>	
