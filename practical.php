<?php
printf("My name is %s, i'm %d years old, which is %X in hexadecimal\n", 'simon', 32, 33);

// pad to 15 spaces
printf("The result is $%15f\n", 123.42 / 12);

// pad to 15 spaces fill with zeros
printf("The result is $%015f\n", 123.42 / 12);

// pad to 15 spaces 2 decimal places precision
printf("The result is $%15.2ff\n", 123.42 / 12);
 
printf("The result is $%015.2f\n", 123.42 / 12);

printf("The result is $%'#15.2f\n", 123.42 / 12);