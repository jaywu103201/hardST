### for 敘述的語法
```
for (起始值; 條件式; 更新值) 指令一;

或

for (起始值; 條件式; 更新值) {

  指令一;

  指令二;

  指令三;

}
```
```
起始值 是進入迴圈一開始會執行的動作
更新值 則是執行完每次的迴圈要執行的動作
```

### EX
```
for(i=1; i<=10; i++) printf("%d\n", i);
```
```
1.設定變數 i=1;

2.檢查 i<=10 是否成立，不成立則跳出迴圈 ( 即跳至 6. )

3.執行 printf("%d\n", i);

4.執行 i++; ( 即 i=i+1; )

5.跳至 2. 的位置

6.迴圈結束
```
### for 迴圈
```
以使用 break 和 continue 指令


不需要起始值或更新值，則該欄位可以空白
起始值或更新值有兩個以上，可以用逗點 , 隔開
```

### 典型 for 迴圈的例子
```
#include <stdio.h>

void main()

{

 int s=0, i;

 for(i=1; i<=100; i++) s+=i;

 printf("1+2+...+100=%d\n", s);

}
```
先看i是否 大於等於100 如果不是就i++(i=i+1)，之後執行後面s+=i(s=s+i)
重複到1==100 ，所以結果為 1+2+3....+100的整數。
````

### 多重迴圈 九九乘法表
```
#include <stdio.h>

void main()

{

 int i, j;

 for(i=1; i<=9; i++) {

   for(j=2; j<=9; j++)

     printf("%d*%d=%2d ", j, i, i*j);

   printf("\n");

 }

}
```


```
#include <stdio.h>
 
int main()
{
    int number, i;
 
    printf("输入一个整数: ");
    scanf("%d",&number);
 
    printf("%d 的因数有: ", number);
    for(i=1; i <= number; ++i)
    {
        if (number%i == 0)
        {
            printf("%d ",i);
        }
    }
 
    return 0;
}
```
