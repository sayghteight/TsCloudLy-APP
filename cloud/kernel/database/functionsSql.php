<?php 
	/*
		Cloud Plataform Division Zero
		Copyright (C) 2017 by Sayghteight

		This program is free software: you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 3 of the License, or
		any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program.  If not, see <http://www.gnu.org/licenses/>.
		
	*/
	
	/*
		Crear conexión base de datos
	*/
	function getSQLcms()
	{
		$mysqli_cms = new mysqli($hostname, $username, $password, $database);
		if ($mysqli->connect_errno) {
    	exit();
		}
		$result = $mysqli_cms->query("SELECT * FROM config LIMIT 1");
		$row = $result->fetch_assoc();
	};
	
	/*
	*	Theme System
	*/
	
	function getThemePlataform()
	{
		$theme_id = $row["theme"];
		$theme_result = $mysqli_cms->query("SELECT * FROM themes where id=$theme_id");
		$theme_row = $theme_result->fetch_assoc();
		$theme_name = $theme_row["name"];
	};
	