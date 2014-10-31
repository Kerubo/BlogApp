#include <stdio.h>
struct Profile{
    char name[100];
    int dob_date;
    int dob_month;
    int dob_year;
    int address;
    char add[50];
    int age;
    int this_year;
    int current_age;
     
}current_age;
int main(){
   struct Profile prof;
   printf("Please enter the current year: ");
   scanf("%d",&prof.this_year);
   
   printf("Enter name: ");
   scanf("%s",prof.name);
   
   printf("Please enter the date you were born: ");
   scanf("%d",&prof.dob_date);
   
   printf("Please enter your month of birth: ");
   scanf("%d",&prof.dob_month);
   
   printf("Please enter the year you were born\n");
   scanf("%d", &prof.dob_year);
   
   printf("please enter your address\n");
   scanf("%d", &prof.address);
   printf("please enter the name of your Location\n");
   scanf("%s",&prof.add);
   
   //printf("Please enter your age\n");
   //scanf("%d", &prof.age);
   
   
   current_age.age= current_age.this_year - current_age.dob_year;
   
   printf("Name: %s\n",prof.name);
   printf("Date of birth: %d/%d/%d\n",prof.dob_date,prof.dob_month,prof.dob_year);
   printf("Address: %d %s\n",prof.address, prof.add);
   printf("You are %d years old",prof.current_age);
   //printf("Age: %d\n",prof.age);

   getch(void);
   return 0;
}

Displaying ProfileStructure.c.
