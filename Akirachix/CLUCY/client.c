 #include <sys/types.h>
 #include <sys/socket.h>
 #include <netdb.h>
       #include <stdio.h>
       #include <stdlib.h>
       #include <unistd.h>
       #include <string.h>

       #define BUF_SIZE 500
       int sfd, s, j;
       size_t len;
       void start_chat();


       int
       main(int argc, char *argv[])
       {
           struct addrinfo hints;
           struct addrinfo *result, *rp;
           ssize_t nread;
           char buf[BUF_SIZE];

           if (argc < 3) {
               fprintf(stderr, "Usage: %s host port msg...\n", argv[0]);
               exit(EXIT_FAILURE);
           }

           /* Obtain address(es) matching host/port */

           memset(&hints, 0, sizeof(struct addrinfo));
           hints.ai_family = AF_UNSPEC;    /* Allow IPv4 or IPv6 */
           hints.ai_socktype = SOCK_DGRAM; /* Datagram socket */
           hints.ai_flags = 0;
           hints.ai_protocol = 0;          /* Any protocol */

           s = getaddrinfo(argv[1], argv[2], &hints, &result);
           if (s != 0) {
               fprintf(stderr, "getaddrinfo: %s\n", gai_strerror(s));
               exit(EXIT_FAILURE);
           }

           /* getaddrinfo() returns a list of address structures.
              Try each address until we successfully connect(2).
              If socket(2) (or connect(2)) fails, we (close the socket
              and) try the next address. */

           for (rp = result; rp != NULL; rp = rp->ai_next) {
               sfd = socket(rp->ai_family, rp->ai_socktype,
                            rp->ai_protocol);
               if (sfd == -1)
                   continue;

               if (connect(sfd, rp->ai_addr, rp->ai_addrlen) != -1)
                   break;                  /* Success */

               close(sfd);
           }

           if (rp == NULL) {               /* No address succeeded */
               fprintf(stderr, "Could not connect\n");
               exit(EXIT_FAILURE);
           }

           freeaddrinfo(result);           /* No longer needed */

        /* send nickname */
	char *nickname = "olive";
	write (sfd, nickname, strlen(nickname));   

	char go_ahead[255];
	read (sfd, go_ahead, sizeof(go_ahead));
	if (strcmp(go_ahead, "GOAHEAD") == 0)
		/* then Start interactive chat */
		start_chat();
	else
		printf ("Server returned: %s\n", go_ahead);



	return 0;
}

void start_chat(){
           for (;;) {
		char mychatstr[255];
		int len;
		
		printf ("you> ");
		fgets(mychatstr, 255, stdin);
		if (strcmp("&&&", mychatstr) == 0)
			break;
		write(sfd, mychatstr, strlen(mychatstr));
		read(sfd, mychatstr, sizeof(mychatstr));
		printf ("lucy> %s\n", mychatstr);
	   }
}
