## printf變數參數 
```
http://www2.lssh.tp.edu.tw/~hlf/class-1/lang-c/printf.htm
```
##  scanf變數參數
```
http://www2.lssh.tp.edu.tw/~hlf/class-1/lang-c/scanf.htm
```


```
要顯示的是什麼資料型態 應資料型態的格式指定字

```
```
#include <stdio.h>

int main(void) {
    printf("顯示字元 %c\n", 'A');
    printf("顯示字元編碼 %d\n", 'A');
    printf("顯示字元編碼 %c\n", 65);    
    printf("顯示十進位整數 %d\n", 15);
    printf("顯示八進位整數 %o\n", 15);
    printf("顯示十六進位整數 %X\n", 15);
    printf("顯示十六進位整數 %x\n", 15);    
    printf("顯示科學記號 %E\n", 0.001234);    
    printf("顯示科學記號 %e\n", 0.001234);    
   
    return 0;
}

```
```
顯示字元 A
顯示字元編碼 65
顯示字元編碼 A
顯示十進位整數 15
顯示八進位整數 17
顯示十六進位整數 F
顯示十六進位整數 f
顯示科學記號 1.234000E-003
顯示科學記號 1.234000e-003
```
### 輸出浮點數時指定精度
```
printf("example:%.2f\n", 19.234);

2指定小數點後取兩位
```
### 事先無法決定字元寬度，則可以使用*
```
#include <stdio.h>
#include <stdlib.h>

int main(void) {
    printf("%*d\n", 1, 1);
    printf("%*d\n", 2, 1);
    printf("%*d\n", 3, 1);
    return 0;
}
```

```
第一個printf()將預留一個字元寬度，第二個預留兩個字元寬度，第三個預留三個

```

```
#include <stdio.h>

int main(void) {
    int input;
    
    printf("請輸入數字：");
    scanf("%d", &input);
    printf("您輸入的數字：%d\n", input);
    
    return 0;
}
```
### scanf()在接受輸入時，可以接受多個值，也可以指定輸入的格式
```

#include <stdio.h>

int main(void) {
    int number1, number2;
    
    printf("請輸入兩個數字，中間使用空白區隔）：");
    scanf("%d %d", &number1, &number2);
    printf("您輸入的數字：%d %d\n", number1, number2);
    
    printf("請再輸入兩個數字，中間使用-號區隔）：");
    scanf("%d-%d", &number1, &number2);
    printf("您輸入的數字：%d-%d\n", number1, number2);
    
    return 0;
```
### scanf() 注意!!!
## scanf 遇到空白、\t、\n 就會自動中斷
```
scanf("%s",str);  // 輸入「hello world」
printf("%s",str);  // 輸出「hello」
```
## scanf 可以自定欲接收的字元，改一下就可以接收空白
```
scanf("%[^\n]",str);  // 接收除了 \n 以外的所有字元
printf("%s",str);  // 輸出完整的「hello world」
```
