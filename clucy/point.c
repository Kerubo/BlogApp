#include <stdio.h>

#include <stdlib.h>

        int main()

{

        int *x;
        int *y;

        

        y=malloc(sizeof(int));
        x=malloc(sizeof(int));
	 printf("x is %x\ny is %X\n",x,y);


        *x=13;
        *y=25;



        y=x;
        


      

        

        printf("x is position %d\ny points to %d\n",*x,*y);
}

