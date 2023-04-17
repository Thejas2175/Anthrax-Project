import csv
from pathlib import Path



my_list = []
my_list2=[]

fileloc1=Path.cwd() /"featuresnew.csv"
file1= open(fileloc1,"r")
reader = csv.reader(file1)

fileloc2=Path.cwd() /"labelsnew.csv"
file2= open(fileloc2,"r")
reader2=csv.reader(file2)

for line2 in reader2:
    my_list.append(line2)


for line in reader:
    my_list2.append(line)


value=0
for temp in range(7):
    if my_list[1][temp]==my_list2[3][temp]:
        value=value+(1/8)
        
value=value*100

print("Anthrax Disease")
print(value, "%") 





