## Keyboad input
## getch(), getche()
```
按下去鍵盤按鍵時，不需要按 Enter 就會直接讀進去，而且螢幕不會顯示

無緩衝輸入
```
```
ASCII是和僅定義在0到127之間。上面的所有內容都是無效的，或者需要使用除ASCII之外的已定義編碼（例如ISO-8859-1）
```
```
#include<iostream>
#include<conio.h>
using namespace std;

int main(){
	
	char key1,key2;
	while(key1!='q'){
	
		key1=getch();
	  	switch(key1)
	  	{
	   		case 0:
	   			key2=getch();
	   			cout<<"extended Key:"<<"\t"<<int(key1)<<" "<<int(key2)<<endl; 
	   			break;
			case -32:
			    key2=getch();
			    switch(key2)
			    {
					case 72: 
					   cout<<"Special Key:UP"<<"\t"<<int(key1)<<" "<<int(key2)<<endl; 
				       break;
				    case 80:  
					   cout<<"Special Key:DOWN"<<"\t"<<int(key1)<<" "<<int(key2)<<endl; 
				       break;
				    case 75:  
					   cout<<"Special Key:Right"<<"\t"<<int(key1)<<" "<<int(key2)<<endl;  
				       break;
				    case 77: 
				    	cout<<"Special Key:Left"<<"\t"<<int(key1)<<" "<<int(key2)<<endl;  
				        break;
				    default:
					    cout<<"Other Special Key:"<<"\t"<<int(key1)<<" "<<int(key2)<<endl;    
			     } 
				 break;
			default:
			    cout<<"Key:"<<key1<<"\t"<<int(key1)<<endl; 
	   }
   }
	return 0;
}
```

```
Key:2   50
Key:1   49
Key:2   50
Key:1   49
Key:3   51
Key:2   50
Key:1   49
Key:2   50
Key:1   49
Key:3   51
Key:2   50
Key:1   49
Key:5   53
Key:4   52
Key:5   53
Key:6   54
Key:4   52
Key:6   54
Key:5   53
Key:4   52
Key:6   54
Key:8   56
Key:7   55
Key:9   57
Key:8   56
Key:8   56
Key:9   57
Key:h   104
Key:j   106
Key:s   115
Key:a   97
Key:h   104
Key:a   97
Key:s   115
Key:d   100
Key:a   97
Key:s   115
Key:d   100
Key:a   97
Key:s   115
Key:i   105
Key:h   104
Key:a   97
Key:s   115
Key:o   111
Key:i   105
Key:d   100
Key:h   104
Key:a   97
Key:s   115
Key:o   111
Key:d   100
Key:u   117
Key:a   97
Key:i   105
Key:s   115
Key:o   111
Key:d   100
Key:j   106
Key:a   97
Key:o   111
Key:k   107
Key:s   115
Key:d   100
Key:j   106
Key:a   97
Key:s   115
Key:o   111
Key:d   100
Key:i   105
Key:j   106
Key:a   97
Key:s   115
Key:d   100
Key:o   111
Key:i   105




```
