#include <stdio.h>

#include <stdlib.h>

	int main()

{

	int *x;
	int *y;
	
 	printf("x is %x\n",x);
	
       	y=malloc(sizeof(int));
        x=malloc(sizeof(int));

	*x=42;
	*y=13;



	y=x;
	*y=13;

	
        printf("%d\n",*x);

	//printf("x is %x\n",x);

	printf("y is %x\n",y);       		
}
