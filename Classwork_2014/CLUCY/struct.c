#include <stdio.h>
#include <stdlib.h>

struct student{
	int index;
	int *n;
};

int main(){

	struct student *pst=NULL;
	struct student *pstn=NULL;

	pst->index=1;
	pstn = malloc(sizeof(struct student));

	pstn->index=2;

	pst->n=pstn;

	pst = malloc(sizeof(struct student));
	pst->index=3;
	pst->n=pstn;
}
