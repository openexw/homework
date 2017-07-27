# 流程控制作业

1. 输入三个整数x,y,z，请把这三个数由小到大输出数m和n，求其最大公约
2. 判断101-200之间有多少个素数，并输出所有素数。
3. 输入两个正整数和最小公倍数。（利用辗除法）
4. 有一分数序列：2/1，3/2，5/3，8/5，13/8，21/13...求出这个数列的前20项之和。
5. 给一个不多于5位的正整数，要求：一、求它是几位数，二、逆序打印出各位数字。
6. 请输入星期几的第一个字母来判断一下是星期几，如果第一个字母一样，则继续判断第二个字母。
7. 将一个数组逆序输出。

1. 

```c
main()
{
int x,y,z,t;
scanf("%d%d%d",&x,&y,&z);
if (x>y)
{t=x;x=y;y=t;}
if(x>z)
{t=z;z=x;x=t;}
if(y>z)
{t=y;y=z;z=t;}
printf("small to big: %d %d %d\n",x,y,z);
}
```

2. 

```c
#include "math.h"
main()
{
　 int m,i,k,h=0,leap=1;
　 printf("\n");
　 for(m=101;m<=200;m++)
　　 { k=sqrt(m+1);
　　　 for(i=2;i<=k;i++)
　　　　　 if(m%i==0)
　　　　　　 {leap=0;break;}
　　　 if(leap) {printf("%-4d",m);h++;
　　　　　　　　 if(h==0)
　　　　　　　　 printf("\n");
　　　　　　　 }
　　　 leap=1;
　　 }
　 printf("\nThe total is %d",h);
}
```

3. 

```c
main()
{
　 int a,b,num1,num2,temp;
　 printf("please input two numbers:\n");
　 scanf("%d,%d",&num1,&num2);
　 if(num1
　{ temp=num1;
　　 num1=num2;　
　　 num2=temp;
　 }
a=num1;b=num2;
while(b!=0)
　 {
　　 temp=a%b;
　　 a=b;
　　 b=temp;
　 }
printf("gongyueshu:%d\n",a);
printf("gongbeishu:%d\n",num1*num2/a);
}
```

4. 

```c
main()
{
int n,t,number=20;
float a=2,b=1,s=0;
for(n=1;n<=number;n++)
　 {
　 s=s+a/b;
　 t=a;a=a+b;b=t;
　 }
printf("sum is %9.6f\n",s);
}
```

5. 

```c
main( )
{
long a,b,c,d,e,x;
scanf("%ld",&x);
a=x/10000;
b=x000/1000;
c=x00/100;
d=x0/10;
e=x;
if (a!=0) printf("there are 5, %ld %ld %ld %ld %ld\n",e,d,c,b,a);
else if (b!=0) printf("there are 4, %ld %ld %ld %ld\n",e,d,c,b);
　　 else if (c!=0) printf(" there are 3,%ld %ld %ld\n",e,d,c);
　　　　 else if (d!=0) printf("there are 2, %ld %ld\n",e,d);
　　　　　　 else if (e!=0) printf(" there are 1,%ld\n",e);
}
```

6. 

```c
#include
void main()
{
char letter;
printf("please input the first letter of someday\n");
while ((letter=getch())!='Y')
{ switch (letter)
{case 'S':printf("please input second letter\n");
　　　　　 if((letter=getch())=='a')
　　　　　　 printf("saturday\n");
　　　　　 else if ((letter=getch())=='u')
　　　　　　　　　 printf("sunday\n");
　　　　　　　 else printf("data error\n");
　　　　　 break;
case 'F':printf("friday\n");break;
case 'M':printf("monday\n");break;
case 'T':printf("please input second letter\n");
　　　　　 if((letter=getch())=='u')
　　　　　　 printf("tuesday\n");
　　　　　 else if ((letter=getch())=='h')
　　　　　　　　　 printf("thursday\n");
　　　　　　　 else printf("data error\n");
　　　　　 break;
case 'W':printf("wednesday\n");break;
default: printf("data error\n");
　　 }
　 }
}
```


7. 

```c
#define N 5
main()
{ int a[N]={9,6,5,4,1},i,temp;
　 printf("\n original array:\n");
　 for(i=0;i
　 printf("M",a[i]);
　 for(i=0;i
　 {temp=a[i];
　　 a[i]=a[N-i-1];
　　 a[N-i-1]=temp;
　 }
printf("\n sorted array:\n");
for(i=0;i
　 printf("M",a[i]);
}
```