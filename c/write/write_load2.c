#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <string.h>
#include <errno.h>
#include <unistd.h>
#include <malloc.h>

#define __USE_GNU
#include <fcntl.h>

int main(int argc, const char **argv){
    if(argc != 3){
        usage();
        return(-1);
    }

    int fd, ret, i, size = atoi(argv[1]), loop = atoi(argv[2]);
    char file[] = "./tmp/file.";
    char f[256];
    void *buffer;
    char body[size];
    for(i=0;i<size;i++){
        body[i] = 'a';
    }

    buffer = valloc(size);
    //posix_memalign(&buffer, BLOCKSIZE, BLOCKSIZE);
    memcpy(buffer, body, sizeof(body));

    for(i=0;i<loop;i++){
        sprintf(f, "%s%d", file, i);
        //printf("%s\n", f);
        //printf("%s%d\n", file, i);

        fd = open(f, O_CREAT | O_RDWR | O_DIRECT, 0666 );
        if(!fd){
            return -1;
        }
        ret = write(fd, buffer, size );
        if(ret <= 0){
            printf("write error[%d][%s]\n",ret, strerror(errno));
            close(fd);
            return -1;
        }
        close(fd);
    }
    return 0;
}

int usage(){
    printf("error:\n");
    printf("  ./write_load2 FILE_SIZE LOOP\n");
}
