#include <stdio.h>
#include <stdlib.h>

struct student{
        int index;
        int *n;
};

int main(){

	struct struct *pst,*pstn;
		
		int i;
		for(i=0;<10;i++>){

		pstn = malloc(sizeof(struct student));
		pstn->index = i;
		pstn->n=pst;
		pst=pstn;

          }
		while(pst !=NULL){

		printf("%d\n",pst->index);
		pst=pst->n;
          }

}
