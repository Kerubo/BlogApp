#include <stdio.h>

struct 	PERSON
{
	int id;
	char ipaddr[16];
	char nickname[20];
	char firstname[20];
};

main()
{
	struct PERSON p;
	FILE *fp;

	printf("Enter first name:");
	scanf("%s",p.firstname);

	printf("nickname:");
	scanf("%s",p.nickname);

	printf("ID:");
	scanf("%d",&p.id);

	printf("Ipaddress:");
	scanf("%s",p.ipaddr);

	fp=fopen("directory.dat","w");

	fwrite((char *)&p,sizeof(p),1,fp);

	fclose(fp);

	return 0;

}
