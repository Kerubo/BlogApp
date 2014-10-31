#include <stdio.h>
#define BUFSIZE 512

int main(int argc, char *argv[])
{
	int nread,fsize;
	FILE *fp1,*fp2;
	char buf[BUFSIZE];

fp1=fopen(argv[1],"r");
nread=fread(buf,1,BUFSIZE,fp1);

fp2=fopen(argv[2],"w");
fwrite(buf,1,nread,fp2);

fsize=0;
while(nread=fread(buf,1,BUFSIZE,fp1))
{
fwrite(buf,1,nread,fp2);
fsize=fsize + nread;
}
printf("Byte copied: %d\n",fsize);

fclose(fp1);
fclose(fp2);

return 0;
}
