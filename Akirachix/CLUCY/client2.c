#include <sys/types.h>
#include <sys/socket.h>
#include <netdb.h>

#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <string.h>

void error(char *errmsg);

int portno;


// arg[1] = port number 
int main(int argc, char* argv[])
{
	// check for arg validity
	if (argc != 2) {
		error("port number was not provided, server <port>");
	}

	// declare assets
	struct sockaddr_in serv_addr, cli_addr;
	int sockfd, newfd;
	int nbytes;
	int cli_len = sizeof(cli_addr);
	char buff[1024];
	int assignID = 0;

	// create a socket 
	sockfd = socket(AF_INET, SOCK_DGRAM, 0);
	if (sockfd<0) error("Error on Socket (server side)");
	

	bzero((char *) &serv_addr, sizeof(serv_addr));
    	portno = atoi(argv[1]);
    	serv_addr.sin_family = AF_INET;
    	serv_addr.sin_addr.s_addr = INADDR_ANY;
    	serv_addr.sin_port = htons(portno);
	
	printf("server is now running\n");

	// bind socket
	if (bind(sockfd, (struct sockaddr*) &serv_addr, sizeof(serv_addr)) < 0) {
		error("Error on Bind (server side)");
	}

	// loop here so server could always listen to new incoming connection requests !!

	newfd = sockfd;

	while(1) { 
		// read nickname from client
		char nickname[255];
		nbytes = read (newfd, nickname, sizeof(nickname));
		if (nbytes < 0){
			printf("Error reading nickname\n");
			exit(0);
		}
		printf("Nickname: %s\n", nickname);
		sleep(1);
		// sends the newly connected client a GOAHEAD
		char *go_ahead = "GOAHEAD";
		nbytes = write(newfd, go_ahead, strlen(go_ahead));
		if (nbytes < 0) {
			error("Error on sending GOAHEAD\n");
		}

		//start chatting by waiting for server to send something
		for (;;)
		{
			read(newfd, buff, sizeof(buff));
			printf("%s> %s\n", nickname, buff);
			printf ("you> ");
			scanf("%s",  buff);
			if (strcmp(buff, "&&&") == 0)
				break;

			write (newfd, buff, strlen(buff));
		}
	}

	return 0;
}


void error(char *errormsg)
{
	fprintf(stderr, "%s\n", errormsg);
	exit(0);
}
