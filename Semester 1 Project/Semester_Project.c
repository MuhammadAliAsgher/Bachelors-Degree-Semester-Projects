#include<stdio.h>
#include<conio.h>
#include<math.h>
void PrintSudoku(int *xptr){
	int i,j;
	for(i=1;i<=16;i++){
		printf("%d ",*xptr);
		if(i%4==2){
			printf("| ");
			
		}
		if(i%4==0){
			printf("\n");
		}
		if(i==8){
			printf("---------\n");

		}
		xptr++;
	}
	printf("---------------\n");
}
void TakeInput(int temp[4][4]){
	int r,c, count, flag2, temp2;
	int q,e;
	int *xptr;
	for (r=0;r<4;r++){
		if(count==4){
			break;
		}
		for(c=0;c<4;c++){
			flag2=1;
			if(count==4){
				break;
			}
			while(flag2==1){
				printf("Enter Number, must be between 0-4 in position %d %d and not repeat in row column or in it's own grid ",r+1,c+1);
				scanf("%d",&temp2);
				if(temp2!=0){
					
				
				if(CheckValid(temp, r, c, temp2)==1&&(temp2>0&&temp2<5)){
					count++;
					flag2=0;
					temp[r][c]=temp2;
				}
		    	}
		    	else if(temp2==0){
		    		temp[r][c]=temp2;
		    		flag2=0;
				}
			}
		xptr=&temp[0][0];
		PrintSudoku(xptr);
		}
	}
		
}
int CheckValid(int a[4][4], int r,int c, int n){
	int rs, cs, x;
	rs = (r/2)*2;
	cs = (c/2)*2;
	for (x=0;x<4;x++){
		if(a[r][x]==n){
			return 0;
		}
		if(a[x][c]==n){
			return 0;
		}
		if(a[rs+(x%2)][cs+(x/2)]==n){
			return 0;
		}
		
	}
	return 1;
}
int SudokuSolver(int temp[4][4], int r, int c){
	int n;
	int q, e;
	int *xptr;
	if(r<4&&c<4){
		if(temp[r][c]!=0){
			if(c+1<4){
				return SudokuSolver(temp, r, c+1);
			}
			else if(r+1<4){
				return SudokuSolver(temp, r+1, 0);
			}
			else{
				return 1;
			}
		}
		else{
			for(n=1;n<5;n++){
				if(CheckValid(temp, r, c, n)==1){
					temp[r][c]=n;
					xptr = &temp[0][0];
					PrintSudoku(xptr);
				
					if(c+1<4){
						if(SudokuSolver(temp,r,c+1)==1){
							return 1;
						}
						else{
							printf("\nBacktracking\n");
							temp[r][c]=0;
							PrintSudoku(xptr);
						
						}
					}
					else if(r+1<4){
						if(SudokuSolver(temp,r+1,0)==1){
							return 1;
						}
						else{
							printf("\nBacktracking\n");
							temp[r][c]=0;
							PrintSudoku(xptr);
					
						}
					}
		        }
		    	
			}
		}
		return 0;
	}
	else{
		return 1;
	}
}
int main(){
	int x[4][4] = {0};
	int temp2=0, flag2 = 0,i,j;
	int *a;
	int r = 0, c = 0, q, e, count=0;
	FILE *fptr;
	printf("Number must not repeated in row, in column and in it's 2x2 column \nUser can only input 4 non zero numbers\n");
	printf("If you want to leave cell empty, please input 0 when asked to input values\n");
	TakeInput(x);
	a=&x[0][0];
	SudokuSolver(x,0,0);
	fptr = fopen("OutputProject.txt","w");
	for(i=1;i<=16;i++){
		fprintf(fptr,"%d",*a);
		if(i%4==2){
			fprintf(fptr,"|");
		}
		if(i%4==0){
			fprintf(fptr,"\n");
		}
		if(i==8){
			fprintf(fptr,"-----\n");

		}
		a++;
	}
	fclose(fptr);




	
	
	
}

