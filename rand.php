<?php
class Rand
    {
		/*
	    Получаем случайное значение цены
		*/
		public function randPrice() 
		{
			return rand(50, 500);
		}  

		/*
	    Получаем случайное значение времени
		*/
		public function randTime() 
		{
			return rand(1, 5);
		}  
 		
    } 
?>	
