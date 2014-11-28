#include <stdio.h>       
#include <stdlib.h>       
#include <sys/socket.h>        //for sockets
#include <sys/types.h>       
#include <string.h>        //for string operations
#include <netinet/in.h>        //Internet Protocol family sockaddr_in defined here
#include <pthread.h>        // for the cosy POSIX threads
#include <arpa/inet.h>        // for inet_ntoa() function
#include <unistd.h>        //NULL constant defined here
#include <signal.h>        //for ctrl+c signal

#define BACKLOG 30       // connections in the queue
#define MAXDATALEN 256         //max size of messages to be sent
#define PORT 15015        //default port number

/*Note:   The port argument is optional. If no port is specified,
 *          the server uses the default given by PORT.*/

