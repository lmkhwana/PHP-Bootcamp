#!/usr/bin/php
<?PHP

	function	ft_split($string)
	{
		$result = explode(' ', $string);
		$return = sort($result);

		return ($result);
	}

?>
