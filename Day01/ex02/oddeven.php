#!/usr/bin/php
<?PHP
	while (true)
	{
		echo("Enter a number: ");
		$num = fgets(STDIN);
        echo "$num\n";

		$result = trim($num);
		if (is_numeric($result))
		{
			if ($result % 2 == 0)
				echo("The number $result is even\n");
			else
				echo("The number $result is odd\n");
		}
		else
		{
			if (feof(STDIN))
			{
				echo ("\n");
				break;
			}
			else
				echo("'$result' is not a number\n");
		}
	}

?>
